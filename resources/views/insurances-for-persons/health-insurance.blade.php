@extends('layouts/layout-insurances-persons')
@section('title','Seguro de salud-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="active">Seguro de salud</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>Seguro de salud</h1>
					</div>
				</div>
			</div>
</section>

<section>
			
		<div class="container">
				
			<p>
				Por el seguro de salud se contrata la prestación de servicios de medicina profesional, que incluyen atención médica ambulatoria, hospitalaria, exámenes médicos, medicinas y tratamientos en general, según la póliza suscrita. Para contratar este seguro, es usual que las aseguradoras soliciten que se llene un formulario sobre el estado de la salud de las personas que se aseguraran.
				Resulta común que las aseguradoras ofrezcan seguros de asistencia médica que también incluyan coberturas de accidentes personales.


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
										<li><i class="fa fa-check"></i> Cubre todos los gastos necesarios correspondientes al tratamiento de una enfermedad o accidente que se encuentren amparados      por tu póliza.</li>
										<li><i class="fa fa-check"></i><strong>Atenciones ambulatorias:</strong> Consultas médicas, exámenes clínicos, rayos X y curaciones, entre otras, que no requieren el      internamiento del asegurado.</li>
										<li><i class="fa fa-check"></i> <strong>Atenciones hospitalarias:</strong> Atenciones en las que el asegurado debe permanecer internado en un centro de salud por indicación      médica.</li>
										<li><i class="fa fa-check"></i> <strong>Emergencias médicas o accidentales:</strong> Situaciones repentinas e inesperadas que ponen en peligro la vida del asegurado, o en      grave riesgo su salud, y requieren atención médica y/o quirúrgica inmediata. La situación de emergencia dura hasta la estabilización del paciente.</li>
										
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
									¿Qué no cubre?
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryTwo" class="accordion-body collapse">
							<div class="panel-body">
								<ul class="list list-icons">
										<li><i class="fa fa-check"></i><strong>Enfermedades preexistentes:</strong> Aquellas condiciones de salud o enfermedades que se han iniciado o diagnosticado antes de la      contratación de la póliza, o dentro del periodo de carencia.</li>
										<li><i class="fa fa-check"></i><strong>Medicamentos experimentales:</strong> Cualesquiera que no hayan sido aprobados por la FDA (Foods and Drugs Administration) de      Estados Unidos, o que hayan sido prescritos para enfermedades diferentes a las aprobadas originalmente.</li>
										<li><i class="fa fa-check"></i><strong>Tratamientos experimentales:</strong> Los que no hayan sido aprobados como tratamientos estándares en la PDQ (Physician Data      Query), de la National Cancer Institute (NCI) de Estados Unidos; o en la Clinical Guidelines in Oncology de los protocolos de la      National Comprehensive Cancer Network (NCCN) de Estados Unidos.</li>
										<li><i class="fa fa-check"></i><strong>Procedimientos estéticos:</strong> Todas aquellas intervenciones quirúrgicas y/o procedimientos de cirugía plástica, reconstructiva o      reparadora con fines estéticos. Sin embargo, para casos de cáncer de mama que involucren mastectomía radical, se cubre la      reconstrucción mamaria como parte del tratamiento integral.</li>
										
								</ul>
							</div>
						</div>

					</div>
			</div>

			<div class="panel-group panel-group-quaternary" id="accordion2Primary">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryThree">
									Periodo de Carencia
								</a>
							</h4>
						</div>
							
						<div id="collapse2PrimaryThree" class="accordion-body collapse">
							<div class="panel-body">
								<p>En los seguros de asistencia médica existe un periodo inicial en el que los asegurados no recibirán cobertura. La duración de este periodo varía según el seguro que se contrate y el tipo de atención que se solicite, pudiendo tratarse de 30 días para enfermedades comunes y algunos meses para el caso de atenciones por embarazos por ejemplo. Es importante que antes de contratar conozca la duración de este periodo según la póliza que le sea ofrecida.</p>
							</div>
						</div>

					</div>
			</div>

			 
		</div>
			
</section>
		
	
@endsection