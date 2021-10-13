<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PageController extends Controller
{
    public function __invoke($page = 'home')
    {
        $viewName = "pages.{$page}";
        if (!view()->exists($viewName))
            return abort(404);
        return view($viewName);
    }
}
