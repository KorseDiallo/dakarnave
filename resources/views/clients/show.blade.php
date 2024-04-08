@extends('layout.index')
@section('content')

<div class="row g-4 settings-section">
	<div class="col-12 col-md-4">
		<h3 class="section-title">Détail</h3>
		<div class="section-intro">Voir Les Détails Du Client</div>
	</div>
	<!-- <div class="row g-4">
		<div class="col-6 col-md-4 col-xl-3 col-xxl-2">
			<div class="app-card app-card-doc shadow-sm h-100">

				<div class="app-card-body p-3 has-card-actions">

					<h2 class=" truncate mb-0">{{$client->nom}}</h2>
					

				

				</div><!--//app-card-body-->

</div><!--//app-card-->
</div><!--//col-->





</div> 

<div class="table-responsive">
	<table class="table app-table-hover mb-0 text-left">
		<thead>
			<tr>
				<th class="cell">#Num</th>
				<th class="cell">Nom</th>
				<th class="cell">Email</th>
				<th class="cell">Raison social</th>

				<th class="cell">Actions</th>
				<th class="cell"></th>
			</tr>
		</thead>

		<tbody>

			<tr>
				<td class="cell"></td>
				<td class="cell"><span class="truncate"></span></td>
				<td class="cell"></td>
				<td class="cell"><span class="note"></span></td>
				<td class="cell"><a class="btn btn-success" href="{{route('clients.show',$client->id)}}" style="color:white;">Voir Detail</a></td>
				<td class="cell"><a class="btn btn-secondary" href="#" style="color:white;">Modifier</a></td>
				
			</tr>
		</tbody>

	</table>
</div><!--//table-responsive-->
</div><!--//row-->



@endsection