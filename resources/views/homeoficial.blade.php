@extends('plantilla')
@section('carrousel')
  <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/general/imagen (1).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
        <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/general/imagen (23).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
        <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/general/imagen (12).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
        <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>

@endsection
@section('contenido')
<br>
<br>
<!-- MAIN --> <!-- MAIN --> <!-- MAIN --> <!-- MAIN -->
<main class="home">
<!-- /* ARTICULOS DESTACADOS */ /* ARTICULOS DESTACADOS */  -->
  <header>
    <h2>ARTICULOS DESTACADOS</h2>
  </header>
<div class="container">
  <div class="row">
    <div class="col-md-3 col-sm-6">
        <div class="card text-center">
          <div class="card-block">
            <img src="images/general/imagen (1).jpeg" alt="" class="img-fluid">
            <div class="card-title">
              <h4>Automovil 60'</h4>
            </div>
            <div class="card-text">Descripcion del Producto</div>
            <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="card text-center">
            <div class="card-block">
              <img src="images/general/imagen (1).png" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Jarron Antiguo</h4>
              </div>
              <div class="card-text">Descripcion del Producto</div>
              <a style="margin-top: 10px;margin-bottom: 10px;" href="#" class="btn btn-success">$1000</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card text-center">
              <div class="card-block">
                <img src="images/general/imagen (5).jpg" alt="" class="img-fluid">
                <div class="card-title">
                  <h4>Arma Sniper</h4>
                </div>
                <div class="card-text">Descripcion del Producto</div>
                <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="card text-center">
                <div class="card-block">
                  <img src="images/general/imagen (21).jpg" alt="" class="img-fluid">
                  <div class="card-title">
                    <h4>Estereo Generico</h4>
                  </div>
                  <div class="card-text">Descripcion del Producto</div>
                  <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card text-center">
                  <div class="card-block">
                    <img src="images/general/imagen (25).jpg" alt="" class="img-fluid">
                    <div class="card-title">
                      <h4>Masion de Lujo</h4>
                    </div>
                    <div class="card-text">Descripcion del Producto</div>
                    <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="card text-center">
                    <div class="card-block">
                      <img src="images/general/imagen (27).jpg" alt="" class="img-fluid">
                      <div class="card-title">
                        <h4>Set de Comedor </h4>
                      </div>
                      <div class="card-text">Descripcion del Producto</div>
                      <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card text-center">
                      <div class="card-block">
                        <img src="images/general/imagen (20).jpg" alt="" class="img-fluid">
                        <div class="card-title">
                          <h4>Motor Usado</h4>
                        </div>
                        <div class="card-text">Descripcion del Producto</div>
                        <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="card text-center">
                        <div class="card-block">
                          <img src="images/general/imagen (16).jpg" alt="" class="img-fluid">
                          <div class="card-title">
                            <h4>Bote con motor turbo</h4>
                          </div>
                          <div class="card-text">Descripcion del Producto</div>
                          <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
                        </div>
                      </div>
                    </div>
    </div>
  </div>
<!-- /* ARTICULOS DESTACADOS */ /* ARTICULOS DESTACADOS */ -->
<br>
<br>
<!-- /* OFERTAS DESTACADOS */ /* OFERTAS DESTACADOS */ -->
  <header>
    <h2>OFERTAS DESTACADOS</h2>
  </header>
<div class="container">
  <div class="row">
    <div class="col-md-3 col-sm-6">
        <div class="card text-center">
          <div class="card-block">
            <img src="images/general/imagen (17).jpg" alt="" class="img-fluid">
            <div class="card-title">
              <h4>Asientos de cuero para autos descapotables</h4>
            </div>
            <div class="card-text">Descripcion del Producto</div>
            <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="card text-center">
            <div class="card-block">
              <img src="images/general/imagen (15).jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Complejo de departamentos</h4>
              </div>
              <div class="card-text">Descripcion del Producto</div>
              <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card text-center">
              <div class="card-block">
                <img src="images/general/imagen (14).jpg" alt="" class="img-fluid">
                <div class="card-title">
                  <h4>Set de copas de cristal para catering</h4>
                </div>
                <div class="card-text">Descripcion del Producto</div>
                <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="card text-center">
                <div class="card-block">
                  <img src="images/general/imagen (13).jpg" alt="" class="img-fluid">
                  <div class="card-title">
                    <h4>Set de Comedor para Motorhome</h4>
                  </div>
                  <div class="card-text">Descripcion del Producto</div>
                  <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card text-center">
                  <div class="card-block">
                    <img src="images/general/imagen (11).jpg" alt="" class="img-fluid">
                    <div class="card-title">
                      <h4>Chevrolet Aveo GT</h4>
                    </div>
                    <div class="card-text">Descripcion del Producto</div>
                    <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="card text-center">
                    <div class="card-block">
                      <img src="images/general/imagen (10).jpg" alt="" class="img-fluid">
                      <div class="card-title">
                        <h4>Mochila para Fotografo</h4>
                      </div>
                      <div class="card-text">Descripcion del Producto</div>
                      <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card text-center">
                      <div class="card-block">
                        <img src="images/general/imagen (9).jpg" alt="" class="img-fluid">
                        <div class="card-title">
                          <h4>Bicicleta Mountain 26'</h4>
                        </div>
                        <div class="card-text">Descripcion del Producto</div>
                        <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="card text-center">
                        <div class="card-block">
                          <img src="images/general/imagen (7).jpg" alt="" class="img-fluid">
                          <div class="card-title">
                            <h4>Muebles de Roble</h4>
                          </div>
                          <div class="card-text">Descripcion del Producto</div>
                          <a style="margin-top: 10px;margin-bottom: 10px;"  href="#" class="btn btn-success">$1000</a>
                        </div>
                      </div>
                    </div>
    </div>
  </div>
<!-- /* OFERTAS DESTACADOS */ /* OFERTAS DESTACADOS */ -->
</main>
<!-- MAIN --> <!-- MAIN --> <!-- MAIN --> <!-- MAIN -->
<br>
@endsection
