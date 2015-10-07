@extends('layouts/layout-insurances')
@section('title',' EPS-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>EPS</strong> </li>
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
				El programa de EPS que es un programa médico que te brinda atención ambulatoria y hospitalaria, consulta médica a domicilio, atención de emergencia accidental y médica, exámenes preventivos anuales, maternidad y control del niño sano, entre otras coberturas de acuerdo al plan de salud elegido, garantizándote un excelente servicio a nivel nacional en nuestra amplia red de clínicas  y centros médicos afiliados.  

			</p>

			</div>
			<div class="col-md-3">
				<img class="img-responsive" src="{{ asset('img/insurances/companies/eps/img.png') }}" alt="Seguro de vida" data-appear-animation="fadeInRight">
			</div>

		</div>
	</div>
</section>

<section>
			
		<div class="container">
				
		
			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
			</div>
			
			<div class="panel-group panel-group-primary" id="accordion2Primary">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryOne">
									¿A quién esta dirigido?
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">
								
								Está especialmente dirigido a  todas las empresas peruanas y MYPES ( Micro y Pequeña Empresa), empleadoras de  trabajadores en planilla, puede afiliarse el trabajador como titular y sus derechohabientes legales,  podrán gozar de una propuesta diferenciada del programa de EPS a través de un servicio oportuno y personalizado. 
							
							</div>
						</div>

					</div>
			</div>


			<div class="panel-group panel-group-secondary" id="accordion2Primary">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryTwo">
									Beneficios
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">
								
								<ul  class="list list-icons">
								 	<li><i class="fa fa-check"></i>Prevención </li>
								 	<li><i class="fa fa-check"></i>Programa Médico Preventivo Anual.</li>
								 	<li><i class="fa fa-check"></i>Programa de Enfermedades Crónicas. </li>
								 	<li><i class="fa fa-check"></i>Atención directa.</li>
								 	<li><i class="fa fa-check"></i>Amplia Red de Clínicas a Nivel Nacional.</li>
								 	<li><i class="fa fa-check"></i>Cobertura automática.</li>
								 	<li><i class="fa fa-check"></i>Atención de emergencias las 24 horas.</li>
								 </ul> 
							
							</div>
						</div>

					</div>
			</div>
		 
		 	@section('insurance')
		 <input type="email" value="EPS" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
		 @endsection
		</div>
			
</section>
		
@endsection