@extends('layout.app')

@section('content')
@endsection

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MDT User Approval</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
<!--ESTILOS DE CSS-->      
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <style type="text/css">
    #modal1 .modal-dialog .modal-content .modal-footer .btn.btn-primary {
	text-align: right;
}
    #modal1 .modal-dialog .modal-content .modal-footer .btn.btn-primary {
	text-align: right;
}
    #modal1 .modal-dialog .modal-content .modal-footer {
	text-align: right;
}
    #modal1 .modal-dialog .modal-content .modal-header .modal-title {
	color: #FFF;
}
    #modal1 .modal-dialog .modal-content .modal-body h3 {
	font-weight: bold;
}
    </style>
<!--FIN DE ESTILOS DE CSS-->
</head>

<body>
<!----------------------------------------------BARRA SUPERIOR---------------------------------------------------------->

                                            @include('layout.upbar')
                                            
<!----------------------------------------------BARRA SUPERIOR---------------------------------------------------------->

<!---------------------------------------INICIO DE LA SECCIÓN DE "CONTENIDO"-------------------------------------------->
    
<section class="profile-account-setting">
			<div class="container">
				<div class="account-tabs-setting">
					<div class="row">
						<div class="col-lg-3">
							<div class="acc-leftbar">
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
								    <a class="nav-item nav-link active" id="nav-privcy-tab" data-toggle="tab" href="#privcy" role="tab" aria-controls="privacy" aria-selected="false"><i class="fa fa-group"></i>Approve</a>
								    <a class="nav-item nav-link" id="nav-acc-tab" data-toggle="tab" href="#nav-acc" role="tab" aria-controls="nav-acc" aria-selected="true"><i class="fa fa-black-tie"></i>Project Managers</a>
								    <a class="nav-item nav-link" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="false"><i class="fa fa-laptop"></i>Freelancers</a>
							    </div>
							</div><!--acc-leftbar end-->
						</div>
                        
                        
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">

<!----------------------------------------------INICIO PROJECT MANAGER-------------------------------------------------->								
								<div class="tab-pane fade" id="nav-acc" role="tabpanel" aria-labelledby="nav-acc-tab">
									<div class="acc-setting">
										<h3>Project Managers List</h3>
                                        <div class="requests-list">
 
                                                @if (session('message'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('message') }}
                                                    </div>
                        						@endif

                                        @forelse ($clients->users as $user)
	
                                      	<div class="request-details">
                                    
					  						<div class="noty-user-img">
				  								<img src="images/resources/{{Auth::user()->avatar}}" alt="">
					  						</div>
                                        
					  					<div class="request-info">
				  						  <h3>{{ $user->firstname}} {{ $user->lastname}}</h3>
                                            <p><span>{{ $user->email }}</span></p>
                                            <p><span>{{ $user->country->name}}</span></p>              
                                            <p><span>{{ $user->created_at }}</span></p>
					  					</div>

											<div class="accept-feat">
                                            
                                            
                                            
                                            
                                           <a href="#modal1" 
    id="{{ $user->id}}" 
    firstname="{{ $user->firstname}}" 
    lastname="{{ $user->lastname}}" 
    email="{{ $user->email }}" 
    country="{{ $user->country->name}}" 
    created="{{ $user->created_at }}" 
    data-toggle="modal"><button class="show-req">Show more</button></a>
                                            <p>&nbsp;</p>
                                            <form action="{{ route('users.destroy', [$user->id]) }}">
		                                    		@csrf
					  								<button type="submit" class="edit-req">Edit</button>
		                                    </form>
											<p>&nbsp;</p>
						  					<form method="DELETE" action="{{ route('users.destroy', [$user->id]) }}">
		                                    		@csrf
					  								<button type="submit" class="delete-req">Delete</button>
		                                    </form>

											</div>

                                  		</div><!--request-detailse end--> 

                                                @empty
                                                
                                                    <img src="images/no-users.png" alt="">

                                            

										@endforelse
							  			</div><!--requests-list end-->
                                        
										
									</div><!--acc-setting end-->
								</div>
                                
<!----------------------------------------------FIN PROJECT MANAGER---------------------------------------------------->                                
<!----------------------------------------------INICIO FREELANCER------------------------------------------------------>                                
							  	<div class="tab-pane fade" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
							  		<div class="acc-setting">
							  			<h3>Freelancers List</h3>
                                        
                                        <div class="requests-list">
							  				
                                                
                                                @if (session('message'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('message') }}
                                                    </div>
                        						@endif
                                                
                                                
                                        @forelse ($freelancers->users as $user)
                                              
                                          @if($user->approved==1)	
                                          <div class="request-details">
                                            
							  					<div class="noty-user-img">
						  						  <img src="images/resources/{{Auth::user()->avatar}}" alt="">
							  					</div>
                                                
							  					<div class="request-info">
						  						  <h3>{{ $user->firstname}} {{ $user->lastname}}</h3>
                                                    <p><span>{{ $user->email }}</span></p>
                                                    <p><span>{{ $user->country->name}}</span></p>              
                                                    <p><span>{{ $user->created_at }}</span></p>
                                                    
							  					</div>
                                                                                                
                                             <div class="accept-feat">
                                             
                                 
										
	<a href="#modal1" 
    id="{{ $user->id}}" 
    firstname="{{ $user->firstname}}" 
    lastname="{{ $user->lastname}}" 
    email="{{ $user->email }}" 
    country="{{ $user->country->name}}" 
    created="{{ $user->created_at }}" 
    data-toggle="modal"><button class="show-req">Show more</button></a>
                                            <p>&nbsp;</p>
                                            <form action="{{ route('users.destroy', [$user->id]) }}">
		                                    		@csrf
					  								<button type="submit" class="edit-req">Edit</button>
		                                    </form>
											<p>&nbsp;</p>
						  					<form method="DELETE" action="{{ route('users.destroy', [$user->id]) }}">
		                                    		@csrf
					  								<button type="submit" class="delete-req">Delete</button>
		                                    </form>

											</div>
                                                
                                                
                                          </div><!--request-detailse end--> 
                                          @endif
                                                    @empty
                                                    
                                                        <img src="images/no-users.png" alt="">
												
                                        @endforelse

							  			</div><!--requests-list end-->
                                        
                                        
                                        	
							  		</div><!--acc-setting end-->
							  	</div>                               
<!----------------------------------------------FIN FREELANCER---------------------------------------------------------->

<!------------------------------------------"MODAL" PARA FREELANCERS-------------------------------------------->

<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal1">
	<div class="modal-dialog">
		<div class="modal-content">
        
                        <div class="modal-header">
                                        <h4 class="modal-title">Project Manager Information</h4>
                                        
                            <button type="button" class="close" data-dismiss="modal" 
                            aria-hidden="true">&times;
                            </button>
                            
                        </div>
            
			<div class="modal-body">
                                                             <div class="request-info">

                 <p><b>Name:</b> <span class="firsts"></span></p>
                 <p><b>Lastname:</b> <span class="lasts"></span></p>
                 <p><b>E-mail:</b> <span class="emails"></span></p>
                 <p><b>Country:</b> <span class="countries"></span></p>
                 <p><b>Creation date:</b> <span class="createds"></span></p>
           
                                                    
							  					</div>
             
		  </div>
            
            
		  <div class="modal-footer">
		    <button type="button" class="show-req" data-dismiss="modal">Close</button>
		  </div>
            
		</div>
	</div>
</div>

<!--------------------------------------FIN FORMULARIO "POP UP" PARA TRABAJOS-------------------------------------------->						  	
                                
<!----------------------------------------------INICIO REQUEST---------------------------------------------------------->                               
							  	<div class="tab-pane fade show active" id="privcy" role="tabpanel" aria-labelledby="nav-privcy-tab">
							  		<div class="acc-setting">
							  			<h3>Requests</h3>  
							  		<div class="requests-list">
      
                                        @if (session('message'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('message') }}
                                            </div>
                						@endif
                                                 
                                        @forelse ($users as $user)

                                              <div class="request-details">
                                            
							  					<div class="noty-user-img">
						  						  <img src="images/resources/{{Auth::user()->avatar}}" alt="">
							  					</div>
                                                
							  					<div class="request-info">
						  						  <h3>{{ $user->firstname}} {{ $user->lastname}}</h3>
                                                    <p><span>{{ $user->email }}</span></p>
                                                    <p><span>{{ $user->country->name}}</span></p>              
                                                    <p><span>{{ $user->created_at }}</span></p>
                                                    <p><span>{{ $user->freelancer->category->name }}</span></p>

                                                    @foreach ($user->roles as $role)
    												<p><span>{{ $role->name }}</span></p>
													@endforeach
    												
                                                    @if (!empty($user->freelancer->linkedin_url)) 
                                                    
                                                    <a target="_blank" href="{{ $user->freelancer->linkedin_url }}"><i class="fa fa-linkedin"></i></a>
                                                    
                                                    @endif
                                                    
                                                    @if (strpos($user->freelancer->file, '.pdf'))
                                                    
                                                    <a target="_blank" href="resume/{{ $user->freelancer->file}}" download="{{ $user->freelancer->file}}"><i class="fa fa-file-pdf"></i></a>
                                                    
                                                    @else (strpos($user->freelancer->file, '.docx'))
                                                    
                                                    <a target="_blank" href="resume/{{ $user->freelancer->file}}" download="{{ $user->freelancer->file}}"><i class="fa fa-file-word"></i></a>
                                                    
                                                    @endif

							  					</div>
                                                
							  					<div class="accept-feat">
							  						<ul>
												<form method="POST" action="{{ route('users.approve', [$user->id]) }}">
                                    					@csrf
							  							<button type="submit" class="accept-req">Approve</button>
							  							<p>&nbsp;</p>                                                    
                                                </form>
                                                <form method="DELETE" action="{{ route('users.disapprove', [$user->id]) }}">
                                                		@csrf
						  								<button type="submit" class="noaccept-req">Decline</button>
                                                </form>
                                                    
                                                 </div><!--accept-feat end-->  
                                          </div><!--request-detailse end-->                                             
                                                    @empty
                                                        <img src="images/no-users.png" alt="">
                                                        
                                        @endforelse
							  			</div><!--requests-list end-->
							  		</div><!--acc-setting end-->
							  	</div>
                                
<!----------------------------------------------FIN DEL REQUEST-------------------------------------------------------->                                


							</div>
						</div>

					</div>
				</div><!--account-tabs-setting end-->
			</div>
		</section>
		<footer>
			<div class="footy-sec mn no-margin">
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
					<p><img src="images/copy-icon2.png" alt="">Copyright 2019</p>
					<img class="fl-rgt" src="images/logo2.png" alt="">
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>
$(function(){
	$("a").click(function(e){
  	e.preventDefault();
	
    var id = $(this).attr('id');
    $(".ids").html(id);
	
	var firstname = $(this).attr('firstname');
    $(".firsts").html(firstname);
	
	var lastname = $(this).attr('lastname');
    $(".lasts").html(lastname);
	
	var email = $(this).attr('email');
    $(".emails").html(email);
	
	var country = $(this).attr('country');
    $(".countries").html(country);
	
	var created = $(this).attr('created');
    $(".createds").html(created);
	
    $("#modal-id").modal('show');
  })
})
</script>

</body>
</html>