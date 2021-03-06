@extends('layouts/layout-insurances')
@section('title','Seguro flota vehicular-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Seguro flota vehicular</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

<section id="head" class="section-head-in section-default">
	<div class="container">
		<div class="row">
			<div class="col-md-9">

				<p><br><br>
					Es un seguro, con servicio de asistencia domiciliara, especialmente creado para que tu hogar y todas tus pertenencias se encuentren protegidas ante cualquier imprevisto como incendio, robo, terremoto, maremoto, accidentes de trabajo en el hogar, entre otros.

				</p>

			</div>

			<div class="col-md-3">
				<img class="img-responsive" src="{{ asset('img/insurances/companies/flota-vehicular/img.png') }}" alt="Seguro de vida" data-appear-animation="fadeInRight">
			</div>
		</div>
	</div>
</section>

<section  style="background-image: url( {{asset('img/back.png')}} );">
			
		<div class="container coll-w">
			
			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
			</div>
			
			<div class="panel-group panel-group-primary" id="accordion1">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2PrimaryOne">
									Beneficios
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">
							
								<ul class="list list-icons">
									<li><i class="fa fa-check"></i> Servicio de ambulancia por emergencias médicas o accidentales dentro del domicilio</li>
									<li><i class="fa fa-check"></i>Servicios de electricidad, cerrajería, fontanería, gasfitería por emergencias (24 horas del día).</li>
									<li><i class="fa fa-check"></i>Servicio de vigilancia temporal en caso de siniestro, y otros servicios adicionales.</li>
										
										
								</ul>
							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-secondary" id="accordion2">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2PrimaryTwo">
									¿Qué cubre?
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">

							 	<ul class="list list-icons">
									<li><i class="fa fa-check"></i>Incendio todo riesgo. </li>
									<li><i class="fa fa-check"></i>Terremoto - Maremoto. </li>
									<li><i class="fa fa-check"></i>Riesgos políticos y sociales. </li>
									<li><i class="fa fa-check"></i>Uso fraudulento por parte de terceros, de cualquier tarjeta de crédito o de débito a cargo del asegurado.</li>
									<li><i class="fa fa-check"></i>Asistencia domiciliaria (gasfitería, cerrajería, guardianía en caso de robo, entre otros).</li>
									<li><i class="fa fa-check"></i>Riesgos políticos y sociales. </li>


								</ul>
								 	 

							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-quaternary" id="accordion3">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2PrimaryThree">
									Requísitos
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryThree" class="accordion-body collapse">
							<div class="panel-body">

							 	<ul class="list list-icons">
									<li><i class="fa fa-check"></i>Presentar la solicitud debidamente llenada y firmada, encuéntrala en el link Documentos del Seguro Domiciliario. </li>
									<li><i class="fa fa-check"></i>Cuando se traten de Joyas, Platerías y/u Obras de Arte, declarar los bienes cuyo valor individual sea mayor a 1,000 dólares. </li>
									<li><i class="fa fa-check"></i>Facilitar la inspección de la vivienda cuando sea solicitada.</li>
									
								</ul>
								 	 

							</div>
						</div>

					</div>
			</div>
			 
		 @section('insurance')
			<input type="email" value="Seguro de flota vehicular" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
		@endsection
		
		</div>
			
</section>
		
	
@endsection