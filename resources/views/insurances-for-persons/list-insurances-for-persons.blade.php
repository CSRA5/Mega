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

<section >
	<div class="container">
		
		<p>
			Organización MEGA conoce las necesidades de sus , por esta , ofrece diversos seguros hechos pensando en ellos y en su , combinando la protección con el , para que sólo se preocupen en disfrutar de la . 

		</p>	 

	</div>

	<div class="container">
			<div class="row center">
				<div class="col-md-12">
					<img src="{{ asset('img/insurances/persons/seguro-personas.png') }}" class="img-responsive" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 15px 0px -30px;">
				</div>
			</div>
	</div>

</section>

 
<section>
			
		<div class="container">
						
			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
			</div>
			
					
			<div class="featured-boxes">
						<div class="row">
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

						<div class="row">
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-primary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i  class="icon-featured micon icon-i-social-services"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-personas/seguro-de-vida') }}">Seguro de vida</a></h4>
										<p>Seguro obligatorio para empleados y asegurados que presten servicio a un mismo empleador.</p>
										<p><a href="{{ url('seguro-para-personas/seguro-de-vida') }}" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-secondary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i  class="icon-featured micon icon-i-oncology" ></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-personas/seguro-oncologico') }}">Seguro oncológico</a></h4>
										<p>Cubre los gastos del tratamiento contra el cáncer, tanto hospitalario como ambulatorio.</p>
										<p><a href="{{ url('seguro-para-personas/seguro-oncologico') }}" class="lnk-secondary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured micon icon-i-intensive-care"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-personas/accidentes-personales') }}" >Accidentes personales</a></h4>
										<p>Protege a tu familia y a ti de los gastos y molestias que genera un accidente.</p>
										<p><a href="{{ url('seguro-para-personas/accidentes-personales') }}" class="lnk-tertiary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured micon icon-i-billing"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-personas/rapiseguros') }}">Rapiseguros</a></h4>
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