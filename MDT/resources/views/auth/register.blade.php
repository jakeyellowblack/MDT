@extends('layout.app')

@section('content')

@include('common.success')

@include('common.errors')


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/customfile.css">
	<style type="text/css">
	.sign-in .wrapper .sign-in-page .signin-popup .signin-pop .row .col-lg-6 .cmp-info p {
	text-align: center;
}
    .sign-in .wrapper .sign-in-page .signin-popup .signin-pop .row .col-lg-6 .login-sec #tab-2 #tab-3 form .row {
	text-align: left;
}
    </style>
</head>


<body class="sign-in">

<div class="wrapper">		
	<div class="wrapper">		
		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">

						<!--Inicio Logos-->
						<div class="col-lg-6">					
							<div class="cmp-info">
								<div class="cm-logo">
								  <img src="images/logo-square2.png" alt="">
									<p>Welcome to My Digital Thought !!!</p>
								</div>
								<img src="images/cm-main-img.png" alt="">
							</div>
						</div>
						<!--Fin de Logos-->

						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>				
									<li data-tab="tab-2"><a href="#" title="">Sign up</a></li>				
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									
                                    
<!--INICIO DEL FORMULARIO DE LOGUEO--> 
  
                                    
									<h3>Sign in</h3>
                                    
                                    
									<form method="POST" action="{{ route('login') }}">
                                    @csrf
										<div class="row">
											
<!--EMAIL--> 
								<div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    
                        		@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
										<i class="la la-envelope-o"></i>
									</div><!--sn-field end-->
								</div>
<!--FIN DEL EMAIL-->                                           
                                                         
<!--PASSWORD-->                                            
								<div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">        
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror               
									<i class="la la-lock"></i>
									</div>
								</div>                                          
<!--FIN DEL PASSWORD-->                                             
                                   
                                        
<!--REMEMBER PASSWORD-->                                            
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input id="c1" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
														<label for="c1">
															<span></span>
														</label>
														<small>Remember me</small>
													</div><!--fgt-sec end-->
                                                    
<!--FORGOT PASSWORD-->                                                      
                                               @if (Route::has('password.request'))
													<a href="{{ route('password.request') }}" title="">Forgot Password?</a>
                                               @endif
<!--FIN DEL FORGOT PASSWORD-->                                                     
                                                    
												</div>
											</div>
<!--FIN DEL REMEMBER PASSWORD-->                                            
                                                               
<!--BUTTON-->                                            
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Sign in</button>
											</div>
<!--FIN DEL BUTTON-->
										</div>  
									</form>
                                    
<!--LOGUEO POR MEDIO DE REDES SOCIALES--> 
                                    
									<!--<div class="login-resources">
										<h4>Login Via Social Account</h4>
										<ul>
											<li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
											<li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
										</ul>
									</div>--><!--login-resources end-->
                                    
                                </div><!--sign_in_sec end-->
                                
<!--FIN DE LOGUEO POR MEDIO DE REDES SOCIALES-->                                
                                
								<div class="sign_in_sec" id="tab-2">
									<div class="signup-tab">
										<!--<i class="fa fa-long-arrow-left"></i>-->
										<h2>Choose an option:</h2>
										<ul>
											<li data-tab="tab-3" class="current"><a href="#" title="">Client</a></li>
                                            
                                            
                                            
                                            
											<li data-tab="tab-4"><a href="#" title="">Freelancer</a></li>
										</ul>
									</div><!--signup-tab end-->	
                                    
                                    
									<div class="dff-tab current" id="tab-3">
                                    
										<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

										  <div class="row">

<!--FIRSTNAME-->
								<div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="firstname" type="text" onkeypress="return soloLetras(event)" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="First Name" value="{{ old('firstname') }}" required autocomplete="firstname">                                                        
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               		<i class="la la-user"></i>    
									</div>
								</div>
<!--FIN DEL FIRSTNAME-->                                                 
                                
<!--LASTNAME--> 
                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="lastname" type="text" onkeypress="return soloLetras(event)" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required autocomplete="lastname">               
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <i class="la la-user"></i>
									</div>
								</div>
<!--FIN DEL LASTNAME-->                                                 
                                                
<!--COUNTRY-->           

                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<select class="form-control" name="country_id">
                                      	<option disabled selected>Select a Country</option>
										@foreach($countries as $count)
                                                <option value="{{ $count->id }}">{{ $count->name }}</option>
										@endforeach
										</select>
										<i class="la la-globe"></i>
										<span><i class="fa fa-ellipsis-h"></i></span>
									</div>
								</div>
<!--FIN DEL COUNTRY-->

<!--CATEGORY-->                                                
	                            <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<select class="form-control" name="category_id">
                                      	<option disabled selected>Select a Category</option>      
										@foreach($categories as $cate)
                                                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
										@endforeach
										</select>
										<i class="la la-dropbox"></i>
										<span><i class="fa fa-ellipsis-h"></i></span>
									</div>
								</div>
<!--FIN DEL CATEGORY-->                              
                              
<!--EMAIL-->                               
                              	<div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">                                      
				                @error('email')
					                    <span class="invalid-feedback" role="alert">
					                        <strong>{{ $message }}</strong>
					                    </span>
				                @enderror
                               		<i class="la la-envelope-o"></i>
									</div>
							    </div>   
<!--FIN DEL EMAIL-->                                              
                                              
<!--LINKEDIN-->                                              
                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="linkedin_url" type="url" class="form-control @error('linkedin_url') is-invalid @enderror" name="linkedin_url" placeholder="LinkedIn Profile URL" value="{{ old('linkedin_url') }}" required autocomplete="linkedin_url">
			                    @error('linkedin_url')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
                                    <i class="la la-user"></i>
									</div>
							    </div>
<!--FIN DEL LINKEDIN-->

<!--FILE-->                                  	
						<div class="col-lg-12 no-pdd">
							<div class="sn-field">                                             
	                            <div class="file-upload">
	                                <input class="file-upload__input" type="file" name="file" id="file" multiple>
	                                <button class="file-upload__button" type="button">Choose File(s)</button>
	                                <span class="file-upload__label"></span>
		                        </div>
							</div>
						</div>                    
<!--FIN DEL FILE-->
                                                                                               
<!--PASSWORD-->                                                                              
                        <div class="col-lg-12 no-pdd">
							<div class="sn-field">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{ old('password') }}" required autocomplete="password">     
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <i class="la la-lock"></i>
							</div>
						</div>   
<!--FIN DEL PASSWORD-->                                                
                                                 
<!--CONFIRM PASSWORD-->
                        <div class="col-lg-12 no-pdd">
							<div class="sn-field">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password') }}" required autocomplete="new-password">  
                        <i class="la la-lock"></i>
							</div>
						</div>     
<!--FIN DEL CONFIRM PASSWORD-->                                        
                                                
<!--CHECK TERMS & CONDITIONS-->												
						<div class="col-lg-12 no-pdd">
							<div class="checky-sec st2">
								<div class="fgt-sec">
									<input id="c2" type="checkbox" name="roles" value="2">
									<label for="c2">
										<span></span>
									</label>
									<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
								</div><!--fgt-sec end-->
							</div>
						</div>
<!--FIN DEL CHECK TERMS & CONDITIONS-->

<!--BUTTON-->
						<div class="col-lg-12 no-pdd">
								<button type="submit" value="submit">Get Started</button>
						</div>
<!--FIN DEL BUTTON-->										

										</div>
                                              
                                            
										</form>
									</div><!--dff-tab end-->
									<div class="dff-tab" id="tab-4">
										<form method="POST" action="{{ route('register') }}" entype="multipart/form-data">
                        @csrf
											<div class="row">
                                            
                                            
<!--FIRSTNAME-->                                              
                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="firstname" type="text" onkeypress="return soloLetras(event)" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="First Name" value="{{ old('firstname') }}" required autocomplete="firstname">                                                      
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <i class="la la-user"></i>
    								</div>
							    </div>
<!--FIN DEL FIRSTNAME-->                                                  

<!--LASTNAME-->                                                                    
                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="lastname" type="text" onkeypress="return soloLetras(event)" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required autocomplete="lastname">                    
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <i class="la la-user"></i>
    								</div>
								</div>
<!--FIN DEL LASTNAME-->                                                  
                                                
<!--COUNTRY-->                                                 
                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<select class="form-control" name="country_id">                                
                                        <option disabled selected>Select a Country</option>  
											@foreach($countries as $count)
	                                                <option value="{{ $count->id }}">{{ $count->name }}</option>
											@endforeach
										</select>
										<i class="la la-globe"></i>
										<span><i class="fa fa-ellipsis-h"></i></span>
									</div>
								</div>
<!--FIN DEL COUNTRY-->                                                  

<!--CATEGORY-->                                               
	                            <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<select class="form-control" name="category_id"> 
	                                    <option disabled selected>Select a Category</option>          
											@foreach($categories as $cate)
		                                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
											@endforeach
										</select>
										<i class="la la-dropbox"></i>
										<span><i class="fa fa-ellipsis-h"></i></span>
									</div>
								</div>
<!--FIN DEL CATEGORY-->                                               
                                                                     
<!--EMAIL-->                         
                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">   
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <i class="la la-envelope-o"></i>
									</div>
							    </div> 
<!--FIN DEL EMAIL-->                                                
                                                
<!--LINKEDIN-->                                                             
                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="linkedin_url" type="url" class="form-control @error('linkedin_url') is-invalid @enderror" name="linkedin_url" placeholder="LinkedIn Profile URL" value="{{ old('linkedin_url') }}" required autocomplete="linkedin_url">                    
                                @error('linkedin_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <i class="la la-user"></i>
									</div>
								</div>                                               
<!--FIN DEL LINKEDIN-->                                               

<!--PASSWORD-->                                            
                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{ old('password') }}" required autocomplete="password"> 
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <i class="la la-lock"></i>
									</div>
								</div>   
<!--FIN DEL PASSWORD-->                                                

<!--CONFIRM PASSWORD-->
                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password') }}" required autocomplete="new-password">
                                <i class="la la-lock"></i>
									</div>
								</div>  
<!--FIN DEL CONFIRM PASSWORD-->                                           
												<!--<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="company-name" placeholder="Company Name">
														<i class="la la-building"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="country" placeholder="Country">
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Repeat Password">
														<i class="la la-lock"></i>
													</div>
												</div>-->
                                                
<!--CHECK TERMS & CONDITIONS-->                                                
								<div class="col-lg-12 no-pdd">
									<div class="checky-sec st2">
										<div class="fgt-sec">
											<input id="c3" type="checkbox" name="roles" value="3">
											<label for="c3">
												<span></span>
											</label>
											<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
										</div><!--fgt-sec end-->
									</div>
								</div>
<!--FIN DEL CHECK TERMS & CONDITIONS-->
										
<!--BUTTON-->												
								<div class="col-lg-12 no-pdd">
									<button type="submit" value="submit">Get Started</button>
								</div>
<!--FIN DEL BUTTON-->

											</div>
										</form>
									</div><!--dff-tab end-->
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			<div class="footy-sec">
				<div class="container">
					<ul>
						<li><a href="help-center.html" title="">Help Center</a></li>
						<li><a href="about.html" title="">About</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p><img src="images/copy-icon.png" alt="">Copyright 2019</p>
				</div>
			</div><!--footy-sec end-->
		</div><!--sign-in-page end-->


</div><!--theme-layout end-->
  
  
<!--SECCIÓN JAVASCRIPT-->       
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>      
<script>
		 
		function soloLetras(e)
		{
			   key = e.keyCode || e.which;
			   tecla = String.fromCharCode(key).toLowerCase();
			   letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
			   especiales = "8-37-39-46";
	
			   tecla_especial = false
				   for(var i in especiales)
					{
						if(key == especiales[i])
						{
							tecla_especial = true;
							break;
						}
					}

			if(letras.indexOf(tecla)==-1 && !tecla_especial)
			{
				return false;
			}
    	}
		
		
		function soloNumeros(e)
		{
			   key = e.keyCode || e.which;
			   tecla = String.fromCharCode(key).toLowerCase();
			   letras = "0123456789";
			   especiales = "8-37-39-46";
	
			   tecla_especial = false
				   for(var i in especiales)
					{
						if(key == especiales[i])
						{
							tecla_especial = true;
							break;
						}
					}

			if(letras.indexOf(tecla)==-1 && !tecla_especial)
			{
				return false;
			}
    	}
				
		 	$(document).ready(function()
			{
				$("#cedula, #slug").stringToSlug
				({
					callback: function(text)
					{
						$("#slug").val(text);
					}
				});
				
			});
</script>
<!--FIN DE SECCIÓN JAVASCRIPT--> 


<script type="text/javascript" src="js/customfile.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
@endsection
