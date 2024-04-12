@extends('layout.index')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
	<div class="col-auto">
		<h1 class="app-page-title mb-0">Fiche de travail</h1>
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
	<a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Fiche travail Valider</a>
	<a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Fiche travail Non Valider</a>
	<a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Fiche travail Archiver</a>
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
								<th class="cell">ownerItem</th>
								<th class="cell">dknvItem</th>
								<th class="cell">titreElement</th>

								<th class="cell">Actions</th>
								<th class="cell"></th>
							</tr>
						</thead>
						<tbody>
							@php
							$numero=1;
							@endphp
							@forelse($ficheTravailValiders as $ficheTravailValider)
							<tr>
								<td class="cell">{{$numero}}</td>
								<td class="cell"><span class="truncate">{{$ficheTravailValider->ownerItem}}</span></td>
								<td class="cell"><span class="truncate">{{$ficheTravailValider->dknvItem}}</span></td>
								<td class="cell">{{$ficheTravailValider->titreElement}}</td>

								<td class="cell"><a class="btn btn-success" href="{{route('memos.create', $ficheTravailValider->id)}}" style="color:white;">Créer un memo</a></td>
								<td class="cell"><a class="btn btn-success" href="{{route('fiches_travails.show',$ficheTravailValider->id) }}" style="color:white;">Voir</a></td>
								<td class="cell"><a class="btn btn-warning" href="#" style="color:white;">Telecharger</a></td>

							</tr>
							@php
							$numero++;
							@endphp
							@empty
							<tr>
								<td colspan="8" style="color:red;text-align:center;font-size:20px;">Aucune fiche de travail validée trouvée!!!</td>
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
								<th class="cell">ownerItem</th>
								<th class="cell">dknvItem</th>
								<th class="cell">titreElement</th>

								<th class="cell">Actions</th>
								<th class="cell"></th>
							</tr>
						</thead>
						<tbody>
							@php
							$numero=1;
							@endphp

							@forelse($ficheTravailNonValiders as $ficheTravailNonValider)
							<tr>
								<td class="cell">{{$numero}}</td>
								<td class="cell"><span class="truncate">{{$ficheTravailNonValider->ownerItem}}</span></td>
								<td class="cell"><span class="truncate">{{$ficheTravailNonValider->dknvItem}}</span></td>
								<td class="cell">{{$ficheTravailNonValider->titreElement}}</td>
								<form method="post" action="{{ route('fiches_travails.valider', $ficheTravailNonValider->id) }}">
									@csrf
									<td class="cell"><button type="submit" class="btn btn-success" style="color:white;">Valider</button></td>
								</form>
								<td class="cell"><a class="btn btn-secondary" href="{{route('fiches_travails.edit',$ficheTravailNonValider->id)}}" style="color:white;">Modifier</a></td>
								<form method="post" action="{{ route('fiches_travails.archiver', $ficheTravailNonValider->id) }}">
									@csrf
									<td class="cell"><button type="submit" class="btn btn-danger" style="color:white;">Archiver</button></td>
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
								<th class="cell">ownerItem</th>
								<th class="cell">dknvItem</th>
								<th class="cell">titreElement</th>

								<th class="cell">Actions</th>
								<th class="cell"></th>
							</tr>
						</thead>
						<tbody>
							@php
							$numero=1;
							@endphp

							@forelse($ficheTravailArchivers as $ficheTravailArchiver)
							<tr>
							<td class="cell">{{$numero}}</td>
								<td class="cell"><span class="truncate">{{$ficheTravailArchiver->ownerItem}}</span></td>
								<td class="cell"><span class="truncate">{{$ficheTravailArchiver->dknvItem}}</span></td>
								<td class="cell">{{$ficheTravailArchiver->titreElement}}</td>
								<form method="post" action="{{ route('fiches_travails.desarchiver', $ficheTravailArchiver->id) }}">
									@csrf
									<td class="cell"><button type="submit" class="btn btn-success" style="color:white;">Desarchiver</button></td>
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
	
</div><!--//tab-content-->



@endsection