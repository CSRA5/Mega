@extends('layouts/layout-insurances-persons')
@section('title','Accidentes personales-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Accidentes personales</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

<section id="head" class="section-head-in">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<p><br><br>
					El seguro de Accidentes Personales te protegen tanto a ti como a tu familia de los gastos y molestias que genera un accidente. Ya que éste puede ocurrir en cualquier circunstancia, te ofrecemos la posibilidad de crear una cobertura a tu medida y que mejor se adapte a tus circunstancias particulares. 

				</p>
			</div>
			<div class="col-md-3">
				<img class="img-responsive" src="{{ asset('img/insurances/persons/accidentes-personales/img.png') }}" alt="Seguro de vida" data-appear-animation="fadeInRight">
			</div>
		</div>
	</div>
</section>

<section style="background-image: url( {{asset('img/back.png')}} );">
			
	<div class="container coll-w">
						

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
										<li><i class="fa fa-check"></i>Indemnización por muerte accidental.  </li>
										<li><i class="fa fa-check"></i>Indemnización por invalidez permanente: puede ser total o parcial, según la póliza que se contrate. </li>
										<li><i class="fa fa-check"></i>Pensiones diarias en caso de incapacidad temporal durante el tiempo que el asegurado se encuentre imposibilitado de realizar sus actividades diarias. </li>
										<li><i class="fa fa-check"></i>La asfixia o lesiones a consecuencia de gases o vapores, inmersión o sumersión, o por ingestión de materias líquidas o sólidas no alimenticias. </li>
										<li><i class="fa fa-check"></i> Las lesiones que sean consecuencia de intervenciones quirúrgicas o tratamientos médicos motivados por un accidente cubierto por la póliza.</li>
										<li><i class="fa fa-check"></i>Las lesiones sufridas a consecuencia de legítima defensa.</li>
									 										 
								</ul>
							</div>
						</div>

					</div>
			</div>

	@section('insurance')
			<input type="email" value="Accidentes personales" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
 	@endsection		 
		</div>
			
</section>
	
@endsection