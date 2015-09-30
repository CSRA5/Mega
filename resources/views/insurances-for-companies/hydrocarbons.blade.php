@extends('layouts/layout-insurances')
@section('title','Responsabilidad civil para hidrocarburos-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Responsabilidad civil para hidrocarburos</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

<section>
			
		<div class="container">
				
			<p>
				Este seguro cubre los perjuicios económicos y/o patrimoniales que sufra el asegurado por daños causados a terceros en especial daños ambientales que se puedan generar por almacenamiento, transporte, manipulación y distribución de hidrocarburos. Entre las actividades se pueden mencionar : 
				
				<ul class="list list-icons">
					<li ><i class="fa fa-check"></i>Grifos y Estaciones de servicio</li>
					<li > <i class="fa fa-check"></i>Transportistas de combustible</li>
				</ul>

			</p>
	 	@section('insurance')
	 	<input type="email" value="Responsabilidad civil para hidrocarburos" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
		@endsection
		
		</div>
			
</section>
		
	
@endsection