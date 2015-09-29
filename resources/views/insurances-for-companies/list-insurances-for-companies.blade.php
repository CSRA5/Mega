@extends('layouts/layout')
@section('title','Seguro para personas')
@section('description','')
 

@section('content')

<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="#">Inicio</a></li>
							<li class="active">Seguro para empresas</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>Seguro para empresas</h1>
					</div>
				</div>
			</div>


</section>

 
<section>
			
		<div class="container">
				
			<p>
				Organización MEGA y su amplia experiencia en el mercado de seguros le permite ofrecer a nuestros clientes soluciones a gran escala con productos y servicios que se adecuen perfectamente a las necesidades de cada uno de nuestros clientes.

			</p>

			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
			</div>
			
					
					<div class="featured-boxes">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-primary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured micon icon-i-family-practice"></i>
										<h4 class="text-uppercase">Seguro de vida ley</h4>
										<p>Seguro obligatorio para empleados y asegurados que presten servicio a un mismo empleador.</p>
										<p><a href="{{ url('seguro-para-empresas/seguro-de-vida-ley') }}" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-secondary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-bus"></i>
										<h4 class="text-uppercase">Seguro flota vehicular</h4>
										<p>Cubre la flota de vehículos de su empresa ante robo, daño a terceros y otros.</p>
										<p><a href="{{ url('seguro-para-empresas/seguro-de-flota-vehicular') }}" class="lnk-secondary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-user-md"></i>
										<h4 class="text-uppercase">EPS</h4>
										<p>Programa médico que brinda atención ambulatoria y hospitalaria, consultas y emergencias.</p>
										<p><a href="{{ url('seguro-para-empresas/eps') }}" class="lnk-tertiary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-building	º1q"></i>
										<h4 class="text-uppercase">Multiriesgo PYME</h4>
										<p>Seguro diseñado para proteger el patrimonio de las pequeñas empresas ante robos, incendios y otros.</p>
										<p><a href="{{ url('seguro-para-empresas/multiriesgo-pyme') }}" class="lnk-quaternary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-primary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i  class="icon-featured fa fa-shield"></i>
										<h4 class="text-uppercase">Seguros de ingienería</h4>
										<p>Modalidades de cobertura que comtemplan determinados riesgos inherentes a la construcción de edificios y obras.</p>
										<p><a href="{{ url('seguro-para-empresas/seguros-de-ingieneria') }}" class="lnk-primary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-secondary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i  class="icon-featured micon icon-i-administration" ></i>
										<h4 class="text-uppercase">SCTR</h4>
										<p>Seguro de carácter obligatorio para aquellos empleadores dedicados a la realización de actividades económicas de alto riesgo.</p>
										<p><a href="{{ url('seguro-para-empresas/sctr') }}" class="lnk-secondary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured fa fa-ship"></i>
										<h4 class="text-uppercase">Responsabilidad social para hidrocarburos</h4>
										<p>Cubre daños causados por manipulación de hidrocarburos.</p>
										<p><a href="{{ url('seguro-para-empresas/responsabilidad-civil-para-hidrocarburos') }}" class="lnk-tertiary learn-more">Más información <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-xlg">
									<div class="box-content">
										<i class="icon-featured micon icon-i-inpatient"></i>
										<h4 class="text-uppercase">Responsabilidad civil general</h4>
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