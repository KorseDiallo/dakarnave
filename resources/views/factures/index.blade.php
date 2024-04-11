@extends('layout.index')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
	<div class="col-auto">
		<h1 class="app-page-title mb-0">Factures</h1>
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

					<select class="form-select w-auto">
						<option selected value="option-1">All</option>
						<option value="option-2">This week</option>
						<option value="option-3">This month</option>
						<option value="option-4">Last 3 months</option>

					</select>
				</div>
				<div class="col-auto">
					<a class="btn app-btn-secondary" href="/factures/ajout-facture">

						Ajouter une facture
					</a>
				</div>
			</div><!--//row-->
		</div><!--//table-utilities-->
	</div><!--//col-auto-->
</div><!--//row-->
@if(session('success'))
<div class="alert alert-success mt-3">
	{{session('success')}}
</div>

@endif
<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
	<a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Facture Valider</a>
	<a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Facture Non Valider</a>
	<a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Facture Archiver</a>
	<a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
</nav>

<div class="tab-content" id="orders-table-tab-content">
	<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
		<div class="app-card app-card-orders-table shadow-sm mb-5">
			<div class="app-card-body">
				<div class="table-responsive">
					<table class="table app-table-hover mb-0 text-left">
						<thead>
							<tr>
								<th class="cell">#Num</th>
								<th class="cell">Nom Du Client</th>
								<th class="cell">Debut Travaux</th>
								<th class="cell">Fin Travaux</th>
								<th class="cell">Detail Travaux</th>
								<th class="cell">Montant Brute</th>

								<th class="cell">Actions</th>
								<th class="cell"></th>
							</tr>
						</thead>
						<tbody>
							@php
							$numero=1;
							@endphp

							@forelse($factureValiders as $factureValider)
							<tr>
								<td class="cell">{{$numero}}</td>
								<td class="cell"><span class="truncate">{{$factureValider->client->nom}}</span></td>
								<td class="cell"><span class="truncate">{{$factureValider->debutTravaux}}</span></td>
								<td class="cell">{{$factureValider->finTravaux}}</td>
								<td class="cell"><span class="note">{{$factureValider->detailTravaux}}</span></td>
								<td class="cell"><span class="note">{{$factureValider->montantBrut}}</span></td>
								<td class="cell"><a class="btn btn-success" href="{{route('fiches_travails.create', $factureValider->id)}}" style="color:white;">Créer Un Fild Order</a></td>
								<td class="cell"><a class="btn btn-success" href="{{route('factures.show',$factureValider->id )}}" style="color:white;">Voir</a></td>
								<td class="cell"><a class="btn btn-secondary" href="#" style="color:white;">Telecharger</a></td>


							</tr>
							@php
							$numero++;
							@endphp
							@empty
							<tr>
								<td colspan="8" style="color:red;text-align:center;font-size:20px;">Aucune facture validée trouvée!!!</td>
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

	<div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
		<div class="app-card app-card-orders-table mb-5">
			<div class="app-card-body">
				<div class="table-responsive">

					<table class="table mb-0 text-left">
						<thead>

							<tr>
								<th class="cell">#Num</th>
								<th class="cell">Nom du Client</th>
								<th class="cell">Début Travaux</th>
								<th class="cell">Fin Travaux</th>
								<th class="cell">Détail Travaux</th>
								<th class="cell">Montant Brute</th>

								<th class="cell">Actions</th>
								<th class="cell"></th>
							</tr>

						</thead>
						<tbody>
							@php
							$numero=1;
							@endphp

							@forelse($facturesNonValiders as $facturesNonValider)
							<tr>
								<td class="cell">{{$numero}}</td>
								<td class="cell"><span class="truncate">{{$facturesNonValider->client->nom}}</span></td>
								<td class="cell"><span class="truncate">{{$facturesNonValider->debutTravaux}}</span></td>
								<td class="cell">{{$facturesNonValider->finTravaux}}</td>
								<td class="cell"><span class="note">{{$facturesNonValider->detailTravaux}}</span></td>
								<td class="cell"><span class="note">{{$facturesNonValider->montantBrut}}</span></td>
								<form method="post" action="{{ route('factures.valider', $facturesNonValider->id) }}">
									@csrf
									<td class="cell"><button type="submit" class="btn btn-secondary" style="color:white;">Valider</button></td>
								</form>
								<td class="cell"><a class="btn btn-secondary" href="{{route('factures.edit',$facturesNonValider->id)}}" style="color:white;">Modifier</a></td>
								<form method="post" action="{{ route('factures.archiver', $facturesNonValider->id) }}">
									@csrf
									<td class="cell"><button type="submit" class="btn btn-secondary" style="color:white;">Archiver</button></td>
								</form>
							</tr>
							@php
							$numero++;
							@endphp
							@empty
							<tr>
								<td colspan="8" style="color:red;text-align:center;font-size:20px;">Aucune facture non validée trouvée!!!</td>
							</tr>
							@endforelse
						</tbody>
					</table>
				</div><!--//table-responsive-->
			</div><!--//app-card-body-->
		</div><!--//app-card-->
	</div><!--//tab-pane-->

	<div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
		<div class="app-card app-card-orders-table mb-5">
			<div class="app-card-body">
				<div class="table-responsive">
					<table class="table mb-0 text-left">
						<thead>
							<tr>
								<th class="cell">#Num</th>
								<th class="cell">Nom Du Client</th>
								<th class="cell">Début Travaux</th>
								<th class="cell">Fin Travaux</th>
								<th class="cell">Détail Travaux</th>
								<th class="cell">Montant Brute</th>
								<th class="cell">Actions</th>
								<th class="cell"></th>
							</tr>
						</thead>
						<tbody>
							@php
							$numero=1;
							@endphp

							@forelse($facturesArchivers as $facturesArchiver)
							<tr>
								<td class="cell">{{$numero}}</td>
								<td class="cell"><span class="truncate">{{$facturesArchiver->client->nom}}</span></td>
								<td class="cell"><span class="truncate">{{$facturesArchiver->debutTravaux}}</span></td>
								<td class="cell">{{$facturesArchiver->finTravaux}}</td>
								<td class="cell"><span class="note"></span>{{$facturesArchiver->detailTravaux}}</td>
								<td class="cell"><span class="cell-data">16 Oct</span><span class="note">{{$facturesArchiver->montantBrut}}</span></td>
								<form method="post" action="{{ route('factures.desarchiver', $facturesArchiver->id) }}">
									@csrf
									<td class="cell"><button type="submit" class="btn btn-secondary" style="color:white;">Desarchiver</button></td>
								</form>
							</tr>
							@php
							$numero++;
							@endphp
							@empty
							<tr>
								<td colspan="8" style="color:red;text-align:center;font-size:20px;">Aucune facture Archivée trouvée!!!</td>
							</tr>
							@endforelse
						</tbody>
					</table>
				</div><!--//table-responsive-->
			</div><!--//app-card-body-->
		</div><!--//app-card-->
	</div><!--//tab-pane-->
	<div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
		<div class="app-card app-card-orders-table mb-5">
			<div class="app-card-body">
				<div class="table-responsive">
					<table class="table mb-0 text-left">
						<thead>
							<tr>
								<th class="cell">Order</th>
								<th class="cell">Product</th>
								<th class="cell">Customer</th>
								<th class="cell">Date</th>
								<th class="cell">Status</th>
								<th class="cell">Total</th>
								<th class="cell"></th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td class="cell">#15342</td>
								<td class="cell"><span class="truncate">Justo feugiat neque</span></td>
								<td class="cell">Reina Brooks</td>
								<td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
								<td class="cell"><span class="badge bg-danger">Cancelled</span></td>
								<td class="cell">$59.00</td>
								<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
							</tr>

						</tbody>
					</table>
				</div><!--//table-responsive-->
			</div><!--//app-card-body-->
		</div><!--//app-card-->
	</div><!--//tab-pane-->
</div><!--//tab-content-->



@endsection