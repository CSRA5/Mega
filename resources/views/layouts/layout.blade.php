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
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon" />
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

        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="//v2.zopim.com/?3OAAZpwBhoyQBVAwM4Ydfx0I3pBb4AuT";z.t=+new Date;$.
        type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
        </script>
        <!--End of Zopim Live Chat Script-->        

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
                                                <img alt="Mega Corredores" class="logo" src="{{ asset('img/logo.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                
                                    <div class="header-column header-column-valign-top">
                                
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            
                                            <li class="hidden-xs">
                                                <a href="{{ url('contacto') }}"><i class="fa fa-angle-right"></i>informes@megacorredores.pe</a>
                                            </li>
                                            <li>
                                                <span class="ws-nowrap"><i class="fa fa-phone"></i> 044-226612/ #934488</span>
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
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/corredoresmega" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://twitter.com/MegaCorredores" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://pe.linkedin.com/pub/informes-mega/107/5b7/464" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                  <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a href="{{ url('/') }}">Inicio</a></li>
                                        <li><a href="{{ url('empresa') }}">Empresa</a></li>

                                        <li class="dropdown">
                                           <a class="dropdown-toggle" href="{{ url('seguros-para-personas') }}">
                                                Seguros para personas
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
                                           <a class="dropdown-toggle" href="{{ url('seguros-para-empresas') }}">
                                                Seguros para empresas
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

                                        <li><a href="{{ url('nuestro-equipo')}}">Staff</a></li>
                                        <li><a href="{{ url('contacto') }}">Contacto</a></li>

                                    </ul>
                                </nav> 
                                </div>
                            </div>
                        </div>
                    </header>
                </div>

                 @yield('content')
           </div>
              
                                       
             <footer class="short" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Nosotros</h4>
                            <p>Organización MEGA Corredores de Seguros SAC, se constituye como un nexo entre las diferentes compañías de seguros del país y nuestros clientes, brindando un servicio eficaz, puntual y adecuándonos a los requerimientos y planes que nos soliciten.... <a href="{{ url('empresa') }}" class="btn-flat btn-xs">Ver más <i class="fa fa-arrow-right"></i></a></p>
                            <hr class="light">
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <h5 class="mb-sm">Comunícate con nosotros</h5>
                            <span class="phone">044-226612/#934488</span>
                            <ul class="list list-icons list-icons-sm">
                                <li><i class="fa fa-envelope"></i> <a href="mailto:informes@megacorredores.pe">informes@megacorredores.pe</a></li>
                            </ul>
                            <ul class="social-icons">
                               <li class="social-icons-facebook"><a href="https://www.facebook.com/corredoresmega" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://twitter.com/MegaCorredores" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://pe.linkedin.com/pub/informes-mega/107/5b7/464" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
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
        
        <script src="{{ asset('vendor/circle-flip-slideshow/js/jquery.flipshow.js') }}"></script>
        <script src="{{ asset('js/views/view.home.js') }}"></script>
        
        <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
        
       
        <!-- Theme Custom -->
        <script src="{{ asset('js/custom.js') }}"></script>
        
        <!-- Theme Initialization Files -->
        <script src="{{ asset('js/theme.init.js') }}"></script>

         @yield('script')
    

    </body>
</html>
