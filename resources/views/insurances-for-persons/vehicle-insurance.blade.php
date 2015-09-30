@extends('layouts/layout-insurances-persons')
@section('title','Seguro vehicular-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Seguro vehicular</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

<section>
			
	<div class="container">
				
			<p>
				Los seguros vehiculares cubren los daños producidos como consecuencia de accidentes en los que participan los vehículos asegurados.

			</p>

			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
			</div>
			
			<div class="panel-group panel-group-primary" id="accordion2Primary">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryOne">
									¿Qué cubre?
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">
								<ul class="list list-icons">
										<li><i class="fa fa-check"></i><strong>Daños personales:</strong> Comprende indemnizaciones por muerte, invalidez, e incapacidad de las víctimas del accidente, así como también pago de gastos      de atención médica y de recuperación o rehabilitación. </li>
										<li><i class="fa fa-check"></i><strong>Daños materiales:</strong> Comprende la reparación de partes del vehículo o su reemplazo, así como la indemnización a terceros por los perjuicios      ocasionados por el asegurado a terceros en su patrimonio, como consecuencia del accidente.</li>
										
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
									Franquicias y Deducibles
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">
							En los contratos de seguros vehiculares es común encontrar alguno de estos dos términos. Pasamos a explicarlos:
								<ul class="list list-icons">
										<li><i class="fa fa-check"></i><strong>Franquicia:</strong> Es el monto mínimo que cubrirá la compañía. Si el daño producido no iguala o sobrepasa dicho monto, la aseguradora no efectuará      ningún pago.</li>
										<li><i class="fa fa-check"></i> <strong>Deducible:</strong> En este caso la compañía cubre el siniestro, pero según lo acordado, el asegurado deberá pagar un monto o porcentaje del daño,      según haya sido pactado en el contrato.</li>
										 
								</ul>
							</div>
						</div>

					</div>
			</div>

 			 
		</div>
			
</section>
		

</section>


	
@endsection