<?php
defined('ROOT') or die();

class Database{
  private $_host = '127.0.0.1';
  private $_port = '8889';
  private $_username = 'root';
  private $_password = 'root';
  private $_database = null;

  private $_connection = null;

  private $_query = null;
  private $_wheres = [];
  private $_select = '*';

  public function __construct($config)
  {
    $this->setConfig($config);
    $this->_connection = $this->getConnection();
  }

  public function setConfig($config)
  {
    $this->_host = $config['db_host'];
    $this->_port = $config['db_port'];
    $this->_username = $config['db_username'];
    $this->_password = $config['db_password'];
    $this->_database = $config['db_name'];
  }

  public function getConnection()
  {
    if ($this->_connection instanceof mysqli) return $this->_connection;
    $this->_connection = new mysqli(
      $this->_host,
      $this->_username,
      $this->_password,
      $this->_database,
      $this->_port
    );

    if ($this->_connection->errno){
      die("Error: Cannot connect to mysqli. {$this->_connection->error}");
    }
    return $this->_connection;
  }

  public function where($key, $value)
  {
    array_push($this->_wheres, "`{$key}`='{$value}'");
    return $this;
  }

  public function update($table, $data)
  {
    if ( $this->_query ) $this->_query = null;
    $this->_query = "UPDATE `{$table}` SET ";
    $sets = '';
    if (is_array($data)){
      foreach($data as $k => $v)
      {
        $sets .= ",`{$k}`='{$v}'";
      }
      $sets = substr($sets, 1);
    }
    $this->_query .= $sets;

    if (count($this->_wheres)){
      $wheres = implode(' and ', $this->_wheres);
      $this->_query .= " WHERE {$wheres}";
    }

    try {
      return $this->_connection->query($this->_query);
    } catch (Throwable $th) {
      throw $th;
    }finally{
      $this->_query = null;
      $this->_wheres = [];
    }
  }

  public function getOne($table){
    $data = $this->get($table);
    if (!$data) return null;
    if (count($data)) return $data[0];
    return null;
  }

  public function get($table)
  {
    if ( $this->_query ) $this->_query = null;
    
    $this->_query = "SELECT {$this->_select} FROM `{$table}`";

    if (count($this->_wheres)){
      $wheres = implode(' and ', $this->_wheres);
      $this->_query .= " WHERE {$wheres}";
    }

    try {
      $items = $this->_connection->query($this->_query);
      if (!$items) return [];

      $result = [];
      while ($item = $items->fetch_object()){
        $result[] = $item;
      }
      return $result;
    } catch (Throwable $th) {
      throw $th;
    } finally{
      $this->_query = null;
      $this->_wheres = [];
    }
  }
}