@extends('layout.app')

@section('content')

@include('common.success')

@include('common.errors')

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Complete</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
  
<!--ESTILOS DE CSS-->  
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
<!--FIN DE ESTILOS DE CSS-->
    
<!--SECCIÓN DE 'ESTILOS EXTRAS' PARA LA PÁGINA-->
	<style type="text/css">
	.sign-in .wrapper .sign-in-page .signin-popup .signin-pop .row .col-lg-6 .cmp-info p {
	text-align: center;
}
    .sign-in .wrapper .sign-in-page .signin-popup .signin-pop .row .col-lg-6 .login-sec #tab-2 #tab-3 form .row {
	text-align: left;
}
    </style>
<!--FIN DE SECCIÓN DE 'ESTILOS EXTRAS'-->
    
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
									<p>Great! You're one step away from finishing your registration. Please complete the following information:</p>
								</div>
								<img src="images/cm-main-img.png" alt="">
							</div>
						</div>
						<!--Fin de Logos-->

						<div class="col-lg-6">
							<div class="login-sec">
										
								<div class="sign_in_sec current" id="tab-1">
									
                                    
<!--INICIO DEL FORMULARIO DE LOGUEO--> 
  
                                    
									<h3>Complete your Registration</h3>
                                    
                                    
									<form method="POST" action="{{ route('complete.store') }}" enctype="multipart/form-data">
                        @csrf
                        
										<div class="row">
											
<!--LINKEDIN-->                                                             
                                <div class="col-lg-12 no-pdd">
									<div class="sn-field">
										<input id="linkedin_url" type="url" class="form-control" name="linkedin_url" placeholder="LinkedIn Profile URL" >                    
                                
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
                                                             
<!--BUTTON-->                                            
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Send!</button>
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
            
<!--INICIO DEL PIE DE PÁGINA-->

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


<!--FUNCIÓN PARA TIPEAR 'SOLO LETRAS' EN INPUTS-->  
		 
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
		
<!--FIN DE LA FUNCIÓN 'SOLO LETRAS'-->  


<!--FUNCIÓN PARA TIPEAR 'SOLO NÚMEROS' EN INPUTS--> 
		
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
			
<!--FIN DE LA FUNCIÓN 'SOLO NÚMEROS'-->

</script>
<!--FIN DE SECCIÓN JAVASCRIPT--> 

<!--LIBRERÍAS DE JAVASCRIPT-->
<script type="text/javascript" src="js/customfile.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--FIN DE LIBRERÍAS-->

</body>
</html>
@endsection
