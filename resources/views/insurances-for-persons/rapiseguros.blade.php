@extends('layouts/layout-insurances-persons')
@section('title','Rapiseguros-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Rapiseguros</strong></li>
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
					Asegúrate a ti y tu familia. Rapiseguros te ofrece diversos tipos de indemnización de acuerdo al producto contratado de manera simple y económica debido a su bajo costo, tales como : 

				</p>
			</div>
			<div class="col-md-3">
				<img class="img-responsive" src="{{ asset('img/insurances/persons/rapiseguros/img.png') }}" alt="Seguro de vida" data-appear-animation="fadeInRight">
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
									Rapiseguro Accidentes Personales
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">
								<h5><strong>¿Qué es Rapiseguro de Accidentes Personales?</strong></h5>
								Es un micro seguro que indemniza inmediatamente ocurrido el accidente cubierto por la póliza.<br/><br/>

								<h5><strong>¿Quiénes pueden asegurarse? </strong></h5>
								Toda persona natural que tenga entre 18 y 75 años de edad cumplidos, pudiendo permanecer hasta los 80 años de edad cumplidos. <br/><br/>

								<h5><strong>¿Qué cubre?  </strong></h5>

								<ul class="list list-icons">
										<li><i class="fa fa-check"></i>Cubre la Muerte por Accidente del Asegurado: S/. 20,000</li>
										<li><i class="fa fa-check"></i>Invalidez Permanente Total por Accidente del Asegurado: S/ 20,000 </li>
										<li><i class="fa fa-check"></i>Muerte por Accidente de Tránsito del Asegurado: S/. 40,000 </li>
										<li><i class="fa fa-check"></i> Muerte por Accidente del Cónyuge o Concubino(a) del Asegurado: S/. 10,000</li>
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
									Rapiseguro de Indemnización por Diagnóstico de Cáncer 
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">
								<h5><strong>¿Qué es Rapiseguro de Indemnización por Diagnóstico de Cáncer? </strong></h5>
								Es un micro seguro que indemniza ante un diagnóstico de de cáncer.<br/><br/>

								<h5><strong>¿Quiénes pueden asegurarse? </strong></h5>
								Toda persona natural que tenga entre 18 y 70 años de edad cumplidos, pudiendo permanecer hasta los 80 años de edad cumplidos. <br/><br/>

								<h5><strong>¿Qué cubre?  </strong></h5>

								<ul class="list list-icons">
										<li><i class="fa fa-check"></i>Indemnización por Diagnóstico de Cáncer en el primer año: S/. 3,000 </li>
										<li><i class="fa fa-check"></i>Indemnización por Diagnóstico de Cáncer en el segundo año: S/. 8,000 </li>
								</ul>	

							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-tertiary" id="accordion3">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2PrimaryThree">
									Rapiseguro de Pago Diario por Hospitalización por Accidente 
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryThree" class="accordion-body collapse">
							<div class="panel-body">
								<h5><strong>¿Qué es Rapiseguro de Pago Diario por Hospitalización por Accidente? </strong></h5>
								Es un micro seguro de pago diario por hospitalización por accidente creado para tu tranquilidad y la de tus seres queridos. <br/><br/>

								<h5><strong>¿Quiénes pueden asegurarse? </strong></h5>
								Pueden afiliarse personas naturales que sean mayores de 18 años y menores a 70 años, pudiendo permanecer hasta los 75 años de edad cumplidos. <br/><br/>

								<h5><strong>¿Qué cubre?  </strong></h5>

								<ul class="list list-icons">
										<li><i class="fa fa-check"></i>Pago diario por hospitalización por accidente ascendente a S/. 75.00 (diarios, límite hasta 365 días). </li>
								</ul>	

							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-quaternary" id="accordion4">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse2PrimaryFour">
									Rapiseguro de Indemnización por Diagnóstico de Enfermedades Graves 
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryFour" class="accordion-body collapse">
							<div class="panel-body">
								<h5><strong>¿Qué es Rapiseguro de Indemnización por Diagnóstico de Enfermedades Graves?  </strong></h5>
								Microseguro de indemnización por diagnóstico de enfermedades graves creado para tu tranquilad y la de tus seres queridos.  <br/><br/>

								<h5><strong>¿Quiénes pueden asegurarse? </strong></h5>
								Pueden afiliarse personas naturales que sean mayores de 18 años y menores a 70 años, pudiendo permanecer hasta los 75 años de edad cumplidos.  <br/><br/>

								<h5><strong>¿Qué cubre?  </strong></h5>

								<ul class="list list-icons">
										<li><i class="fa fa-check"></i>Indemnización por Diagnóstico de Enfermedades Graves 1er. año ascendente a S/. 1,500. </li>
										<li><i class="fa fa-check"></i>Indemnización por Diagnóstico de Enfermedades Graves 2do. año ascendente a S/. 4,500. </li>
								</ul>

								<h5><strong>¿Costos de los rapiseguros? </strong></h5>
								S/.50.00 anuales ó S/.30.00 semestrales. <br/><br/>

							</div>
						</div>

					</div>
			</div>


			@section('insurance')
				<input type="email" value="Rapiseguros" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
 			 @endsection
 			 
		</div>
			
</section>
		
@endsection