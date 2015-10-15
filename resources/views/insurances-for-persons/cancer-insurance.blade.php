@extends('layouts/layout-insurances-persons')
@section('title','Seguro oncológico-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Seguro oncológico</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

 

<section id="head" class="section-head-in section-default">
	<div class="container">
				<div class="row">
						<div class="col-md-9">
							
							<p >
							<br><br>
								El Seguro Oncológico cubre los gastos del tratamiento contra el cáncer, tanto hospitalario como ambulatorio, en una amplia red de clínicas y centros especializados a nivel nacional. Los seguros oncológicos incluyen un programa de prevención, con citas regulares y chequeos médicos que tienen dos metas. La primera, diagnosticar en una etapa temprana el cáncer y obtener mayores posibilidades de éxito. Segunda, evitar tratamientos largos y complejos a nuestros asegurados. 
							</p>
							
						</div>
						<div class="col-md-3">
							<img class="img-responsive" src="{{ asset('img/insurances/persons/seguro-oncologico/img.png') }}" alt="Seguro de salud" data-appear-animation="fadeInRight">
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
									¿Qué cubre?
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">
								<ul class="list list-icons">
										<li><i class="fa fa-check"></i>Ambulancia </li>
										<li><i class="fa fa-check"></i>Cirugía reconstructiva por cirugía oncológica mutilante.</li>
										<li><i class="fa fa-check"></i>Gastos de Laboratorio.</li>
										<li><i class="fa fa-check"></i>Cirugía de hallazgo.</li>
										<li><i class="fa fa-check"></i>Prótesis interna.</li>
										<li><i class="fa fa-check"></i>Radiología.</li>
										<li><i class="fa fa-check"></i>Reconstrucción única mamaria y de pezón en pacientes mastectomizados.</li>
										<li><i class="fa fa-check"></i>Sepelio</li>
										<li><i class="fa fa-check"></i>Todos los gastos del tratamiento ambulatorio.</li>
										<li><i class="fa fa-check"></i>Todos los gastos de hospitalización.</li>
										<li><i class="fa fa-check"></i>Traslado aéreo o terrestre en el territorio Nacional.</li>
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
									¿Qué no cubre?
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">
						
								<ul class="list list-icons">
										
										<li><i class="fa fa-check"></i>Cáncer, Tumor Maligno o Enfermedad Oncológica, que se haya detectado o diagnosticado antes o durante el periodo de carencia o no cobertura.</li> 
										<li><i class="fa fa-check"></i>Todo tipo de prótesis externa.</li> 
										<li><i class="fa fa-check"></i>Dispositivos o implantes médicos de naturaleza mecánica o electrónica. </li> 
										<li><i class="fa fa-check"></i>Todo tratamiento o gasto efectuado en el extranjero, gastos de transporte de cualquier tipo y reembolso de cualquier naturaleza.</li> 
										<li><i class="fa fa-check"></i>Compra de Sangre y derivados. Además los gastos relacionados a las pruebas o exámenes realizados a los donantes. Están excluidos los equipos de auto- transfusión. </li> 
										 
								</ul>
							</div>
						</div>

					</div>
			</div>
 			 
			@section('insurance')
			<input type="email" value="Seguro oncológico" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
			@endsection	

	</div>

</section>
	
@endsection