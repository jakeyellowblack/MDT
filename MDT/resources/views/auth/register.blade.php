@extends('layout.app')

@section('content')


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
	<style type="text/css">
	.sign-in .wrapper .sign-in-page .signin-popup .signin-pop .row .col-lg-6 .cmp-info p {
	text-align: center;
	font-weight: bold;
}
    </style>
</head>


<body class="sign-in">

                    
	

	<div class="wrapper">		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<!--<div class="cm-logo">
									<img src="images/cm-logo.png" alt="">-->
									<p>WELCOME TO MDT !!!</p>
								<!--</div>--><!--cm-logo end-->	
								<img src="images/2014_04_digital-government.jpg" alt="">			
							</div><!--cmp-info end-->
						</div>
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
                                            
                                            
                                   
                                        
                                            
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input id="c1" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
														<label for="c1">
															<span></span>
														</label>
														<small>Remember me</small>
													</div><!--fgt-sec end-->
                                                    
                                                    
                                               @if (Route::has('password.request'))
													<a href="{{ route('password.request') }}" title="">Forgot Password?</a>
                                               @endif
                                                    
                                                    
												</div>
											</div>
                                            
                                
                                
                                            
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Sign in</button>
											</div>
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
                                
                                
                                
								<div class="sign_in_sec" id="tab-2">
									<div class="signup-tab">
										<i class="fa fa-long-arrow-left"></i>
										<h2>rafaelrodriguez@example.com</h2>
										<ul>
											<li data-tab="tab-3" class="current"><a href="#" title="">Client</a></li>
											<li data-tab="tab-4"><a href="#" title="">Freelancer</a></li>
										</ul>
									</div><!--signup-tab end-->	
                                    
                                    
									<div class="dff-tab current" id="tab-3">
										<form method="POST" action="{{ route('register') }}">
                        @csrf
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="First Name" value="{{ old('firstname') }}" required autocomplete="firstname">
                                                        
                                                        @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                               <i class="la la-user"></i>
    
													</div>
												</div>
                                                
                                                
                                                
                                                <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required autocomplete="lastname">
                                                        
                                                        @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                               <i class="la la-user"></i>
    
													</div>
												</div>
                                                
                                                <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" placeholder="Country" value="{{ old('country') }}" required autocomplete="country">
                                                        
                                                        @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                               <i class="la la-globe"></i>
    
													</div>
												</div>
                                                
                                                
                                              <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<select class="form-control" name="category_id">
                                                        
                                                      <option disabled selected>Select a Category</option>
                                                                
														@foreach($categories as $cate)
                                                                <option>{{ $cate->name }}</option>
														@endforeach

														</select>
														<i class="la la-dropbox"></i>
														<span><i class="fa fa-ellipsis-h"></i></span>
													</div>
												</div>
                              
                              
                              
                       
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
                                                
                                                 <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password') }}" required autocomplete="new-password">
                                                        
                                                       
                                               <i class="la la-lock"></i>
    
													</div>
												</div>     
                                       
                                                
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="terms" id="c2" value="1">
															<label for="c2">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
                                        
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
											</div>
                                               
                                            
										</form>
									</div><!--dff-tab end-->
									<div class="dff-tab" id="tab-4">
										<form method="POST" action="{{ route('register') }}">
                        @csrf
											<div class="row">
                                            
                                            
                                            
                                            <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="First Name" value="{{ old('firstname') }}" required autocomplete="firstname">
                                                        
                                                        @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                               <i class="la la-user"></i>
    
													</div>
												</div>
                                                
                                                
                                                
                                                <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required autocomplete="lastname">
                                                        
                                                        @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                               <i class="la la-user"></i>
    
													</div>
												</div>
                                                
                                                <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" placeholder="Country" value="{{ old('country') }}" required autocomplete="country">
                                                        
                                                        @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                               <i class="la la-globe"></i>
    
													</div>
												</div>
                                                
                                                
                                                
                                                
                             
                              
                              
                       
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
                                                
                                                 <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password') }}" required autocomplete="new-password">
                                                        
                                                       
                                               <i class="la la-lock"></i>
    
													</div>
												</div>  
                                            
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
                                                
                                                
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c3">
															<label for="c3">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
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



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
@endsection
