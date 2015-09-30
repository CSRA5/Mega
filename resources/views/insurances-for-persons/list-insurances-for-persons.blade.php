@extends('layouts/layout')
@section('title','Seguro para personas-Mega Corredores de Seguros')
@section('description','')
 

@section('content')

<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Seguro para personas</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>


</section>

 
<section>
			
		<div class="container">
				
			<p>
				Seguros de Vida especialmente diseñados para personas y que ofrecen coberturas en caso de muerte natural y accidental. Existen Seguros de Vida que combinan la protección con el ahorro, permitiéndole generar un fondo que podrá disfrutar en vida.

			</p>

			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
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


@endsection