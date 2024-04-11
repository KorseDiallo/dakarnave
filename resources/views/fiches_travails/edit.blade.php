@extends('layout.index')
@section('content')

<div class="row g-4 settings-section">
	<div class="col-12 col-md-4">
		<h3 class="section-title">Fiche de travail</h3>
		<div class="section-intro">Formulaire d'ajout d'une fiche de travail</div>
	</div>
	<div class="col-12 col-md-8">
		<div class="app-card app-card-settings shadow-sm p-4">

			<div class="app-card-body">
				<form class="settings-form" method="post" action="{{route('fiches_travails.update', $ficheTravail->id)}}">
					@csrf
					@method('put')
					<div class="row mb-3">
						<div class="col">
							<label for="setting-input-1" class="form-label">Element du propriétaire<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="text" class="form-control" id="setting-input-1" name="ownerItem" value="{{old('ownerItem', $ficheTravail->ownerItem)}}">
							@error("ownerItem")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-1" class="form-label">Element du DKNV<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="text" class="form-control" id="setting-input-1" name="dknvItem" value="{{old('dknvItem', $ficheTravail->dknvItem)}}">
							@error("dknvItem")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
					</div>
					<div class="mb-3">
						<label for="setting-input-3" class="form-label">Type de demande</label>




						<div class="col form-radio">
							<input class="form-control-input" type="radio" id="autoSizingCheck2" name="typeDemande" value="ajout" {{$ficheTravail->typeDemande == 'ajout' ? 'checked ': '' }}>
							<label class="form-check-label" for="autoSizingCheck2">
								Alteration
							</label>
						</div>
						<div class="col form-radio">
							<input class="form-control-input" type="radio" id="autoSizingCheck2" name="typeDemande" value="modification" {{$ficheTravail->typeDemande == 'modification' ? 'checked ': '' }}>
							<label class="form-check-label" for="autoSizingCheck2">
								New item
							</label>

						</div>
						<div class="col form-radio">
							<input class="form-control-input" type="radio" id="autoSizingCheck2" name="typeDemande" value="annuller" {{$ficheTravail->typeDemande == 'annuller' ? 'checked ': '' }}>
							<label class="form-check-label" for="autoSizingCheck2">
								Conselation
							</label>
						</div>


					</div>
					<div class=" mb-3">

						<label for="setting-input-3" class="form-label">Titre des élements</label>
						<input type="text" class="form-control" id="setting-input-3" name="titreElement" min="0" value="{{old('titreElement', $ficheTravail->titreElement)}}">
						
						@error("titreElement")
							<span style="color:red">{{$message}}</span>

							@enderror
					</div>

					<div class=" mb-3">
						<label for="setting-input-3" class="form-label">Observation</label>

						<textarea class="form-control" name="observation"  id="setting-input-3" cols="30" rows="10">{{old('observation', $ficheTravail->observation)}}</textarea>
						

					</div>

					<div class=" row mb-3">
						<div class="col">
							<label for="setting-input-3" class="form-label">Delai de livraison</label>
							<input type="text" class="form-control" id="setting-input-3" name="tempLivraison" value="{{old('tempLivraison', $ficheTravail->tempLivraison)}}">
							@error("tempLivraison")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-3" class="form-label">Prix</label>
							<input type="number" class="form-control" id="setting-input-3" name="prix" min="0" value="{{old('prix', $ficheTravail->prix)}}">
							@error("prix")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>


					</div>
					<div class=" row mb-3">
						<div class="col">
							<label for="setting-input-3" class="form-label">Date signature Product Manager</label>
							<input type="date" class="form-control" id="setting-input-3" name="dateSignatureProductManager" value="{{old('dateSignatureProductManager', $ficheTravail->dateSignatureProductManager)}}">
							@error("dateSignatureProductManager")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-3" class="form-label">Date signature Propriétaire</label>
							<input type="date" class="form-control" id="setting-input-3" name="dateSignaturePropriétaire" value="{{old('dateSignaturePropriétaire', $ficheTravail->dateSignaturePropriétaire)}}">
							@error("dateSignaturePropriétaire")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>


					</div>

					<div class=" row mb-3">
						<div class="col">
							<label for="setting-input-3" class="form-label">Remarque</label>
							<input type="text" class="form-control" id="setting-input-3" name="remarque" value="{{old('remarque', $ficheTravail->remarque)}}">

						</div>



					</div>

					<div class="form-check form-switch mb-3">
						<input class="form-check-input" type="checkbox" id="settings-switch-3" name="valider" {{$ficheTravail->valider == true ? 'checked' : ''}}>
						<label class="form-check-label" for="settings-switch-3">Valider</label>
					</div>

					<button type="submit" class="btn app-btn-primary"> Creer une fiche</button>
				</form>
			</div><!--//app-card-body-->

		</div><!--//app-card-->
	</div>
</div><!--//row-->



@endsection