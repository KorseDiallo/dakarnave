<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app app-signup p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img  src="assets/images/background/logo-dknv.jpg" alt="logo" width="400" height="90"></a></div>
					<h2 class="auth-heading text-center mb-4">Sign up to Dakarnav</h2>					
	
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" method='post' action='{{route('users.store')}}'>
                            @csrf         
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Nom</label>
								<input id="signup-name" name="nom" type="text" class="form-control signup-name" placeholder="Nom" required="required" value="{{ old('nom') }}">
                                    @error("nom")
				                        <span style="color:red">{{$message}}</span>
				                    @enderror
							</div>
                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email">Prenom</label>
                                <input id="signup-name" name="prenom" type="text" class="form-control signup-name" placeholder="Prenom" required="required" value="{{ old('prenom') }}">
                                    @error("prenom")
				                        <span style="color:red">{{$message}}</span>
				                    @enderror
                            </div>
                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email">Telephone</label>
                                <input id="signup-name" name="telephone" type="text" class="form-control signup-name" placeholder="Telephone" required="required" value="{{ old('telephone') }}">
                                    @error("telephone")
				                        <span style="color:red">{{$message}}</span>
				                    @enderror
                            </div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Email</label>
								<input id="signup-email" name="email" type="email" class="form-control signup-email" placeholder="Email" required="required" value="{{ old('email') }}">
                                    @error("email")
				                        <span style="color:red">{{$message}}</span>
				                    @enderror
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Mot de passe</label>
								<input id="signup-password" name="password" type="password" class="form-control signup-password" placeholder="Mot de passe" required="required" value="{{ old('password') }}">
                                    @error("password")
				                        <span style="color:red">{{$message}}</span>
				                    @enderror
							</div>
                            <div class="email mb-3">
								<label class="sr-only" for="signup-email">Confirmer mot de passe</label>
								<input id="signup-name" name="confirmPassword" type="text" class="form-control signup-name" placeholder="Confirmer mot de passe" required="required" value="{{ old('confirmPassword') }}">
                                    @error("confirmPassword")
				                        <span style="color:red">{{$message}}</span>
				                    @enderror
							</div>

							
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Ajouter Admin</button>
							</div>
						</form><!--//auth-form-->
                        <div style="margin-top: 20px;">
					        <a  href="{{route('users.index')}}" style="color: gray;">Voir liste</a>
				        </div>
						
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    

		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">			    
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>

				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

