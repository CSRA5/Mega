<!DOCTYPE html>
<html>
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <title> @yield('title') </title>
        <meta name="description" content= "@yield('description')"/>
        <meta name="author" content="Christian Ramirez"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png"/>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css"/>
         

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}"/>
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/wfmi-style.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}"/>
        <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.theme.default.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}"/>

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/theme-animate.css') }}"/>

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css') }}" media="screen"/>
        <link rel="stylesheet" href="{{ asset('vendor/circle-flip-slideshow/css/component.css') }}" media="screen"/>
        <link rel="stylesheet" href="{{ asset('vendor/circle-flip-slideshow/css/component.css') }}" media="screen"/>
        <link rel="stylesheet" href="{{ asset('vendor/nivo-slider/nivo-slider.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('vendor/nivo-slider/default/default.css') }}" media="screen"/>


        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('css/skins/default.css') }}"/>

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

        <!-- Head Libs -->
        <script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>

        <!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond/respond.js"></script>
			<script src="vendor/excanvas/excanvas.js"></script>
		<![endif]-->

        

    </head>
    <body>

        <div class="body">

            <div role="main" class="main">
                <div id="intro">
                    <header id="header" class="header-narrow" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAtElement": "#header", "stickySetTop": "0", "stickyChangeLogo": true}'>
                        <div class="header-body">
                            <div class="header-container container">
                                <div class="header-row">
                                    <div class="header-column">
                                        <div class="header-logo">
                                            <a href="{{ url('/')}}">
                                                <img alt="Mega Corredores" width="141" height="75" src="{{ asset('img/logo.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                
                                    <div class="header-column header-column-valign-top">
                                
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            
                                            <li class="hidden-xs">
                                                <a href="contact-us.html"><i class="fa fa-angle-right"></i>informes@megacorredores.pe</a>
                                            </li>
                                            <li>
                                                <span class="ws-nowrap"><i class="fa fa-phone"></i> 044-22661/ #934488</span>
                                            </li>
                                        </ul>
                                    </nav>

                                    </div>
                                 </div>
                            </div>

                            <div class="header-container container header-nav header-nav-push-top">
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <ul class="header-social-icons social-icons hidden-xs">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                  <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a href="{{ url('/') }}">Inicio</a></li>
                                        <li><a href="{{ url('empresa') }}">Empresa</a></li>

                                        <li class="dropdown">
                                           <a class="dropdown-toggle" href="{{ url('seguro-para-personas') }}">
                                                Seguro para personas
                                            </a>
                                       
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ url('seguro-para-personas/seguro-de-salud') }}">Seguro de salud</a></li>
                                                <li><a href="{{ url('seguro-para-personas/soat') }}">SOAT</a></li>
                                                <li><a href="{{ url('seguro-para-personas/seguro-vehicular') }}">Seguro vehicular</a></li>
                                                <li><a href="{{ url('seguro-para-personas/seguro-domiciliario') }}">Seguro domiciliario</a></li>
                                                <li><a href="{{ url('seguro-para-personas/seguro-oncologico') }}">Seguro oncológico</a></li>
                                                <li><a href="{{ url('seguro-para-personas/seguro-de-vida') }}">Seguro de vida</a></li>
                                                <li><a href="{{ url('seguro-para-personas/accidentes-personales') }}">Accidentes personales</a></li>
                                                <li><a href="{{ url('seguro-para-personas/rapiseguros') }}">Rapiseguros</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                           <a class="dropdown-toggle" href="{{ url('seguro-para-empresas') }}">
                                                Seguro para empresas
                                            </a>
                                       
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ url('seguro-para-empresas/seguro-de-vida-ley') }}">Seguro de vida ley</a></li>
                                                <li><a href="{{ url('seguro-para-empresas/sctr') }}">SCTR</a></li>
                                                <li><a href="{{ url('seguro-para-empresas/seguro-de-flota-vehicular') }}">Seguro flota vehicular</a></li>
                                                <li><a href="{{ url('seguro-para-empresas/seguro-de-transporte') }}">Seguro de transporte</a></li>
                                                <li><a href="{{ url('seguro-para-empresas/multiriesgo-pyme') }}">Multiriesgo Pyme</a></li>
                                                <li><a href="{{ url('seguro-para-empresas/seguros-de-ingieneria') }}">Seguros de ingienería</a></li>
                                                <li><a href="{{ url('seguro-para-empresas/eps') }}">EPS</a></li>
                                                <li><a href="{{ url('seguro-para-empresas/responsabilidad-civil-para-hidrocarburos') }}">Responsabilidad civil para hidrocabruros</a></li>
                                                <li><a href="{{ url('seguro-para-empresas/responsabilidad-civil-general') }}">Responsabilidad civil general</a></li>

                                            </ul>
                                        </li>

                                         <li><a href="{{ url('nuestro-equipo') }}">Staff</a></li>
                                        <li><a href="index.html">Contacto</a></li>

                                    </ul>
                                </nav> 
                                </div>
                            </div>
                        </div>
                    </header>
                </div>

                 @yield('content')


 				<div class="divider divider-secondary">
					<i class="fa fa-chevron-down"></i>
				</div>

 				<section class="contact-insurances">
 			 		<div class="container">

 			 			<div class="row center">
							<div class="col-md-12">
								<h1 class="mb-sm">Escríbenos para más información</h1>
							</div>
						</div>

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Exito!</strong> Tu mensaje ha sido enviado.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								<strong>Error!</strong> Hubo un error al enviar tu mensaje, por favor intentalo nuevamente.</div>
							 
							<form id="contactForm" action="{{ asset('php/contact-form.php') }}" method="POST">
								<div class="row">

									<div class="col-md-6">
										<div class="form-group">
											
												<label>Nombre *</label>
												<input type="text" value="" data-msg-required=" " maxlength="100" class="form-control" name="name" id="name" required>
											 											 
												<label>Email *</label>
												<input type="email" value="" data-msg-required=" " data-msg-email=" " maxlength="100" class="form-control" name="email" id="email" required>

												<label>Teléfono *</label>
												<input type="text" value="" data-msg-required=" " maxlength="100" class="form-control" name="phone" id="phone" required>
											 
											 
										</div>
									</div>

									<div class="col-md-6">
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Mensaje</label>
													<textarea maxlength="5000" data-msg-required="Por favor escribe un pequeño mensaje, no es obligatorio." rows="4" class="form-control" name="message" id="message" required></textarea>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<input type="submit" value="Enviar" class="btn btn-3d btn-primary btn-lg" data-loading-text="Loading...">
												</div>
											</div>
										</div>

									</div>
							 									 
								</div>
								 
							</form>	 
									
						</div>
						 
 				</section>        

		<section class="section section-default">
				
			<div class="container">

				<div class="row center">
					<div class="col-md-12">
						<h1 class="mb-sm">
							Nuestros seguros para personas
						</h1>
					</div>
				</div>
				
			<div class="featured-boxes">
						<div class="row">
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-primary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-heartbeat"></i>
										<h4 class="text-uppercase">Seguro de salud</h4>
										<p>Servicio de medicina profesional. Atención médica ambulatoria y hospitalaria.</p>
										<p><a href="{{ url('seguro-para-personas/seguro-de-salud') }}" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-secondary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-book"></i>
										<h4 class="text-uppercase">SOAT</h4>
										<p>Cubre los gastos médicos, tuyos y de terceros, en caso de accidentes de tránsito.</p>
										<p><a href="{{ url('seguro-para-personas/soat') }}" class="lnk-secondary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-automobile"></i>
										<h4 class="text-uppercase">Seguro vehicular</h4>
										<p>Cubre los daños producidos por accidentes de vehículos que estén asegurados.</p>
										<p><a href="{{ url('seguro-para-personas/seguro-vehicular') }}" class="lnk-tertiary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-home"></i>
										<h4 class="text-uppercase">Seguro domiciliario</h4>
										<p>Servicio de asistencia domiciliaria ante imprevistos de robo, incendio y otros.</p>
										<p><a href="{{ url('seguro-para-personas/seguro-domiciliario') }}" class="lnk-quaternary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-primary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i  class="icon-featured micon icon-i-social-services"></i>
										<h4 class="text-uppercase">Seguro de vida</h4>
										<p>Seguro obligatorio para empleados y asegurados que presten servicio a un mismo empleador.</p>
										<p><a href="{{ url('seguro-para-personas/seguro-de-vida') }}" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-secondary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i  class="icon-featured micon icon-i-oncology" ></i>
										<h4 class="text-uppercase">Seguro oncológico</h4>
										<p>Cubre los gastos del tratamiento contra el cáncer, tanto hospitalario como ambulatorio.</p>
										<p><a href="{{ url('seguro-para-personas/seguro-oncologico') }}" class="lnk-secondary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured micon icon-i-intensive-care"></i>
										<h4 class="text-uppercase">Accidentes personales</h4>
										<p>Protege a tu familia y a ti de los gastos y molestias que genera un accidente.</p>
										<p><a href="{{ url('seguro-para-personas/accidentes-personales') }}" class="lnk-tertiary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured micon icon-i-billing"></i>
										<h4 class="text-uppercase">Rapiseguros</h4>
										<p>Ofrece diversos tipos de indemnización de manera simple y económica, debido a su bajo costo.</p>
										<p><a href="{{ url('seguro-para-personas/rapiseguros') }}" class="lnk-quaternary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
						</div>

					</div>


			</div>

		</section>

		<section>
				
			<div class="container">

					<div class="row center">
						<div class="col-md-12">
						 
							 <div class="heading heading-border heading-middle-border heading-middle-border-center">
								<h1>Recomendaciones</h1>
							 </div>

						</div>
					</div>
					
					<div class="row">
						
						<div class="col-md-3" data-appear-animation="bounceIn">

									<h5 class="text-semibold text-uppercase mt-lg">10 Consejos para conducir bien<br/><br/></h5>
									<span class="thumb-info thumb-info-hide-wrapper-bg">
								<span class="thumb-info-wrapper">
									<img src="{{ asset('img/home/reco-4.png') }}" class="img-responsive" alt="">
									
								</span>
								<span class="thumb-info-caption text-center">
									<span class="thumb-info-caption-text">No dejes que el celular, una discusión o un disgusto ocasionen un accidente.</span>
									<p><a href="/" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p> 
									</span>
								</span>

						</div>

						<div class="col-md-3" data-appear-animation="bounceIn">

									<h5 class="text-semibold text-uppercase mt-lg">SOAT y Seguro Vehicular – ¿Cuál debo comprar?</h5>
									<span class="thumb-info thumb-info-hide-wrapper-bg">
								<span class="thumb-info-wrapper">
									<img src="{{ asset('img/home/reco-1.png') }}" class="img-responsive" alt="">
									
								</span>
								<span class="thumb-info-caption text-center">
									<span class="thumb-info-caption-text">Cuándo son necesarios y qué rol cumplen en nuestra protección.</span>
									<p><a href="/" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</span>
								</span>

						</div>

						<div class="col-md-3" data-appear-animation="bounceIn">

									<h5 class="text-semibold text-uppercase mt-lg">Como reaccionar ante una emergencia mientras manejas</h5>
									<span class="thumb-info thumb-info-hide-wrapper-bg">
								<span class="thumb-info-wrapper">
									<img src="{{ asset('img/home/reco-3.png') }}" class="img-responsive" alt="">
									
								</span>
								<span class="thumb-info-caption text-center" >
									<span class="thumb-info-caption-text">Si viajas solo en tu vehículo, no dejes de seguir estás recomendaciones.</span>
										<p><a href="/" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</span>
								</span>

						</div>

						<div class="col-md-3" data-appear-animation="bounceIn">

									<h5 class="text-semibold text-uppercase mt-lg">¿Qué hacer frente a un siniestro?<br/><br/></h5>
									<span class="thumb-info thumb-info-hide-wrapper-bg">
								<span class="thumb-info-wrapper">
									<img src="{{ asset('img/home/reco-2.png') }}" class="img-responsive" alt="">
									
								</span>
								<span class="thumb-info-caption text-center">
									<span class="thumb-info-caption-text">Mantén la calma y evita que tú o tu vehículo corran riesgos innecesarios.</span>
										<p><a href="/" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</span>
								</span>

						</div>
						 

					</div>

				</div>

			</section>

           </div>
              
                                       
             <footer class="short" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Nosotros</h4>
                            <p>Organización MEGA Corredores de Seguros SAC, se constituye como un nexo entre las diferentes compañías de seguros del país y nuestros clientes, brindando un servicio eficaz, puntual y adecuándonos a los requerimientos y planes que nos soliciten.... <a href="{{ url('/') }}" class="btn-flat btn-xs">Ver más <i class="fa fa-arrow-right"></i></a></p>
                            <hr class="light">
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <h5 class="mb-sm">Comunícate con nosotros</h5>
                            <span class="phone">044-22661/ #934488</span>
                            <ul class="list list-icons list-icons-sm">
                                <li><i class="fa fa-envelope"></i> <a href="mailto:okler@okler.net">informes@megacorredores.pe</a></li>
                            </ul>
                            <ul class="social-icons">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <p>© Organización Mega 2015 powered by <a href="http://dmark.pro/">Dmark</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <!-- Vendor -->
        <!--[if lt IE 9]>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
        <!--<![endif]-->
        <script src="{{ asset('vendor/jquery.appear/jquery.appear.js') }}"></script>
        <script src="{{ asset('vendor/jquery.easing/jquery.easing.js') }}"></script>
        <script src="{{ asset('vendor/jquery-cookie/jquery-cookie.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('vendor/common/common.js') }}"></script>
        <script src="{{ asset('vendor/jquery.validation/jquery.validation.js') }}"></script>
        <script src="{{ asset('vendor/jquery.stellar/jquery.stellar.js') }}"></script>
        <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
        <script src="{{ asset('vendor/jquery.gmap/jquery.gmap.js') }}"></script>
        <script src="{{ asset('vendor/jquery.lazyload/jquery.lazyload.js') }}"></script>
        <script src="{{ asset('vendor/isotope/jquery.isotope.js') }}"></script>
        <script src="{{ asset('vendor/owlcarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('vendor/jflickrfeed/jflickrfeed.js') }}"></script>
        <script src="{{  asset('vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('vendor/vide/vide.js') }}"></script>
            

         <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('js/theme.js') }}"></script>   
        
        <!-- Specific Page Vendor and Views -->
      
       
        <!-- Theme Custom -->
        <script src="{{ asset('js/custom.js') }}"></script>
        
        <!-- Theme Initialization Files -->
        <script src="{{ asset('js/theme.init.js') }}"></script>

        <script src= "{{ asset('js/views/view.contact.js') }}" ></script>
         
    

    </body>
</html>
