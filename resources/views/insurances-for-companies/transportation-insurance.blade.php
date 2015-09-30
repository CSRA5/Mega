@extends('layouts/layout-insurances')
@section('title','Seguro de transporte-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Seguro de transporte</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

<section>
			
		<div class="container">
				
			<p>
				El seguro de Transportes está destinado a dar cobertura a los posibles daños materiales que sufran las mismas con ocasión de su transporte desde el punto de origen hasta su punto de destino, siempre y cuando vayan adecuadamente envasadas o embaladas de acuerdo con su naturaleza.

			</p>

			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
			</div>
			
			<div class="panel-group panel-group-primary" id="accordion1">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2PrimaryOne">
									Coberturas
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">
							
								<ul class="list list-icons">
									<li><i class="fa fa-check"></i>Incendio, rayo o explosión, cualquiera que sea su origen, excepto la combustión espontánea.</li>
									<li><i class="fa fa-check"></i>Accidente del medio de transporte.</li>
									<li><i class="fa fa-check"></i>Gastos de Salvamento.</li>
									<li><i class="fa fa-check"></i>Robo de mercancía.</li>
									<li><i class="fa fa-check"></i>Roturas ocasionadas durante el transporte.</li>
									<li><i class="fa fa-check"></i>Sustracciones parciales de contenido con rotura o perforación de envases.</li>
																			
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
									Modalidades
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">

							 	<ul class="list list-icons">
									<li><i class="fa fa-check"></i><strong>Anuales: </strong>Apropiada para los propietarios de camiones, dirigida a aquellas empresas que realizan transportes a nivel nacional e internacional,      la prima se establece por una anualidad, en función del capital máximo asegurado por vehículo.</li>
									<li><i class="fa fa-check"></i><strong>Flotante: </strong> Atiende las necesidades de los propietarios de mercancías, esta póliza obliga al asegurado a dar comunicación de cada uno de los      viajes realizados, estableciéndose una tasa para cada uno de ellos en función de la mercancía asegurada.</li>
									<li><i class="fa fa-check"></i><strong>Individual: </strong> Se utilizan para otorgar cobertura a un traslado de mercancía específico y de poca regularidad, pudiendo ser de alcance nacional o      internacional (importación y/o exportación).</li>
								
								</ul>

							</div>
						</div>

					</div>
			</div>
			
		 @section('insurance')
			<input type="email" value="Seguro de transporte" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
		@endsection
		
		</div>
			
</section>
		
	
@endsection