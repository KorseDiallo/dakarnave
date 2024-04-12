@extends('layout.index')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
	<div class="col-auto">
		<h1 class="app-page-title mb-0">Administrateurs archives</h1>
	</div>
	<div class="col-auto">
		<div class="page-utilities">
			<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
				<div class="col-auto">
					<form class="table-search-form row gx-1 align-items-center" action="" method="get">
						@csrf
						<div class="col-auto">
							<input type="text" id="search-orders" name="searchClient" class="form-control search-orders" placeholder="Search" >
						</div>
						<div class="col-auto">
							<button type="submit" class="btn app-btn-secondary">Search</button>
						</div>
					</form>

				</div><!--//col-->

				<div class="col-auto">
					<a class="btn app-btn-secondary" href="{{route('register')}}">

						Ajouter Administrateur
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
								<th class="cell">Prenom</th>
								<th class="cell">Telephone</th>
								<th class="cell">Email</th>

								<th class="cell">Action</th>
								<th class="cell"></th>
							</tr>
						</thead>

						<tbody>
							@php
							$numero=1;
							@endphp

							@forelse($users as $user)
							<tr>
								<td class="cell">{{$numero}}</td>
								<td class="cell"><span class="truncate">{{$user->nom}}</span></td>
								<td class="cell"><span class="truncate">{{$user->prenom}}</span></td>
								<td class="cell">{{$user->telephone}}</td>
								<td class="cell"><span class="note">{{$user->email}}</span></td>
								<td class="cell">
									<form action="{{route('users.desarchive',$user->id)}}" method="post">
										@csrf
                                    
                                        <button class="btn btn-danger" type="submit" style="color:white;">Desarchiver</button>
                                    </form>
									
								</td>

							</tr>
							@php
							$numero++;
							@endphp
							@empty
							<tr>
								<td colspan="8" style="color:red;text-align:center;font-size:20px;">Pas d'administrateur pour Le moment!!!.</td>
							</tr>
							@endforelse

						</tbody>

					</table>
				</div><!--//table-responsive-->

			</div><!--//app-card-body-->
		</div><!--//app-card-->
		<nav class="app-pagination">
    <ul class="pagination justify-content-center">
        {{-- Lien vers la page précédente --}}
        @if ($users->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $users->previousPageUrl() }}" tabindex="-1">Previous</a>
            </li>
        @endif

        {{-- Lien vers chaque page --}}
       
		@for ($i = 1; $i <= $users->lastPage(); $i++)
            <li class="page-item {{ $users->currentPage() == $i ? 'active' : '' }}">
                <a class="page-link" href="{{ $users->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        {{-- Lien vers la page suivante --}}
        @if ($users->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $users->nextPageUrl() }}">Next</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Next</span>
            </li>
        @endif
    </ul>
</nav><!--//app-pagination-->

	</div><!--//tab-pane-->

	
</div><!--//tab-content-->



@endsection