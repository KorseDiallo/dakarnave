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

	<div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
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
								<td class="cell">#15346</td>
								<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
								<td class="cell">John Sanders</td>
								<td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
								<td class="cell"><span class="badge bg-success">Paid</span></td>
								<td class="cell">$259.35</td>
								<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
							</tr>

							<tr>
								<td class="cell">#15344</td>
								<td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
								<td class="cell">Teresa Holland</td>
								<td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
								<td class="cell"><span class="badge bg-success">Paid</span></td>
								<td class="cell">$123.00</td>
								<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
							</tr>

							<tr>
								<td class="cell">#15343</td>
								<td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
								<td class="cell">Jayden Massey</td>
								<td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
								<td class="cell"><span class="badge bg-success">Paid</span></td>
								<td class="cell">$199.00</td>
								<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
							</tr>


							<tr>
								<td class="cell">#15341</td>
								<td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
								<td class="cell">Raymond Atkins</td>
								<td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
								<td class="cell"><span class="badge bg-success">Paid</span></td>
								<td class="cell">$678.26</td>
								<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
							</tr>

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
								<td class="cell">#15345</td>
								<td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
								<td class="cell">Dylan Ambrose</td>
								<td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
								<td class="cell"><span class="badge bg-warning">Pending</span></td>
								<td class="cell">$96.20</td>
								<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
							</tr>
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