@extends('layouts/layout-insurances-persons')
@section('title','SOAT-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>SOAT</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

<section>
			
	<div class="container">
				
			<p>
				El Seguro Obligatorio de Accidentes de Tránsito, cubre los gastos médicos de atención de ocupantes o terceros no ocupantes de un vehículo, por lesiones corporales, muerte o invalidez permanente en caso de un accidente de tránsito.
				Todo vehículo automotor, aún sin placa de rodaje, debe contar con un SOAT independientemente de cualquier otro tipo de seguro que se tenga contratado.

			</p>

			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
			</div>
			
			<div class="panel-group panel-group-primary" id="accordion2Primary">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryOne">
									Ventajas y Beneficios
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">
								<ul class="list list-icons">
										<li><i class="fa fa-check"></i> Este producto brinda cobertura a nivel nacional en cualquier establecimiento de salud.</li>
										<li><i class="fa fa-check"></i>Para la atención de emergencias, debes siempre presentar el original del certificado SOAT.</li>
										<li><i class="fa fa-check"></i>Para indemnizaciones, consulta según el caso.</li>
										<li><i class="fa fa-check"></i> Las atenciones médicas están cubiertas con un límite de hasta 5 UIT.</li>
										
								</ul>
							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-secondary" id="accordion2Primary">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryTwo">
									¿Qué cubre?
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">
								<ul class="list list-icons">
										<li><i class="fa fa-check"></i>Muerte c/u (límite por persona 4 UIT). </li>
										<li><i class="fa fa-check"></i>Invalidez Permanente c/u (límite por persona hasta 4 UIT).</li>
										<li><i class="fa fa-check"></i>Incapacidad Temporal c/u (a razón de 1/30 de la remuneración mínima vital por cada una) Límite por persona hasta 1 UIT.</li>
										<li><i class="fa fa-check"></i>Gastos de atención médica, hospitalaria, quirúrgica y farmacéutica c/u (límite por persona hasta 5 UIT).</li>
										<li><i class="fa fa-check"></i>Sepelio (límite por persona 1 UIT)</li>
								</ul>
							</div>
						</div>

					</div>
			</div>


			<div class="panel-group panel-group-tertiary" id="accordion2Primary">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryThree">
									¿Qué no cubre?
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryThree" class="accordion-body collapse">
							<div class="panel-body">
								<ul class="list list-icons">
										<li><i class="fa fa-check"></i>Causadas en carreras de automovilismo y otras competencias de vehículos automotores.</li>
										<li><i class="fa fa-check"></i>Ocurridas fuera del territorio nacional.</li>
										<li><i class="fa fa-check"></i>Ocurridas en lugares no abiertos al tránsito público.</li>
										<li><i class="fa fa-check"></i>Los ocurridos como consecuencia de guerras, sismos u otros casos fortuitos enteramente extraños a la circulación del vehículo.</li>
										<li><i class="fa fa-check"></i>El suicidio y comisión de lesiones autoinferidas utilizando el vehículo automotor asegurado.</li>
								</ul>
							</div>
						</div>

					</div>
			</div>
 			 
		</div>
			
</section>
		

</section>


	
@endsection