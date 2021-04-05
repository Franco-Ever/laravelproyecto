<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('img/logo1.png')}}" class="logo-brand" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <ion-icon name="menu-outline"></ion-icon>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" id="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="productos">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="exporta">Exporta con Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="nosotros">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="contactanos">Contactanos</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Inicar Sesión</button>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Registrarse</button>
          </form>
        </div>
      </div>
    </nav>
    <section id="hero">
      <div class="container">
        <div class="content-center topmargin-lg">
        <h1>Website Design and Development</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam maxime accusamus nesciunt amet, 
          fuga iste ut eveniet expta facere pariatur?</p>
          <a href="#" class="btn btn-light topmargin-sm">Explore now <ion-icon name="arrow-forward-circle"></ion-icon></a>
        </div>
      </div>
    </section>

    <section id="portfolio">
      <div class="container-fluid">
        <div class="content-center">
          <h2>We work with exciting brands to build <b>amazing products</b>.</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur modi in, necessitatibus consectetur aut laboriosam explicabo 
            molestiae ducimus accusamus sint blanditiis est ipsa numquam quisquam qui laudantium nam, distinctio assumenda.</p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Keep calm and Eat</h2>
                </a>
                <a href="#">
                  <p>- App/Digital Product</p>
                </a>
              </div>
              <img src="{{asset('img/platano.jpg')}}" class="img-fluid" alt="portfolio 1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Keep calm and Eat</h2>
                </a>
                <a href="#">
                  <p>- App/Digital Product</p>
                </a>
              </div>
              <img src="{{asset('img/naranja1.jpg')}}" class="img-fluid" alt="portfolio 1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Keep calm and Eat</h2>
                </a>
                <a href="#">
                  <p>- App/Digital Product</p>
                </a>
              </div>
              <img src="{{asset('img/palta1.jpg')}}" class="img-fluid" alt="portfolio 1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Keep calm and Eat</h2>
                </a>
                <a href="#">
                  <p>- App/Digital Product</p>
                </a>
              </div>
              <img src="{{asset('img/coca1.jpg')}}" class="img-fluid" alt="portfolio 1">
            </div>
          </div>
        </div>
        <div class="text-center topmargin-sm">
          <p>Ready to accelerate your project?</p>
          <a href="#" class="text-dark">Just let us know.</a>
        </div>
      </div>
    </section>
    <section id="aboutus" class="bg-light-grey">
      <div class="container">
        <div class="content-center">
          <h2>Keep calm, you're in a <b>good company</b></h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur modi in, necessitatibus consectetur aut laboriosam explicabo 
            molestiae ducimus accusamus sint blanditiis est ipsa numquam quisquam qui laudantium nam, distinctio assumenda.</p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="member-container">
              <div class="member-details">
                <h5>Rodrigo Mendoza Avila</h5>
                <span>Desarrollador Web</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-dribbble"></ion-icon></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                </ul>
              </div>
              <img src="{{asset('img/usuario1.png')}}" class="img-fluid" alt="member 1">
            </div>
          </div>
          <div class="col-md-4">
            <div class="member-container">
              <div class="member-details">
                <h5>Ever Cupi Franco</h5>
                <span>Desarrollador Web</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-dribbble"></ion-icon></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                </ul>
              </div>
              <img src="{{asset('img/usuario1.png')}}" class="img-fluid" alt="member 2">
            </div>
          </div>
          <div class="col-md-4">
            <div class="member-container">
              <div class="member-details">
                <h5>Misael Marquez Gutierrez</h5>
                <span>Desarrollador Web</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-dribbble"></ion-icon></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                </ul>
              </div>
              <img src="{{asset('img/usuario1.png')}}" class="img-fluid" alt="member 3">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials">
      <div class="container">
        <div class="content-center">
          <h2>A few word from <b>our clients....</b></h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur modi in, necessitatibus consectetur aut laboriosam explicabo 
            molestiae ducimus distinctio assumenda.</p>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-container">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur modi in, necessitatibus consectetur aut laboriosam explicabo 
                  molestiae ducimus distinctio assumenda.</p>
                  <div class="rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                    </ul>
                  </div>
                  <div class="testimonial-user">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="{{asset('img/usu1.jpg')}}" class="img-fluid" alt="testimonial user 1">
                      </div>
                      <div class="col-md-9">
                        <h6>Marisa Mayer</h6>
                        <span>Yahoo Ceo</span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-container">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur modi in, necessitatibus consectetur aut laboriosam explicabo 
                  molestiae ducimus distinctio assumenda.</p>
                  <div class="rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                    </ul>
                  </div>
                  <div class="testimonial-user">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="{{asset('img/usu1.jpg')}}" class="img-fluid" alt="testimonial user 1">
                      </div>
                      <div class="col-md-9">
                        <h6>Marisa Mayer</h6>
                        <span>Yahoo Ceo</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
              <div class="carousel-container">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur modi in, necessitatibus consectetur aut laboriosam explicabo 
                  molestiae ducimus distinctio assumenda.</p>
                  <div class="rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                    </ul>
                  </div>
                  <div class="testimonial-user">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="{{asset('img/usu1.jpg')}}" class="img-fluid" alt="testimonial user 1">
                      </div>
                      <div class="col-md-9">
                        <h6>Elon musk</h6>
                        <span>Yahoo Ceo</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <div class="control-button">
              <ion-icon name="arrow-back-circle"></ion-icon>
              <span class="sr-only">Previous</span>
            </div>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <div class="control-button">
              <ion-icon name="arrow-forward-circle"></ion-icon>
            </div>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6 topmargin-sm">
            <h3>Ready to accelerate your project? <b>just let us know.</b></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempore optio vitae repellat, voluptas temporibus. Explicabo, voluptatum 
              quidem maiores tenetur inventore nulla facere sunt nisi aperiam molestias ducimus voluptas rerum!</p>
          </div>
          <div class="col-md-6 topmargin-sm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Last name">
                </div>
              </div>
              <div class="col-md-12">
                <form action="" class="form-group">
                  <input type="email" class="form-control" id="" placeholder="Email">
                </form>
              </div>
              <div class="col-md-12">
                <form action="" class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Company name">
                </form>
              </div>
              <div class="col-md-12">
                <form action="" class="form-group">
                  <input type="number" class="form-control" id="" placeholder="Phone Number (opcional)">
                </form>
              </div>
              <div class="col-md-12">
                <a href="#" class="btn btn-dark full-width">Contact sales</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="footer" class="bg-dark">
      <div class="container">
        <img src="{{asset('img/logo1.png')}}" alt="logo" class="logo-brand">
        <ul class="list-inline">
          <li class="list-inline-item footer-menu"><a href="#">Home</a></li>
          <li class="list-inline-item footer-menu"><a href="#">Portfolio</a></li>
          <li class="list-inline-item footer-menu"><a href="#">About us</a></li>
          <li class="list-inline-item footer-menu"><a href="#">Pricing</a></li>
          <li class="list-inline-item footer-menu"><a href="#">Contact</a></li>
        </ul>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
          <li class="list-inline-item"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
          <li class="list-inline-item"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
          <li class="list-inline-item"><a href="#"><ion-icon name="logo-dribbble"></ion-icon></a></li>
          <li class="list-inline-item"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
        </ul>
        <small>©2019 All Rights reserved Created by Ever C. F.| Misael M. G.|Rodrigo M. A.</small>
      </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>