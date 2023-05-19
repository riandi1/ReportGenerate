@extends('layout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-in">
            <h1>Bienvenido a RiandiCode</h1>
            <h2>Creación de Reportes de Manera Rápida y Sencilla.</h2>
            <img src="{{ asset('assets/img/hero-img.png') }}" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
            <a href="#get-started" class="btn-get-started scrollto">Comenzar</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">

                    <h2>Sistema sencillo de gestión </h2>
                    <p class="separator">Crear reportes para tus necesidades jamas fue tan sencillo.</p>

                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/cloud.svg') }}" alt="img">
                            <h4>Implementa una consulta SQL para obtener resultados precisos</h4>
                            <p>Accede a un código fácil de manejar paso a paso, brindándote una experiencia sencilla y
                                efectiva.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/planet.svg') }}" alt="img">
                            <h4>Selecciona la plantilla y el tipo de vista de tu preferencia</h4>
                            <p>Personaliza tu experiencia eligiendo la plantilla y el tipo de vista que se adapten mejor a
                                tus necesidades y preferencias.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/asteroid.svg') }}" alt="img">
                            <h4>Ahorra tiempo en la creacion de reportes</h4>
                            <p>Optimiza tus procesos al utilizar nuestra solución diseñada para simplificar la generación de
                                informes en empresas.</p>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End Get Started Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us padd-section">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">

                    <div class="col-md-5 col-lg-3">
                        <img src="{{ asset('assets/img/about-img.png') }}" alt="About" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>

                    <div class="col-md-7 col-lg-5">
                        <div class="about-content" data-aos="fade-left" data-aos-delay="100">

                            <h2><<span>RiandiCode></span> Diseños dedicados para tus reportes </h2>
                            <p>Disfruta de una experiencia completa al generar reportes. Nuestro sistema cuenta con un
                                título claro para identificar cada reporte, una descripción o explicación detallada del
                                mismo. Además, ofrece opciones de filtros personalizables, lo que te permite ajustar los
                                resultados según tus necesidades. Los reportes se presentan en un datatable amigable, lo que
                                facilita la visualización y manipulación de los datos. También tendrás la posibilidad de
                                exportar los reportes en formato CSV y PDF, para compartirlos o archivarlos fácilmente.
                                Además, podrás filtrar las respuestas proporcionadas por la consulta, lo que te permitirá
                                acceder a la información relevante de manera rápida y eficiente.
                            </p>

                            <ul class="list-unstyled">
                                <li><i class="vi bi-chevron-right"></i>Diseño Creativo</li>
                                <li><i class="vi bi-chevron-right"></i>Facil de Usar</li>
                                <li><i class="vi bi-chevron-right"></i>Editable</li>
                                <li><i class="vi bi-chevron-right"></i>Ahorra tiempo</li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Características.</h2>
                    <p class="separator">Tecnologias implementadas para este desarrollo.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/paint-palette.svg') }}" alt="img">
                            <h4>Laravel (backend)</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/vector.svg') }}" alt="img">
                            <h4>HTML y JS</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/design-tool.svg') }}" alt="img">
                            <h4>BLADE</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/asteroid.svg') }}" alt="img">
                            <h4>BOOSTRAP - TAILWIND</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/asteroid.svg') }}" alt="img">
                            <h4>DATATABLE JQUERY</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/cloud-computing.svg') }}" alt="img">
                            <h4>GENERACION DE CODIGO</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/pixel.svg') }}" alt="img">
                            <h4>FACIL EDICION</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="{{ asset('assets/img/svg/code.svg') }}" alt="img">
                            <h4>SQL a una vista</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Screenshots Section ======= -->
        <section id="screenshots" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>App Gallery</h2>
                    <p class="separator">Integer cursus bibendum augue ac cursus .</p>
                </div>

                <div class="screens-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('assets/img/screen/1.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/screen/2.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/screen/3.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/screen/4.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/screen/5.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/screen/6.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/screen/7.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/screen/8.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Screenshots Section -->

        <!-- ======= Video Section ======= -->
        <section id="video" class="text-center">
            <div class="overlay">
                <div class="container-fluid container-full" data-aos="zoom-in">

                    <div class="row">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q&feature=emb_title"
                            class="glightbox play-btn"></a>
                    </div>

                </div>
            </div>
        </section><!-- End Video Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">

                    <h2>Team Member</h2>
                    <p class="separator">Integer cursus bibendum augue ac cursus .</p>
                </div>

                <div class="row">

                    <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="team-block bottom">
                            <img src="{{ asset('assets/img/team/1.jpg') }}" class="img-responsive" alt="img">
                            <div class="team-content">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                </ul>
                                <span>manager</span>
                                <h4>Kimberly Tran</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-block bottom">
                            <img src="{{ asset('assets/img/team/2.jpg') }}" class="img-responsive" alt="img">
                            <div class="team-content">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                </ul>
                                <span>manager</span>
                                <h4>Kimberly Tran</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                        <div class="team-block bottom">
                            <img src="{{ asset('assets/img/team/3.jpg') }}" class="img-responsive" alt="img">
                            <div class="team-content">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                </ul>
                                <span>manager</span>
                                <h4>Kimberly Tran</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                        <div class="team-block bottom">
                            <img src="{{ asset('assets/img/team/4.jpg') }}" class="img-responsive" alt="img">
                            <div class="team-content">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                </ul>
                                <span>manager</span>
                                <h4>Kimberly Tran</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="padd-section text-center">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">

                    <div class="col-md-8">

                        <div class="testimonials-content">
                            <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-inner" role="listbox">

                                    <div class="carousel-item  active">
                                        <div class="top-top">

                                            <h2>Our Users Speack volumes us</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type
                                                specimen book. It has survived not only five centuries.</p>
                                            <h4>Kimberly Tran<span>manager</span></h4>

                                        </div>
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="top-top">

                                            <h2>Our Users Speack volumes us</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type
                                                specimen book. It has survived not only five centuries.</p>
                                            <h4>Henderson<span>manager</span></h4>

                                        </div>
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="top-top">

                                            <h2>Our Users Speack volumes us</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type
                                                specimen book. It has survived not only five centuries.</p>
                                            <h4>David Spark<span>manager</span></h4>

                                        </div>
                                    </div>

                                </div>

                                <div class="btm-btm">

                                    <ul class="list-unstyled carousel-indicators">
                                        <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0"
                                            class="active"></li>
                                        <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="padd-section">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">

                    <h2>Ultimas Actualizaciones</h2>
                    <p class="separator">Encuentrate informado de las mejoras de este proyecto.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-md-6 col-lg-4">
                        <div class="block-blog text-left">
                            <a href="#"><img src="{{ asset('assets/img/blog/blog-image-1.jpg') }}"
                                    alt="img"></a>
                            <div class="content-blog">
                                <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                                <span>05, juin 2017</span>
                                <a class="float-end readmore" href="#">read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="block-blog text-left">
                            <a href="#"><img src="{{ asset('assets/img/blog/blog-image-2.jpg') }}"
                                    class="img-responsive" alt="img"></a>
                            <div class="content-blog">
                                <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                                <span>05, juin 2017</span>
                                <a class="float-end readmore" href="#">read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="block-blog text-left">
                            <a href="#"><img src="{{ asset('assets/img/blog/blog-image-3.jpg') }}"
                                    class="img-responsive" alt="img"></a>
                            <div class="content-blog">
                                <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                                <span>05, juin 2017</span>
                                <a class="float-end readmore" href="#">read more</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Newsletter Section ======= -->
        <section id="newsletter" class="newsletter text-center">
            <div class="overlay padd-section">
                <div class="container" data-aos="zoom-in">

                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-6">
                            <form class="d-flex" method="POST" action="#">
                                <input type="email" class="form-control " placeholder="Email Adress" name="email">
                                <button type="submit" class="btn btn-default"><i
                                        class="bi bi-location-arrow"></i>Subscribete</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Newsletter Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="padd-section">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Contacto</h2>
                    <p class="separator">Si encuentras algún error o tienes alguna sugerencia relacionada con el proyecto, no dudes en contactarme. Estoy abierto a recibir tus comentarios y mejoras para seguir mejorando nuestro trabajo juntos</p>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-3 col-md-4">

                        <div class="info">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>Colombia - Antioquia<br>El carmen de viboral</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <p>riandicode@gmail.com</p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p>+57 3146133941</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Tu nombre" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Tu correo" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Asunto" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Cargando</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
                                </div>
                                <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
