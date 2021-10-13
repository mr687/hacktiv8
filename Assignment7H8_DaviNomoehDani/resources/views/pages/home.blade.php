@extends('layout.app')

@section('content')
  <section id="home-slider" class="mb-5">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://images.unsplash.com/photo-1519735777090-ec97162dc266?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1545&q=80" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1593998066526-65fcab3021a2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1469&q=80" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1519735777090-ec97162dc266?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1445&q=80" class="d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

    {{-- PRODUCT CATEGORY SECTION --}}
    <section id="product-categories" class="mb-5">
      <h4 class="text-center mb-4">Kategori Produk</h4>
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top">
            <div class="card-body">
              <a href="#" class="text-decoration-none">
                <h5 class="card-title">Accessories</h5>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top">
            <div class="card-body">
              <a href="#" class="text-decoration-none">
                <h5 class="card-title">Modern Shoes</h5>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1627384113743-6bd5a479fffd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top">
            <div class="card-body">
              <a href="#" class="text-decoration-none">
                <h5 class="card-title">Cosmetics</h5>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- END PRODUCT CATEGORY SECTION --}}
    
    {{-- PROMO SECTION --}}
    <section id="product-promos" class="mb-5">
      <h4 class="text-center mb-4">Promo Terbaru</h4>
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1593087130576-389402bc050a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top">
            <div class="card-body">
              <a href="#" class="card-title text-decoration-none">
                <h5>Parfume Coco Paris</h5>
              </a>
              <div class="card-subtitle text-end"><del>Rp. 15.000,00</del></div>
              <div class="card-subtitle text-end">Rp. 10.000,00</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1558108545-a0f86eda7d55?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top">
            <div class="card-body">
              <a href="#" class="card-title text-decoration-none">
                <h5>Rose Abstrait</h5>
              </a>
              <div class="card-subtitle text-end"><del>Rp. 15.000,00</del></div>
              <div class="card-subtitle text-end">Rp. 10.000,00</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1548100721-15f0e76035c8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top">
            <div class="card-body">
              <a href="#" class="card-title text-decoration-none">
                <h5>Sepatu Boot Cool Gray</h5>
              </a>
              <div class="card-subtitle text-end"><del>Rp. 15.000,00</del></div>
              <div class="card-subtitle text-end">Rp. 10.000,00</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- END PROMO SECTION --}}

    {{-- NEWS SECTION --}}
    <section id="new-products" class="mb-5">
      <h4 class="text-center mb-4">Produk Terbaru</h4>
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1625772452859-1c03d5bf1137?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top">
            <div class="card-body">
              <a href="#" class="card-title text-decoration-none">
                <h5>Soap Dove Nourishment</h5>
              </a>
              <div class="card-subtitle text-end">Rp. 10.000,00</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top">
            <div class="card-body">
              <a href="#" class="card-title text-decoration-none">
                <h5>Nike Strong Blue</h5>
              </a>
              <div class="card-subtitle text-end">Rp. 10.000,00</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top">
            <div class="card-body">
              <a href="#" class="card-title text-decoration-none">
                <h5>Headset Aedie</h5>
              </a>
              <div class="card-subtitle text-end">Rp. 10.000,00</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- END NEWS SECTION --}}

    <hr>

    {{-- SHORT DESCRIPTION SECTION --}}
    <section id="short-description">
      <h4 class="text-center mb-4">Toko Online Menggunakan Laravel</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut amet quia ipsam! Possimus a, quo veniam ea exercitationem cum vero. Obcaecati adipisci repellat dolorem similique! Incidunt ducimus magni minima deserunt commodi dicta iure obcaecati ipsam, illum culpa repudiandae necessitatibus sapiente deleniti temporibus. Asperiores dolorum quo et? Et, nostrum hic soluta explicabo sequi temporibus molestiae assumenda officia quod quidem mollitia modi facere vel corporis? Repellat autem voluptatum nisi fuga, dignissimos pariatur?
      </p>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem veritatis tempore distinctio modi quidem expedita, sunt porro adipisci totam dolor deserunt laboriosam ad vitae quae fuga! Eos velit fugiat porro quod totam distinctio perferendis sed cum eaque recusandae? Dolores sequi impedit mollitia? Vel quaerat nihil aliquam inventore harum dolores excepturi minima consequatur iure error quidem praesentium accusamus dolor distinctio obcaecati, similique eligendi voluptas a est consequuntur earum dolorum. Harum, dolor.
      </p>
      <div class="text-center">
        <a href="/about" class="btn btn-secondary">Baca Selengkapnya</a>
      </div>
    </section>
    {{-- END SHORT DESCRIPTION SECTION --}}
@endsection