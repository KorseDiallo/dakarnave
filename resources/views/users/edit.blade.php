@extends('layout.index')
@section('content')

<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Mon compte</h1>
            <div class="row gy-4">
                <div class="col-12 col-lg-6">
                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                        </svg>
                                    </div><!--//icon-holder-->
                                </div><!--//col-->
                                <div class="col-auto">
                                    <h4 class="app-card-title">Profil</h4>
                                </div><!--//col-->
                            </div><!--//row-->
                        </div><!--//app-card-header-->
                        <form action="{{route('users.update', $user->id)}}" method="POST">
                            @csrf
                            <div class="app-card-body px-4 w-100">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom', $user->nom)}}">
									@error("nom")
				                        <span style="color:red">{{$message}}</span>
				                    @enderror
                                </div>
								<div class="mb-3">
									<label for="website" class="form-label">Prenom</label>
									<input type="text" class="form-control" id="website" name="prenom" value="{{old('prenom', $user->prenom)}}">
									@error("prenom")
				                        <span style="color:red">{{$message}}</span>
				                    @enderror
								</div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{old('email', $user->email)}}">
									@error("email")
				                        <span style="color:red">{{$message}}</span>
				                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Telephone</label>
                                    <input type="text" class="form-control" id="location" name="telephone" value="{{old('telephone', $user->telephone)}}">
									@error("telephone")
				                        <span style="color:red">{{$message}}</span>
				                    @enderror
                                </div>
                            </div><!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <button type="submit" class="btn app-btn-primary">Sauvegarder</button>
                            </div><!--//app-card-footer-->
                        </form>
                    </div><!--//app-card-->
                </div><!--//col-->

            </div><!--//row-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->

</div><!--//app-wrapper-->

@endsection
