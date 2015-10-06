@extends('layouts/layout')
@section('title','Contacto - Mega Corredores de Seguros')
@section('description','')
 

@section('content')

<section class="page-header">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}" class="a-color">Inicio</a></li>
							<li class="a-color"><strong>Contacto</strong></li>
						</ul>
					</div>
				</div>
				 
			</div>
</section>

<div id="googlemaps" class="google-map"></div>

<div class="container">
	
		<div class="row">
					<div class="col-md-8">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Exito!</strong> Tu mensaje ha sido enviado.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								<strong>Error!</strong> Hubo un error al enviar tu mensaje, por favor intentalo nuevamente.
							</div>

							<h2 class="mb-sm mt-sm"><strong>Escríbenos</strong></h2>
							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Nombre*</label>
											<input type="text" value="" data-msg-required=" " maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-6">
											<label>Email*</label>
											<input type="email" value="" data-msg-required=" " data-msg-email=" " maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Teléfono*</label>
											<input type="text" value="" data-msg-required=" " maxlength="100" class="form-control" name="phone" id="phone" required>
										</div>
										<div class="col-md-6">
											<label>Tipo de seguro</label>
											<select name="insurance" id="insurance" class="form-control">
												<option value="Seleccione el tipo de seguro">Seleccione el tipo de seguro</option>
												<option value="Seguro de salud">Seguro de salud</option>
												<option value="SOAT">SOAT</option>
												<option value="Seguro vehicular">Seguro vehicular</option>
												<option value="Seguro domiciliario">Seguro domiciliario</option>
												<option value="Seguro de vida">Seguro de vida</option>
												<option value="Seguro oncológico">Seguro oncológico</option>
												<option value="Accidentes personales">Accidentes personales</option>
												<option value="Rapiseguros">Rapiseguros</option>
												
												<option value="Seguro de vida ley">Seguro de vida ley</option>
												<option value="Seguro flota vehicular">Seguro flota vehicular</option>
												<option value="EPS">EPS</option>
												<option value="Multiriesgo PYME">Multiriesgo PYME</option>
												<option value="Seguros de ingienería">Seguros de ingienería</option>
												<option value="SCTR">SCTR</option>
												<option value="Responsabilidad social para hidrocarburos">Responsabilidad social para hidrocarburos</option>
												<option value="Responsabilidad cívil general">Responsabilidad cívil general</option>
												
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Mensaje*</label>
											<textarea maxlength="5000" data-msg-required="Por favor escribe un pequeño mensaje." rows="10" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Enviar Mensaje" class="btn btn-3d btn-secondary btn-lg mb-xlg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-4">
							<br/>
							<h4 class="heading-primary">Nuestra <strong>oficina</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Dirección:</strong> Jr. Bolívar 150 Trujillo </li>
								<li><i class="fa fa-phone"></i> <strong>Teléfono:</strong> 044-22661</li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:informes@megacorredores.pe">informes@megacorredores.pe</a></li>
							</ul>

							<hr>

							<h4 class="heading-primary">Horarios de <strong>trabajo</strong></h4>
							<ul class="list list-icons list-dark mt-xlg">
								<li><i class="fa fa-clock-o"></i>Lunes-Viernes de 9am a 7pm</li>
								<li><i class="fa fa-clock-o"></i>Sábado de 9am a 12pm</li>
								
							</ul>

						</div>

					</div>

</div>


@section('script')
<script src= "{{ asset('js/views/view.contact.js') }}" ></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script>
	// Map Markers
			var mapMarkers = [{
				address: "Jirón Bolivar 150, Trujillo",
				html: "<strong>Trujillo</strong><br>Jr. Bolívar 150 Trujillo",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = -8.115808;
			var initLongitude = -79.029583;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}
</script>
@endsection

@endsection