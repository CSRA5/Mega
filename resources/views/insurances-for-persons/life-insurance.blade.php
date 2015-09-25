@extends('layouts/layout')
@section('title','Seguro de vida')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="#">Inicio</a></li>
							<li class="active">Seguro de vida</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>Seguro de vida</h1>
					</div>
				</div>
			</div>
</section>

<section>
			
	<div class="container">
				
			<p>
				El Seguro de Vida actúa como resguardo frente a una posible situación de apremios económicos y el beneficiario recibirá una suma de dinero en caso de fallecimiento del titular, dando tranquilidad a su familia. Usted mediante la firma de un contrato con la aseguradora, ésta se compromete a entregar a las personas que usted haya designado como beneficiarios una suma de dinero en el momento de su fallecimiento. Algunas póliza pueden beneficiar al asegurado en vida. Estas pólizas acumulan ahorros que pueden ser utilizados en el futuro como por ejemplo para complementar su jubilación o para lo que usted desee destinarlo. 

			</p>

			<div class="divider divider-secondary">
				<i class="fa fa-chevron-down"></i>
			</div>
			
			<div class="panel-group panel-group-primary" id="accordion2Primary">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryOne">
									Tipos de seguros
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryOne" class="accordion-body collapse">
							<div class="panel-body">
								<ul class="list list-icons">
										<li><i class="fa fa-check"></i>Seguros con retorno.</li>
										<li><i class="fa fa-check"></i>Seguros de Vida Universal con inversión.</li>
										<li><i class="fa fa-check"></i>Accidentes.</li>
										<li><i class="fa fa-check"></i>Seguros Temporales.</li>
										<li><i class="fa fa-check"></i>Seguro de Viaje.</li>
										<li><i class="fa fa-check"></i>Sepelio Familiar.</li>										 
								</ul>
							</div>
						</div>

					</div>
			</div>
 			 
		</div>
			
</section>
		

</section>


	
@endsection