@extends('layouts/layout-insurances')
@section('title','Seguros de Ingieneria-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Seguros de Ingieneria</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

<section>
			
		<div class="container">
				
			<p>
				Es un grupo de modalidades de cobertura que contemplan determinados riesgos derivados del funcionamiento, montaje o prueba de maquinaria o inherentes a la construcción de edificios y obras. 

			</p>

			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
			</div>
			
			<div class="panel-group panel-group-primary" id="accordion1">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2PrimaryOne">
									TREC 
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">
							Cubre las pérdidas o daños directos producidos a la maquinaria o equipo principalmente por choque con objetos en movimiento o estacionarios, vuelco, incendio, terremoto e inundación, negligencia del conductor, deslizamiento de tierra, caída de rocas; mientras se encuentren trabajando o no, o cuando se encuentren en proceso de limpieza o revisión, de acuerdo a la póliza y durante el periodo de vigencia de la misma. 
							
							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-secondary" id="accordion2">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2PrimaryTwo">
									Rotura de Maquinaria 
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">

							 Cubre los daños internos ocurridos en forma accidental e imprevista, que hagan necesaria una reparación o reposición. Se incluyen daños causados por defectos de construcción o montaje, errores de manejo, cortocircuito, rotura por fuerza centrífuga y explosión entre otros. Cubre los daños o pérdidas que pueden suceder repentina e inesperadamente a consecuencia de:<br/><br/>

							 <ul class="list list-icons">
							 	<li><i class="fa fa-check"></i>Errores de manejo, impericia, negligencia. </li>
							 	<li><i class="fa fa-check"></i>Defectos de construcción, montaje o fabricación, errores de cálculo, fallas de materiales o defectos de fundición. </li>
							 	<li><i class="fa fa-check"></i>Explosión física, fuerza centrífuga, corto circuito. </li>
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
									Equipo Electrónico 
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryThree" class="accordion-body collapse">
							<div class="panel-body">
								
								Cubre cualquier daño o pérdida en forma accidental e imprevista de sistemas electrónicos como computadores, equipos de telecomunicaciones y similares a causa de una falta de cuidado, manejo defectuoso o negligencia, incendio, robo, cortocircuitos, entre otros, que hagan necesaria una reparación o reposición. 

							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-quaternary" id="accordion4">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse2PrimaryFour">
									CAR (Seguro para Construcción) 
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryFour" class="accordion-body collapse">
							<div class="panel-body">
								
								Cubre los daños que ocurran a las obras de construcción como consecuencia de hechos accidentales e imprevisibles, sujetos a las exclusiones estipuladas en las condiciones generales. Este seguro se extiende a cubrir trabajos permanentes y temporales, incluidos materiales de construcción, mano de obra y otros que formen parte del contrato a asegurar y que formen parte integrante del monto asegurado declarado. Se puede asegurar la construcción de:<br/><br/>

							<ul class="list list-icons">
							 	<li><i class="fa fa-check"></i>Edificios de viviendas, oficinas, hospitales, colegios, hoteles. </li>
							 	<li><i class="fa fa-check"></i>Edificios y plantas industriales, plantas y/o casas de fuerza.  </li>
							 	<li><i class="fa fa-check"></i>Carreteras, aeropuertos, puertos y líneas de ferrocarril.  </li>
							 	<li><i class="fa fa-check"></i>Puentes, presas, túneles, obras de riego y drenaje, canales. </li>
							 </ul> 

							</div>
						</div>

					</div>
			</div>


			<div class="panel-group panel-group-primary" id="accordion5">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse2PrimaryFive">
									EAR (Seguro para Montaje)  
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryFive" class="accordion-body collapse">
							<div class="panel-body">
								
								Cubre los daños que puedan suceder durante el montaje y periodo de pruebas de todo tipo de maquinarias, repuestos, aparatos, construcciones e instalaciones industriales, equipos a montar, mano de obra y otros de acuerdo a la póliza y durante el periodo de vigencia de la misma. Se pueden asegurar el montaje y periodo de pruebas de máquinas y/o equipos, tales como: <br/><br/>

							<ul class="list list-icons">
							 	<li><i class="fa fa-check"></i>Turbinas, generadores, compresores, calderas.  </li>
							 	<li><i class="fa fa-check"></i>Máquinas de imprenta, de papel y textiles. </li>
							 	<li><i class="fa fa-check"></i>Líneas de transmisión, tuberías, gasoductos, oleoductos.</li>
							 	<li><i class="fa fa-check"></i>Tanques, silos, puentes de acero. </li>
							 </ul> 

							</div>
						</div>

					</div>
			</div>
			
			@section('insurance')
			<input type="email" value="Seguros de ingieneria" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
	
			@endsection
			
		</div>
			
</section>
		
	
@endsection