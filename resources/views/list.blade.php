@extends('layouts/layout')
@section('title','Listado - Mega Corredores de Seguros')
@section('description','')
 

@section('content')

<div class="container">

	<table class="table table-striped">
										<thead>
											<tr>
												
												<th>
													Nombre
												</th>
												<th>
													Email
												</th>
												<th>
													Teléfono
												</th>
												<th>
													Seguro
												</th>
												<th>
													Fecha
												</th>
											</tr>
										</thead>
										<tbody>

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
											
											
										</tbody>
				</table>

		</div>
@endsection