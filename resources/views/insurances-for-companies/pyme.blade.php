@extends('layouts/layout-insurances')
@section('title',' Multiriesgo Pyme-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"> <strong>Multiriesgo Pyme</strong> </li>
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
				Seguro diseñado para proteger el patrimonio de las pequeñas empresas, con la finalidad de su negocio no se detenga ante la ocurrencia de robos, incendios y otros incidentes que pueden afectar la continuidad de las operaciones. Además, le brinda la posibilidad de elegir la cobertura que mejor se adecúe a sus necesidades. 

			</p>
			</div>
			<div class="col-md-3">
				<img class="img-responsive" src="{{ asset('img/insurances/companies/pyme/img.png') }}" alt="Seguro de vida" data-appear-animation="fadeInRight">
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
									¿Qué cubre?
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse in">
							<div class="panel-body">
							
								<ul class="list list-icons">
									
									<li><i class="fa fa-check"></i>Incendio Todo Riesgo y Lucro Cesante (Cobertura básica).</li>
									<li><i class="fa fa-check"></i>Coberturas opcionales. </li>
									<li><i class="fa fa-check"></i>Huelga, motín, conmoción civil, daño malicioso, vandalismo y terrorismo. </li>
									<li><i class="fa fa-check"></i>Terremoto - maremoto.</li>
									<li><i class="fa fa-check"></i>Robo y/o intento de robo. </li>
									<li><i class="fa fa-check"></i>Responsabilidad civil. </li>

								</ul>
							
							</div>
						</div>

					</div>
			</div>
		 
		 @section('insurance')

		 <input type="email" value="Multiriesgo PYME" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
		
		@endsection

		</div>
			
</section>
		

@endsection