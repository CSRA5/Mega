@extends('layouts/layout')
@section('title','Seguro para Empresas-Mega Corredores de Seguros')
@section('description','')
 

@section('content')

<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Seguro para empresas</strong></li>
						</ul>
					</div>
				</div>
			 
			</div>


</section>


<section >
	<div class="container">
		
		
			<p>
				Organización MEGA y su amplia experiencia en el mercado de seguros le permite ofrecer a nuestros clientes soluciones a gran escala con productos y servicios que se adecuen perfectamente a las necesidades de cada uno de ellos.

			</p>

	</div>

	<div class="container">
			<div class="row center">
				<div class="col-md-12">
					<img src="{{ asset('img/insurances/companies/seguro-empresas.png') }}" class="img-responsive" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 15px 0px -30px;">
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
										<i class="icon-featured micon icon-i-family-practice"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/seguro-de-vida-ley') }}">Seguro de vida ley</a></h4>
										<p>Seguro obligatorio para empleados y asegurados que presten servicio a un mismo empleador.</p>
										<p><a href="{{ url('seguro-para-empresas/seguro-de-vida-ley') }}" class="lnk-primary learn-more"><br>Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-secondary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-bus"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/seguro-de-flota-vehicular') }}">Seguro flota vehicular</a></h4>
										<p>Cubre la flota de vehículos de su empresa ante robo, daño a terceros y otros.</p>
										<p><a href="{{ url('seguro-para-empresas/seguro-de-flota-vehicular') }}" class="lnk-secondary learn-more"><br>Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-user-md"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/eps') }}">EPS</a></h4>
										<p>Programa médico que brinda atención ambulatoria y hospitalaria, consultas y emergencias.</p>
										<p><a href="{{ url('seguro-para-empresas/eps') }}" class="lnk-tertiary learn-more"><br>Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-building	º1q"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/multiriesgo-pyme') }}">Multiriesgo PYME</a></h4>
										<p>Seguro diseñado para proteger el patrimonio de las pequeñas empresas ante robos, incendios y otros.</p>
										<p><a href="{{ url('seguro-para-empresas/multiriesgo-pyme') }}" class="lnk-quaternary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-primary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i  class="icon-featured fa fa-shield"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/seguros-de-ingieneria') }}">Seguros de ingienería</a></h4>
										<p>Modalidades de cobertura que comtemplan determinados riesgos inherentes a la construcción de edificios y obras.</p>
										<p><a href="{{ url('seguro-para-empresas/seguros-de-ingieneria') }}" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-secondary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i  class="icon-featured fa fa-umbrella" ></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/seguro-de-transporte') }}" >Seguro de transporte</a></h4>
										<p>Protege los productos que transportas desde su punto de partida hasta su punto de destino. <br><br></p>
										<p><a href="{{ url('seguro-para-empresas/seguro-de-transporte') }}" class="lnk-secondary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-ship"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/responsabilidad-civil-para-hidrocarburos') }}">Responsabilidad social para hidrocarburos</a> </h4>
										<p>Cubre daños causados por manipulación de hidrocarburos.</p>
										<p><a href="{{ url('seguro-para-empresas/responsabilidad-civil-para-hidrocarburos') }}" class="lnk-tertiary learn-more"><br>Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6" data-appear-animation="fadeInDown">
								<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured micon icon-i-inpatient"></i>
										<h4 class="text-uppercase"><a href="{{ url('seguro-para-empresas/responsabilidad-civil-general') }}">Responsabilidad civil general</a></h4>
										<p>Otorga protección al asegurado si un tercero le exigiere indemnización por daños y perjuicios.</p>
										<p><a href="{{ url('seguro-para-empresas/responsabilidad-civil-general') }}" class="lnk-quaternary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
						</div>

					</div>


		</div>
</section>


@endsection