@extends('layouts/layout-insurances')
@section('title','Seguro Complementario de Trabajo de Riesgo-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"> <strong>Seguro Complementario de Trabajo de Riesgo</strong> </li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

<section id="head" class="section-head-in section-default">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
			<p><br>
				El Seguro Complementario de Trabajo de Riesgo otorga cobertura adicional en los casos de accidentes de trabajo y enfermedades profesionales a los trabajadores, empleados y obreros que desempeñan actividades de alto riesgo indicadas en D.L. 26790.
				Es de carácter obligatorio para aquellos empleadores que realizan actividades económicas de riesgo, así como las cooperativas de trabajadores, empresas de servicios especiales, contratistas y subcontratistas, instituciones de intermediación o provisión de mano de obra que destaque trabajadores hacia centros de trabajo que desarrollen actividades de riesgo.
			</p>
			</div>
			<div class="col-md-3">
				<img class="img-responsive" src="{{ asset('img/insurances/companies/sctr/img.png') }}" alt="Seguro de vida" data-appear-animation="fadeInRight">
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
									SCTR Pensión
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">

								El SCTR Pensión brinda la cobertura de pensiones o prestaciones económicas por invalidez, sobrevivencia y gastos de sepelio a cargo de la Oficina de Normalización Previsional (ONP) o una Compañía de Seguros.<br/><br/>

								<h4><strong>Coberturas</strong></h4>

								<ul class="list list-icons">
									
									<li><i class="fa fa-check"></i>Pensión vitalicia por sobrevivencia (fallecimiento).</li>
									<li><i class="fa fa-check"></i>Pensión vitalicia por invalidez permanente. </li>
									<li><i class="fa fa-check"></i>Indemnización por invalidez permanente.</li>
									<li><i class="fa fa-check"></i>Renta temporal por invalidez parcial.</li>
									<li><i class="fa fa-check"></i>Pensión temporal por invalidez temporal.</li>
									<li><i class="fa fa-check"></i>Gastos de sepelio</li>

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
									SCTR Salud
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">

								El SCTR Salud brinda las coberturas de salud o prestaciones de salud, en la cual se incluye la asistencia y asesoramiento preventivo en salud ocupacional, los gastos de curación hasta la total recuperación del asegurado, prótesis, aparatos ortopédicos, rehabilitación y readaptación laboral; cobertura correspondiente a EsSalud o a una Entidad Prestadora de Salud (EPS).<br/><br/>

								<h4><strong>¿Qué cubre?</strong></h4>

								<ul class="list list-icons">
									
									<li><i class="fa fa-check"></i>Gastos de curación.</li>
									<li><i class="fa fa-check"></i>Gastos de curación. </li>
									 
								</ul>

								<h4><strong>¿Qué no cubre?</strong></h4>

								<p>Todo accidente que no sea calificado como accidente de trabajo, así como toda enfermedad que no sea calificada como enfermedad profesional.</p>
							
							</div>
						</div>

					</div>
			</div>
		 @section('insurance')
			<input type="email" value="SCTR" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
		@endsection
		 
		</div>
			
</section>
		
@endsection