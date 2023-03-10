<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Diego Velázquez">
    <meta name="description" content="Smart Agency is a one page responsive Bootstrap 4 template. This is a free open source theme, you can use our theme for any purpose, even commercially. Create amazing websites with this easy to customize template.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset ('/assets/css/styles.css') }}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset ('/assets/images//favicon.png ') }}" />

    <title>ALPHA TECHNOLOGY</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <img src="assets/images/logo-dark.svg" class="logo-brand" alt="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets/images/menu.svg">
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Productos y Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contactanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero">
        <duv class="container">
            <div class="content-center">
                <h1 class="mt-5">Diseño y desarrollo de sitios web</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
                <a href="#" class="btn btn-secondary mt-4">Contactanos <img src="assets/images/arrow-right.svg" class="ml-2"></a>
            </div>
        </duv>
    </section>

    <section class="nosotros">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card card1">
                <h3>Quienes Somos</h3>
                <p>Somos una empresa de base tecnológica y de servicios, que busca la innovación de nuestros clientes para afrontar los retos y necesidades que se les presentan. 
                    Llevamos a cabo nuestras actividades basándonos fuertemente en la aplicación de los avances tecnológicos, 
                    así como de nuestra experiencia como profesionistas, para generar nuevos productos o servicios, haciendo uso de la informática para fomentar la innovación.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card car2">
                <h3>Visión</h3>
                <p>Siendo una empresa de base tecnológica y de servicios, nuestra misión es generar valor a nuestros clientes, 
                    asegurando el cumplimiento de sus objetivos estratégicos mediante el uso de las tecnologías, en un ambiente estructurado y adaptable a cada necesidad,
                    con el fin de incrementar su competitividad y productividad. Nos esforzamos por involucrarnos, avanzar, 
                    crecer y mejorar continuamente para lograr la máxima satisfacción de nuestros clientes y usuarios,
                    cuidando la atención personalizada, la razón, el sentido común y la eficacia.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card3">
                <h3>Misión</h3>
                <p>Ser reconocidos como una empresa con servicios de calidad, excelencia e integralidad. Ser percibidos como un aliado estratégico,
                    a través de la generación de valor y con un alto nivel de satisfacción de nuestros clientes,
                    empleados y socios, mediante la atención personalizada de cada uno de nuestros integrantes.</p>
                </div>
            </div>
        </div>
        </div>
    </section >
   

    <section id="portfolio">
        <div class="container-fluid">
            <div class="content-center">
                <h2> <b>Trabajamos con marcas emocionantes.</b></h2>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>-->
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                           <!-- <a href="#">
                                <h2>Keep Calm and Eat</h2>
                            </a>
                            <a href="#">
                                <p>— App/Digital Product</p>
                            </a>-->
                        </div>
                        <img src="{{ asset  ('/assets/images/p1.png ') }} " class="img-fluid" alt="Portfolio 01">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <!-- <a href="#">
                                <h2>Keep Calm and Eat</h2>
                            </a>
                            <a href="#">
                                <p>— App/Digital Product</p>
                            </a>-->
                        </div>
                        <img src="{{ asset  ('/assets/images/p2.png ') }} " class="img-fluid" alt="Portfolio 02">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                           <!-- <a href="#">
                                <h2>Urban Oasis</h2>
                            </a>
                            <a href="#">
                                <p>— App/Digital Product</p>
                            </a>-->
                        </div>
                        <img src="{{ asset  ('/assets/images/p3.png ') }} " class="img-fluid" alt="Portfolio 03">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <!--<a href="#">
                                <h2>No Speed Limits</h2>
                            </a>
                            <a href="#">
                                <p>— App/Digital Product</p>
                            </a>-->
                        </div>
                        <img src="{{ asset  ('/assets/images/p4.png ') }} " class="img-fluid" alt="Portfolio 04">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <!--<a href="#">
                                <h2>No Speed Limits</h2>
                            </a>
                            <a href="#">
                                <p>— App/Digital Product</p>
                            </a>-->
                        </div>
                        <img src="{{ asset  ('/assets/images/p5.png ') }} " class="img-fluid" alt="Portfolio 05">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                           <!-- <a href="#">
                                <h2>No Speed Limits</h2>
                            </a>
                            <a href="#">
                                <p>— App/Digital Product</p>
                            </a>-->
                        </div>
                        <img src="{{ asset  ('/assets/images/p6.png ') }} " class="img-fluid" alt="Portfolio 06">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <!-- <a href="#">
                                <h2>No Speed Limits</h2>
                            </a>
                            <a href="#">
                                <p>— App/Digital Product</p>
                            </a>-->
                        </div>
                        <img src="{{ asset  ('/assets/images/p7.png ') }} " class="img-fluid" alt="Portfolio 07">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <!-- <a href="#">
                                <h2>No Speed Limits</h2>
                            </a>
                            <a href="#">
                                <p>— App/Digital Product</p>
                            </a>-->
                        </div>
                        <img src="{{ asset  ('/assets/images/p8.png ') }} " class="img-fluid" alt="Portfolio 08">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <!-- <a href="#">
                                <h2>No Speed Limits</h2>
                            </a>
                            <a href="#">
                                <p>— App/Digital Product</p>
                            </a>-->
                        </div>
                        <img src="{{ asset  ('/assets/images/p9.svg ') }} " class="img-fluid" alt="Portfolio 09">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <!-- <a href="#">
                                <h2>No Speed Limits</h2>
                            </a>
                            <a href="#">
                                <p>— App/Digital Product</p>
                            </a>-->
                        </div>
                        <img src="{{ asset  ('/assets/images/p10.png ') }} " class="img-fluid" alt="Portfolio 10">
                    </div>
                </div>
            </div>
           <!-- <div class="text-center mt-4">
                <p class="">Ready to accelerate your project?</p>
                <a href="#" class="text-dark"><b>Just let us know.</b></a>
            </div>-->
        </div>
    </section>
    <section id="marcas">
    <div class="container-fluid">
        <div class="content-center">
           <h2> <b>Trabajamos con marcas emocionantes.</b></h2>
            <div class="col-md-2">
                <div class="portfolio-container">
                <div class="portfolio-details">
                    <!-- <a href="#">
                    <h2>No Speed Limits</h2>
                   </a>
                  <a href="#">
                  <p>— App/Digital Product</p>
                   </a>-->
                </div>
                <img src="{{ asset  ('/assets/images/p10.png ') }} " class="img-fluid" alt="Portfolio 10">
                </div>
            </div>
        </div>
    </div>

    </section>

    <section id="team" class="bgLightGrey">
        <div class="container">
            <div class="content-center">
                <h2>Mantén la calma, <b>estás en buena compañía.</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="member-container">
                        <div class="member-details">
                            <h5>Michelle B. Rowe</h5>
                            <span>Creative director</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><img src="assets/images/instagram.svg" class="img-fluid"></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/twitter.svg" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/youtube.svg" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/dribbble.svg" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/facebook.svg" class="img-fluid"></a></li>
                            </ul>
                        </div>
                        <img src="assets/images/member-01.jpg" class="img-fluid" alt="member 1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="member-container">
                        <div class="member-details">
                            <h5>Veronica D. Martin</h5>
                            <span>Lead designer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><img src="assets/images/instagram.svg" class="img-fluid"></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/twitter.svg" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/youtube.svg" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/dribbble.svg" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/facebook.svg" class="img-fluid"></a></li>
                            </ul>
                        </div>
                        <img src="assets/images/member-02.jpg" class="img-fluid" alt="member 2">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="member-container">
                        <div class="member-details">
                            <h5>Richard A. Hair</h5>
                            <span>Lead developer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><img src="assets/images/instagram.svg" class="img-fluid"></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/twitter.svg" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/youtube.svg" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/dribbble.svg" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/facebook.svg" class="img-fluid"></a></li>
                            </ul>
                        </div>
                        <img src="assets/images/member-03.jpg" class="img-fluid" alt="member 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="divider">
        <div class="container">
            <div class="content-center">
                <h2>Precios creados para <b>cada negocio</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-container">
                        <div class="plans plan-light">
                            <h4>Starter solution</h4>
                            <h2>$89 <span>/ per month</span></h2>
                            <h4>Per 1 Million Data Points</h4>
                            <ul class="mt-3">
                                <li>Integration with Google Analytics</li>
                                <li>Online payments</li>
                                <li>Solution Architect</li>
                                <li>Dedicated Support</li>
                            </ul>
                            <a href="#" class="btn btn-primary full-width mt-4">Start now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pricing-container">
                        <div class="plans plan-dark">
                            <h4>Enterprise solution</h4>
                            <h2>$139 <span>/ per month</span></h2>
                            <h4>Per 1 Million Data Points</h4>
                            <ul class="mt-3">
                                <li>Integration with Google Analytics</li>
                                <li>Online payments</li>
                                <li>Solution Architect</li>
                                <li>Dedicated Support</li>
                            </ul>
                            <a href="#" class="btn btn-alternate full-width mt-4">Start now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="divider">
        <div class="container">
            <div class="content-center">
                <h2>A few words from <b>our clients…</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.
                            </p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/member-01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Marissa Mayer</h6>
                                        <span>Yahoo CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/member-02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Marry Barra</h6>
                                        <span>General Motors CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/member-03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Elon Musk</h6>
                                        <span>Tesla CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <div class="control-button">
                        <img src="assets/images/arrow-borderless-left.svg" class="img-fluid">
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <div class="control-button">
                        <img src="assets/images/arrow-borderless-right.svg" class="img-fluid">
                    </div>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <h3>Ready to accelerate your project? <b>just let us know.</b></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam
                        mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.
                        contact@smartagency.com</p>
                </div>
                <div class="col-md-6 mt-4">
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
                            <div class="form-group">
                                <input type="email" class="form-control" id="" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Company name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" class="form-control" id="" placeholder="Phone number (optional)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="btn btn-primary full-width">Contact sales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bgDark">
        <div class="container">
            <img src="assets/images/logo-light.svg" class="logo-brand" alt="logo">
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="#">Home</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Portfolio</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Nosotros</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Productos y Servicios</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Contactanos</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><img src="assets/images/instagram.svg" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="assets/images/twitter.svg" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="assets/images/youtube.svg" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="assets/images/dribbble.svg" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="assets/images/facebook.svg" class="img-fluid"></a></li>
            </ul>
            <small>©2023 Todos los derechos reservados. </small>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('/assets/js/jquery.js') }}"></script>
    <script src="{{asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{asset('/assets/js/bootstrap.min.js') }}"></script>
</body>

</html>