@extends('layouts/layout')
@section('title','Nosotros - Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Nosotros</strong></li>
						</ul>
					</div>
				</div>
				
			</div>
</section>

<section>
			
		<div class="container">
				
			<p>
				Organización Mega Corredores de Seguros  es una empresa joven, teniendo a todos sus ejecutivos a disposición del asegurado, profesionales de seguros, de amplia experiencia y en constante preparación, los mismos que están plenamente capacitados y dispuestos a atender todos los requerimientos de los clientes en forma inmediata y personalizada.
				Contamos con la suficiente experiencia en el manejo de cartera, lo que nos permite diseñar soluciones a la medida en todos los temas relacionados con la evaluación, elección, adquisición y gestión de los seguros individuales y empresariales.

			</p>

			<!--Gropus-->
			
			<div class="divider">
				<i class="fa fa-star"></i>
			</div>

		</div>

		<div class="container">
					<div class="row center">
						<div class="col-md-12">
							<img src="img/home/img-home-2.png" class="img-responsive" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 5px 0px 0px;">
						</div>
					</div>
		</div>


</section>

<section style="background-image: url( {{asset('img/back.png')}} );">

		<div class="container coll-w">

			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
			</div>
			
			<div class="panel-group panel-group-primary" id="accordion1">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2PrimaryOne">
									Misión
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">
								<p>Ser el mejor aliado de nuestros clientes, brindando la mejor asesoría en la contratación de pólizas de seguros, a fin de satisfacer plenamente sus necesidades y exigencias de seguridad, garantizando la justa compensación económica por riesgos o siniestros que afecten su patrimonio y el de su familia.</p>
							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-secondary" id="accordion2">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2PrimaryTwo">
									Visión
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">
								<p>Ser reconocidos como el mejor  Corredor de Seguros del norte del país y consolidarnos como la empresa líder en el Mercado, ofreciendo productos y servicios de excelencia, con recursos humanos altamente calificados, orientados a satisfacer plenamente las necesidades de nuestros clientes.</p>
							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-quaternary" id="accordion3">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2PrimaryThree">
									Objetivo
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryThree" class="accordion-body collapse">
							<div class="panel-body">
								<p>Brindar un servicio eficaz, puntual y a la vanguardia de las exigencias del mercado en lo referente al manejo y operatividad de seguros en todas sus variantes y modalidades. Ofreciendo a nuestros clientes la tranquilidad y seguridad de contar con un resguardo.</p>
							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-tertiary" id="accordion4">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse2PrimaryFour">
									Valores corporativos
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryFour" class="accordion-body collapse">
							<div class="panel-body">
								<ul class="list list-icons">
									<div class="row">
										<div class="col-md-2">
											<li><i class="fa fa-check"></i>Fidelización</li>
											<li><i class="fa fa-check"></i>Calidad</li>
											
										</div>
										<div class="col-md-3">
											<li><i class="fa fa-check"></i>Honestidad</li>
											<li><i class="fa fa-check"></i>Comunicación</li>
											
										</div>
										<div class="col-md-3">
											<li><i class="fa fa-check"></i>Igualdad</li>
											<li><i class="fa fa-check"></i>Desarrollo</li>
										</div>
										<div class="col-md-3">
											<li><i class="fa fa-check"></i>Planificación</li>
											<li><i class="fa fa-check"></i>Valor Agregado</li>
										</div>
									</div>
								</ul>
							</div>
						</div>

					</div>
			</div>

		</div>
			
</section>


	<section class="section section-default">
				
				<div class="container">

					<div class="row center">
						<div class="col-md-12">
						<h1 class="mb-sm">
								<strong>¿Qué tipo de seguro necesitas?</strong>
								<hr class="solid tall">
							</h1>
						</div>
					</div>
				
				<div class="featured-boxes">
						<div class="row">

							<div class="center">
								<h4>Seguros para personas. <a href="{{ url('seguros-para-personas') }}" class="lnk-secondary learn-more">Ver todos <i class="fa fa-angle-right"></i></a></h4>
								
							</div>

							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-primary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-heartbeat"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-personas/seguro-de-salud') }}">Seguro de salud</a></h4>
										<p>Servicio de medicina profesional. Atención médica ambulatoria y hospitalaria.</p>
										<p><a href="{{ url('seguro-para-personas/seguro-de-salud') }}" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-secondary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-book"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-personas/soat') }}">SOAT</a></h4>
										<p>Cubre los gastos médicos, tuyos y de terceros, en caso de accidentes de tránsito.</p>
										<p><a href="{{ url('seguro-para-personas/soat') }}" class="lnk-secondary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-automobile"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-personas/seguro-vehicular') }}">Seguro vehicular</a></h4>
										<p>Cubre los daños producidos por accidentes de vehículos que estén asegurados.</p>
										<p><a href="{{ url('seguro-para-personas/seguro-vehicular') }}" class="lnk-tertiary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-home"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-personas/seguro-domiciliario') }}">Seguro domiciliario</a></h4>
										<p>Servicio de asistencia domiciliaria ante imprevistos de robo, incendio y otros.</p>
										<p><a href="{{ url('seguro-para-personas/seguro-domiciliario') }}" class="lnk-quaternary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
						</div>

						<hr class="solid tall">

						<div class="row">

						<div class="center">
								<h4>Seguros para empresas. <a href="{{ url('seguros-para-empresas') }}" class="lnk-secondary learn-more">Ver todos <i class="fa fa-angle-right"></i></a></h4>
						</div>
						
						<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-primary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-stethoscope"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/seguro-de-vida-ley') }}">Seguro de vida ley</a></h4>
										<p>Seguro obligatorio para empleados y asegurados que presten servicio a un mismo empleador.</p>
										<p><a href="{{ url('seguro-para-empresas/seguro-de-vida-ley') }}" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
						</div>
						<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-secondary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-bus"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/seguro-de-flota-vehicular') }}">Seguro flota vehicular</a></h4>
										<p>Cubre la flota de vehículos de su empresa ante robo, daño a terceros y otros.</p>
										<p><a href="{{ url('seguro-para-empresas/seguro-de-flota-vehicular') }}" class="lnk-secondary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
						</div>
						<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-user-md"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/eps') }}">EPS</a></h4>
										<p>Programa médico que brinda atención ambulatoria y hospitalaria, consultas y emergencias.</p>
										<p><a href="{{ url('seguro-para-empresas/eps') }}" class="lnk-tertiary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
						</div>
						<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-building"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/multiriesgo-pyme') }}">Multiriesgo Pyme</a></h4>
										<p>Seguro diseñado para proteger el patrimonio de las pequeñas empresas ante robos, incendios y otros.</p>
										<p><a href="{{ url('seguro-para-empresas/multiriesgo-pyme') }}" class="lnk-quaternary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

	</section>
	
@endsection