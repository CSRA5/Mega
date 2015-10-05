@extends('layouts/layout')
@section('title','Listado - Mega Corredores de Seguros')
@section('description','')
 

@section('content')

<div class="container">

	<table class="table table-striped" id="leads">
										<thead>
											<tr>
												
												 
												<th>
													Nombre
													<input id="nombre" onkeyup="searchRows('leads')" type="text"/>
												</th>
												<th>
													Email
													 <input id="email" onkeyup="searchRows('leads')" type="text"/>
												</th>
												<th>
													Teléfono
													 <input id="telefono" onkeyup="searchRows('leads')" type="text"/>
												</th>
												<th>
													Seguro
													 <input id="seguro" onkeyup="searchRows('leads')" type="text"/>
												</th>
												<th>
													Fecha
													 <input id="fecha" onkeyup="searchRows('leads')" type="text"/>
												</th>
											</tr>
										</thead>
										

										@foreach ($leads as $lead)
										   
										<tr>
												
												<td>
													{{ $lead->name }}
												</td>
												<td>
													{{ $lead->email }}
												</td>
												<td>
													{{ $lead->phone }}
												</td>
												<td>
													{{ $lead->insurance }}
												</td>
												<td>
													{{ $lead->date }}
												</td>

											</tr>
										 @endforeach
											
										
				</table>

		</div>


@section('script')

<script src="{{ asset('js/find.js') }}"></script>

@endsection

@endsection