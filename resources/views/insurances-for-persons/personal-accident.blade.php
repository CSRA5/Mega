@extends('layouts/layout')
@section('title','Accidentes personales')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="#">Inicio</a></li>
							<li class="active">Accidentes personales</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>Accidentes personales</h1>
					</div>
				</div>
			</div>
</section>

<section>
			
	<div class="container">
				
			<p>
				El seguro de Accidentes Personales te protegen tanto a ti como a tu familia de los gastos y molestias que genera un accidente. Ya que éste puede ocurrir en cualquier circunstancia, te ofrecemos la posibilidad de crear una cobertura a tu medida y que mejor se adapte a tus circunstancias particulares. 

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
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse">
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
 			 
		</div>
			
</section>
		

</section>


	
@endsection