@extends('layout.index')
@section('content')

<div class="row g-4 settings-section">
	<div class="col-12 col-md-4">
		<h3 class="section-title">Détail client</h3>
		<div class="section-intro">Voir Les Détails Du Client</div>
	</div>

	<div class="row gy-4">
		<div class="col-xm-12 col-sm-12 col-lg-12">
			<div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
				<div class="app-card-header p-3 border-bottom-0">
					<div class="row align-items-center gx-3">
						<div class="col-auto">
							<div class="app-icon-holder">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
								</svg>
							</div><!--//icon-holder-->

						</div><!--//col-->
						<div class="col-auto">
							<h4 class="app-card-title">Profile</h4>
						</div><!--//col-->
					</div><!--//row-->
				</div><!--//app-card-header-->
				<div class="app-card-body px-4 w-100">
					<div class="item  py-3">
						<div class="row  align-items-center  mb-3">
							

							<div class="col">
								<div class="item-label mb-2"><strong>Nom: </strong></div>
								<div class="item-data">{{$client->nom}}</div>
							</div><!--//col-->

							<div class=" item col ">
								<div class="item-label mb-2"><strong>Raison Social: </strong></div>							
								<div class="item-data">{{$client->raisonSocial}}</div>
							</div><!--//col-->

							<div class="col">
								<div class="item-label mb-2"><strong>Email: </strong></div>
								<div class="item-data">{{$client->email}}</div>
							</div><!--//col-->

						</div><!--//row-->

						<div class="row  align-items-center mb-3">
							<div class="col ">
								<div class="item-label mb-2"><strong>Adresse: </strong></div>
								<div class="item-data">{{$client->adresse}}</div>
							</div><!--//col-->

							<div class="col">
								<div class="item-label mb-2"><strong>Téléphone: </strong></div>
								<div class="item-data">{{$client->telephone}} </div>
							</div><!--//col-->

							<div class="col">
								<div class="item-label mb-2"><strong>Montant Plafond: </strong></div>
								<div class="item-data">{{$client->montantPlafond}}</div>
							</div><!--//col-->

						</div><!--//row-->

						<div class="row">
							<div class="col ">
								<div class="item-label mb-2"><strong>Client: </strong></div>
								<div class="item-data">{{$client->client ? 'Oui' : 'Non'}}</div>
							</div><!--//col-->

							<div class="col">
								<div class="item-label mb-2"><strong>Fournisseur: </strong></div>
								<div class="item-data">{{$client->fournisseur ? 'Oui' : 'Non'}} </div>
							</div><!--//col-->

							

						</div><!--//row-->

					</div><!--//app-card-body-->
					

				</div><!--//app-card-->
			</div><!--//col-->


		</div>
	</div><!--//table-responsive-->


	<div class="row gy-4">
		<div class="col-xm-12 col-sm-12 col-lg-12">
			<div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
				<div class="app-card-header p-3 border-bottom-0">
					<div class="row align-items-center gx-3">
						<div class="col-auto">
							<div class="app-icon-holder">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
  <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
</svg>
							</div><!--//icon-holder-->

						</div><!--//col-->
						<div class="col-auto">
							<h4 class="app-card-title">Information Bancaire</h4>
						</div><!--//col-->
					</div><!--//row-->
				</div><!--//app-card-header-->
				<div class="app-card-body px-4 w-100">
					<div class="item  py-3">
						<div class="row   mb-3">
							<div class="col ">
								<div class="item-label mb-2"><strong>Nom de la Banque: </strong></div>
								<div class="item-data">{{$infoBancaireClient->nomBanque}}</div>
							</div><!--//col-->

							<div class="col">
								<div class=" mb-2"><strong>Adresse Bancaire: </strong></div>
								<div class="item-data">{{$infoBancaireClient->adresseBancaire}}</div>
							</div><!--//col-->
							

							

						</div><!--//row-->

						<div class="row  align-items-center mb-3">


						<div class="col">
								<div class="item-label mb-2"><strong>Pays: </strong></div>
								<div class="item-data">{{$infoBancaireClient->pays}}</div>
							</div><!--//col-->
							

							<div class="col">
								<div class="item-label mb-2"><strong>IBAN: </strong></div>
								<div class="item-data">{{$infoBancaireClient->iban}}</div>
							</div><!--//col-->
							
							<div class=" item col ">
								<div class="item-label mb-2"><strong>Swift: </strong></div>
								<div class="item-data">{{$infoBancaireClient->swift}}</div>
							</div><!--//col-->

						</div><!--//row-->

					</div><!--//app-card-body-->
					<div class="app-card-footer p-4 mt-auto">
						<a class="btn btn-success" href="{{route('factures.create', $client->id)}}">Créer Facture</a>
					</div><!--//app-card-footer-->

				</div><!--//app-card-->
			</div><!--//col-->


		</div>
	</div><!--//table-responsive-->


</div>




		@endsection