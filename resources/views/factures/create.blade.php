@extends('layout.index')
@section('content')

<div class="row g-4 settings-section">
	<div class="col-12 col-md-4">
		<h3 class="section-title">Facture</h3>
		<div class="section-intro">Formulaire d'ajout d'une facture</div>
	</div>
	<div class="col-12 col-md-8">
		<div class="app-card app-card-settings shadow-sm p-4">

			<div class="app-card-body">
				<form class="settings-form" method="post" action="{{route('factures.store', $client->id)}}">
					@csrf

					<div class="row mb-3">
						<div class="col">
							<label for="setting-input-1" class="form-label">Debut Travaux<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="date" class="form-control" id="setting-input-1" name="debutTravaux" value="{{old('debutTravaux')}}">
							@error("debutTravaux")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-1" class="form-label">Fin Travaux<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="date" class="form-control" id="setting-input-1" name="finTravaux" value="{{old('finTravaux')}}" >
							@error("finTravaux")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
					</div>
					<div class="mb-3">
						<label for="setting-input-2" class="form-label">Detail Travaux</label>
						<textarea class="form-control" name="detailTravaux" ></textarea>
						@error("detailTravaux")
						<span style="color:red">{{$message}}</span>

						@enderror
					</div>
					<div class=" row mb-3">
						<div class="col">
							<label for="setting-input-3" class="form-label">Montant Brut</label>
							<input type="number" class="form-control" id="setting-input-3" name="montantBrut" min="0" value="{{old('montantBrut')}}">
							@error("montantBrut")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-3" class="form-label">Reduction Discussion</label>
							<input type="number" class="form-control" id="setting-input-3" name="reductionDiscussion" min="0" value="{{old('reductionDiscussion')}}">
							@error("reductionDiscussion")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>


					</div>

					<div class=" row mb-3">
						<div class="col">
							<label for="setting-input-3" class="form-label">Reduction Rabais Flotte</label>
							<input type="number" class="form-control" id="setting-input-3" name="reductionRabaisFlotte" min="0" value="{{old('reductionRabaisFlotte')}}">
							@error("reductionRabaisFlotte")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-3" class="form-label">Reduction Rabais Navire</label>
							<input type="number" class="form-control" id="setting-input-3" name="reductionRabaisNavire" min="0" value="{{old('reductionRabaisNavire')}}">
							@error("reductionRabaisNavire")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>


					</div>

					<div class=" row mb-3">
						<div class="col">
							<label for="setting-input-3" class="form-label">Langue</label>
							<select class="form-control mr-sm-2" id="setting-input-3" name="langue">
								<option selected>Choisir la langue</option>
								<option value="fr">Français</option>
								<option value="us">Anglais</option>

							</select>
							@error("langue")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-3" class="form-label">Devise</label>
							<select class="form-control mr-sm-2" id="setting-input-3" name="devise">
								<option selected>Choisir une devise</option>
								<option value="fcfa">Fcfa</option>
								<option value="euro">Euro</option>
								<option value="dollar">Dollar</option>


							</select>
							@error("devise")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>


					</div>
					<div class="form-check form-switch mb-3">
						<input class="form-check-input" type="checkbox" id="settings-switch-3" name="valider" checked value="{{old('valider')}}">
						<label class="form-check-label" for="settings-switch-3">Valider</label>
						@error("valider")
						<span style="color:red">{{$message}}</span>

						@enderror
					</div>

					<button type="submit" class="btn app-btn-primary">Creer une facture</button>
				</form>
			</div><!--//app-card-body-->

		</div><!--//app-card-->
	</div>
</div><!--//row-->



@endsection