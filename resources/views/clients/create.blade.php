@extends('layout.index')
@section('content')

<div class="row g-4 settings-section">

	<div class="col-12 col-md-4">

		<h3 class="section-title">Client</h3>
		<div class="section-intro">Formulaire d'Ajout d'un Client</div>
	</div>
	<div class="col-12 col-md-8">
		<div class="app-card app-card-settings shadow-sm p-4">

			<div class="app-card-body">
				<form class="settings-form" method="post" action="{{route('clients.store')}}">
					@csrf
					<div class="row mb-3">
						<div class="col">
							<label for="setting-input-1" class="form-label">Raison Social<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="text" class="form-control" id="setting-input-1" name="raisonSocial" value="{{old('raisonSocial')}}">
							@error("raisonSocial")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-1" class="form-label">Nom<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="text" class="form-control" id="setting-input-1" name="nom" value="{{old('nom')}}">
							@error("nom")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
					</div>

					<div class=" row mb-3">
						<div class="col">
							<label for="setting-input-3" class="form-label">Adresse</label>
							<input type="text" class="form-control" id="setting-input-3" name="adresse" value="{{old('adresse')}}">
							@error("adresse")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-3" class="form-label">Telephone</label>
							<input type="text" class="form-control" id="setting-input-3" name="telephone" value="{{old('telephone')}}">
							@error("telephone")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>


					</div>

					<div class=" row mb-3">
						<div class="col">
							<label for="setting-input-3" class="form-label">Montant Plafond</label>
							<input type="number" class="form-control" id="setting-input-3" name="montantPlafond" min="0" value="{{old('montantPlafond')}}">
							@error("montantPlafond")
							<span style="color:red">{{$message}}</span>
							@enderror
						</div>
						<div class="col">
							<label for="setting-input-3" class="form-label">Email</label>
							<input type="email" class="form-control" id="setting-input-3" name="email" value="{{old('email')}}">
							@error("email")
							<span style="color:red">{{$message}}</span>
							@enderror
						</div>
					</div>

			</div>

			<div class=" row mb-3">
				<div class="col">
					<div class="form-check form-switch mb-3">
						<input class="form-check-input" type="checkbox" id="settings-switch-3" name="client" checked value="{{old('client')}}">
						<label class="form-check-label" for="settings-switch-3">Client</label>
					</div>
				</div>
				<div class="col">
					<div class="form-check form-switch mb-3">
						<input class="form-check-input" type="checkbox" id="settings-switch-3" name="fournisseur" checked value="{{old('fournisseur')}}">
						<label class="form-check-label" for="settings-switch-3">Fournisseur</label>
					</div>
				</div>


			</div>
			<hr>
			<div class="mb-3" style="text-align:center">
				<h3>Information Bancaire</h3>
			</div>

			<div class=" row mb-3">
				<div class="col">
					<label for="setting-input-3" class="form-label">Nom de la Banque</label>
					<input type="text" class="form-control" id="setting-input-3" name="nomBanque" value="{{old('nomBanque')}}">
					@error("nomBanque")
					<span style="color:red">{{$message}}</span>

					@enderror
				</div>
			
			<div class="col">
				<label for="setting-input-3" class="form-label">Adresse de la Bancaire</label>
				<input type="text" class="form-control" id="setting-input-3" name="adresseBancaire" value="{{old('adresseBancaire')}}">
				@error("adresseBancaire")
				<span style="color:red">{{$message}}</span>

				@enderror
			</div>


		</div>
		<div class=" row mb-3">
			<div class="col">
				<label for="setting-input-3" class="form-label">Pays</label>
				<input type="text" class="form-control" id="setting-input-3" name="pays" value="{{old('pays')}}">
				@error("pays")
				<span style="color:red">{{$message}}</span>

				@enderror
			</div>
			<div class="col">
				<label for="setting-input-3" class="form-label">Iban</label>
				<input type="text" class="form-control" id="setting-input-3" name="iban" value="{{old('iban')}}">
				@error("iban")
				<span style="color:red">{{$message}}</span>

				@enderror
			</div>


		</div>
		<div class=" row mb-3">
			<div class="col">
				<label for="setting-input-3" class="form-label">Swift</label>
				<input type="text" class="form-control" id="setting-input-3" name="swift" value="{{old('swift')}}">
				@error("swift")
				<span style="color:red">{{$message}}</span>

				@enderror
			</div>

		</div>

		<button type="submit" class="btn app-btn-primary">Creer un Client</button>
		</form>
	</div><!--//app-card-body-->

</div><!--//app-card-->
</div>
</div><!--//row-->



@endsection