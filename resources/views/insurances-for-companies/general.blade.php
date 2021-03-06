@extends('layouts/layout-insurances')
@section('title','Responsabilidad civil general-Mega Corredores de Seguros')
@section('description','')
 

@section('content')


<section class="page-header">
		
	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Responsabilidad civil general</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

<section>
			
		<div class="container">
				
			<p>
				El seguro de responsabilidad civil otorga protección al asegurado si un tercero le exigiere indemnización por daños y perjuicios a consecuencia de un acontecimiento que, produciéndose durante la vigencia del seguro, ocasione la muerte, lesión o menoscabo de la salud de la persona (daños personales) o el deterioro o destrucción de sus bienes (daños materiales). El seguro comprende la protección sobre la responsabilidad civil legal, producto de la propiedad o arrendamiento de terreno, edificios o locales y de las actividades normales inherentes al giro del asegurado.  
				Entre los principales seguros se pueden mencionar : 

				<ul class="list list-icons">
					<li><i class="fa fa-check"></i>Responsabilidad cívil para empresas de vigilancia</li>
					<li><i class="fa fa-check"></i>Responsabilidad civil para contratistas</li>
					<li><i class="fa fa-check"></i>Responsabilidad cívil para empresas industriales</li>
					<li><i class="fa fa-check"></i>Responsabilidad cívil para empresas de la construcción</li>
				</ul>

			</p>
		</div>

	@section('insurance')
		<input type="email" value="Responsabilidad civil general" data-msg-required=" " data-msg-email=" " maxlength="100"  name="insurance" id="insurance" required style="display:none">
				
		
	@endsection		
	
</section>
		
	
@endsection