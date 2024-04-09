@extends('layout.index')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
	<div class="col-auto">
		<h1 class="app-page-title mb-0">Clients</h1>
	</div>
	<div class="col-auto">
		<div class="page-utilities">
			<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
				<div class="col-auto">
					<form class="table-search-form row gx-1 align-items-center">
						<div class="col-auto">
							<input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
						</div>
						<div class="col-auto">
							<button type="submit" class="btn app-btn-secondary">Search</button>
						</div>
					</form>

				</div><!--//col-->

				<div class="col-auto">
					<a class="btn app-btn-secondary" href="{{route('clients.create')}}">

						Ajouter client
					</a>
				</div>
			</div><!--//row-->
		</div><!--//table-utilities-->
	</div><!--//col-auto-->
</div><!--//row-->

@if(session('success'))
<div class="alert alert-success mt-5">
	{{session('success')}}
</div>

@endif

<div class="tab-content" id="orders-table-tab-content">
	<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
		<div class="app-card app-card-orders-table shadow-sm mb-5">
			<div class="app-card-body">
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
							@php
							$numero=1;
							@endphp

							@forelse($clients as $client)
							<tr>
								<td class="cell">{{$numero}}</td>
								<td class="cell"><span class="truncate">{{$client->nom}}</span></td>
								<td class="cell">{{$client->email}}</td>
								<td class="cell"><span class="note">{{$client->raisonSocial}}</span></td>
								<td class="cell"><a class="btn btn-secondary" href="{{route('factures.create', $client->id)}}" style="color:white;">Créer Facture</a></td>
								<td class="cell"><a class="btn btn-success" href="{{route('clients.show',$client->id)}}" style="color:white;">Voir Detail</a></td>
								<td class="cell"><a class="btn btn-secondary" href="{{route('clients.edit',$client->id)}}" style="color:white;">Modifier</a></td>
								<td class="cell">
									<form action="{{route('clients.destroy',$client->id)}}" method="post">
										@csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" style="color:white;">Supprimer</button>
                                    </form>
									
								</td>

							</tr>
							@php
							$numero++;
							@endphp
							@empty
							<tr>
								<td colspan="8" style="color:red;text-align:center;font-size:20px;">Pas De Client Inscrit Pour Le Moment!!!.</td>
							</tr>
							@endforelse

						</tbody>

					</table>
				</div><!--//table-responsive-->

			</div><!--//app-card-body-->
		</div><!--//app-card-->
		<nav class="app-pagination">
			<ul class="pagination justify-content-center">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
				</li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav><!--//app-pagination-->

	</div><!--//tab-pane-->

	



@endsection