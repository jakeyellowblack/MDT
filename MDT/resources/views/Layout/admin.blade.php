@extends('layout.app')

@section('content')
@endsection

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MDT Home</title>
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
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
    
   
    
<!--FIN DE ESTILOS DE CSS-->

</head>

<body>	
<!----------------------------------------------BARRA SUPERIOR---------------------------------------------------------->

											@include('layout.upbar')
                                            
<!----------------------------------------------BARRA SUPERIOR---------------------------------------------------------->

<!---------------------------------------INICIO DE LA SECCIÓN DE "CONTENIDO"-------------------------------------------->
        
		<main>
			<div class="main-section">
			  <div class="container">
				<div class="main-section-data">
				  <div class="row">
							<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
                                    
<!---------------------------------BARRA DE INFORMACIÓN DEL USUARIO (LADO IZQUIERDO)----------------------------------->

					<!--Sección "Profile Picture" del Usuario-->
                    
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="images/resources/{{Auth::user()->avatar}}" alt="">
												</div>
											</div><!--username-dt end-->
                                            
                    <!--Fin Sección "Profile Picture" del Usuario-->
                                            
                                            
                    <!--Sección "Firstname/Lasname" del Usuario-->
                    
											<div class="user-specs">
												<h3>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h3>
											</div>
										</div><!--user-profile end-->
                                        
                    <!--Fin Sección "Firstname/Lasname" del Usuario-->
                    
                    
                    <!--Sección "Following/Followers/View Profile" del Usuario-->
                                
										<ul class="user-fw-status">
											<li>
												<h4>Following</h4>
												<span>34</span>
											</li>
											<li>
												<h4>Followers</h4>
												<span>155</span>
											</li>
											<li>
												<a href="my-profile" title="">View Profile</a>
											</li>
										</ul>
									</div><!--user-data end-->
                                    
                    <!--Sección "Following/Followers/View Profile" del Usuario-->

<!------------------------------FIN BARRA DE INFORMACIÓN DEL USUARIO (LADO IZQUIERDO)-------------------------------------->


<!----------------------BARRA DE SUGERENCIAS DE USUARIOS DESTACADOS (LADO IZQUIERDO)-------------------------------------->
                     
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Suggestions</h3>
											<i class="la la-ellipsis-v"></i>
										</div><!--sd-title end-->
                                        
										<div class="suggestions-list">
                                        
                                        
											@foreach ($users as $us)
                                                        <div class="suggestion-usd">
                                                            <img src="images/resources/s1.png" alt="">
                                                            <div class="sgt-text">
                                                            <h4>{{ $us->firstname }} {{ $us->lastname }}</h4>
                                                        </div>
                                                    <span><i class="la la-plus"></i></span>
                                               </div>
                                    		@endforeach
 
											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
                                    
                                    
<!--------------------FIN BARRA DE SUGERENCIAS DE USUARIOS DESTACADOS (LADO IZQUIERDO)-------------------------------------->
                                    
                                    
<!---------------------------------------PIE DE PÁGINA MINIMIZADO (LADO IZQUIERDO)-------------------------------------->                                    
                                    
									<div class="tags-sec full-width">
										<ul>
											<li><a href="#" title="">Help Center</a></li>
											<li><a href="about" title="">About</a></li>
											<li><a href="#" title="">Privacy Policy</a></li>
											<li><a href="#" title="">Community Guidelines</a></li>
											<li><a href="#" title="">Cookies Policy</a></li>
											<li><a href="#" title="">Career</a></li>
											<li><a href="#" title="">Language</a></li>
											<li><a href="#" title="">Copyright Policy</a></li>
										</ul>
                                        
										<div class="cp-sec">
											<img src="images/logo-mdt2.png" alt="">
											<p><img src="images/cp.png" alt="">Copyright 2019</p>
										</div>
									</div><!--tags-sec end-->
								</div><!--main-left-sidebar end-->
							</div>
                            
<!----------------------FIN DE PIE DE PÁGINA MINIMIZADO Y BARRAS LATERALES IZQUIERDAS-------------------------------->
                            
                            
<!-----------------------------------------INICIO DE BARRA CENTRAL PARA POSTEOS-------------------------------------->

<!------------------------------------------------------PRIMER POST-------------------------------------------------->                            
		
				<!--Imagen de Perfil del Usuario Logueado-->
                                                            

					<div class="col-lg-6 col-md-8 no-pd">
								<div class="main-ws-sec">
                                
                                    @include('common.success2')

									<div class="post-topbar">
										<div class="user-picy">
											<img src="images/resources/user-pic.png" alt="">
										</div>
                                        
               <!--Fin Imagen de Perfil del Usuario Logueado-->
                                        
                   
               <!--Sección de botones "pop-up" para postear "Projects" o "Jobs"-->   
                                 
										<div class="post-st">
											<ul>
												<li><a class="post-jb active" href="#" title="">Post a Job</a></li>
											</ul>
										</div><!--post-st end-->
									</div><!--post-topbar end-->
                                    
              <!--Fin Sección de botones "pop-up" para postear "Projects" o "Jobs"-->
                 
             
     
             		@forelse ($job as $jo)                       
              <!--Inicio Recuadro Informativo de Posteos --> 
                          <!--Imagen de Perfil del Usuario Posteador--> 
                          
									<div class="posts-section">
										<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="images/resources/us-pic.png" alt="">
                                                    
                          <!--Fin Imagen de Perfil del Usuario Posteador--> 
                                                    
                                                    
                           <!--Nombre y Apellido del Usuario Posteador-->
                           
													<div class="usy-name">
														<h3>{{ $jo->user->firstname }} {{ $jo->user->lastname }}</h3>
														<span><img src="images/clock.png" alt="">{{ $jo->created_at }}</span>
													</div>
												</div>
                                                
                           <!--Fin Nombre y Apellido del Usuario Posteador-->
                                                
                                                
                           <!--Barra desplegable con opciones de Ediciónd del Post--> 
                                              
												<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
													<ul class="ed-options">
														<li><a href="#" title="">Edit Post</a></li>
														<li><a href="#" title="">Unsaved</a></li>
														<li><a href="#" title="">Unbid</a></li>
														<li><a href="#" title="">Close</a></li>
                                                        @if(Auth::user()->id == $jo->user->id )
														<li><a href="{{ route('job.destroy', $jo->id) }}" title="">Hide</a></li>
                                                        @endif
													</ul>
												</div>
											</div>
                                            
                           <!--Fin Barra desplegable con opciones de Ediciónd del Post-->  
                           
                           
                           <!--Muestra de "Rango de Posteador(?)", País y Botones de "Guardado" y "Mensaje"-->
                           
											<div class="epi-sec">
												<ul class="descp">
													<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
													<li><img src="images/icon9.png" alt=""><span>{{ $jo->user->countries->name }}</span></li>
												</ul>
                                                
												<ul class="bk-links">
													<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
													<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">Bid Now</a></li>
												</ul>
											</div>
                                            
                           <!--Fin Muestra de "Rango de Posteador(?)", País y Botones de "Guardado" y "Mensaje"-->
                                            
                                            
                           <!--Sección "Descripción del Trabajo"--> 
                                           
											<div class="job_descp">
                                            
                                            <!--Nombre del Trabajo-->
												<h3>{{ $jo->title }}</h3>
                                                
                                                
                                            <!--Tiempo y Paga del Trabajo-->
												<ul class="job-dt">
													<li><a href="#" title="">{{ $jo->time->name }}</a></li>
													<li><span>${{ $jo->price }} / hr</span></li>
												</ul>
                                            
                                            
                                            <!--Descripción del Trabajo-->
												<p>{{ $jo->description }} 
                                                <a href="#" title="">view more</a></p>
                                                
                                          
                                            <!--Tags relacionados con el Trabajo-->
												<ul class="skill-tags">
													<li><a href="#" title="">HTML</a></li>
													<li><a href="#" title="">PHP</a></li>
													<li><a href="#" title="">CSS</a></li>
													<li><a href="#" title="">Javascript</a></li>
													<li><a href="#" title="">Wordpress</a></li> 	
												</ul>
											</div>
                                            
                            <!--Fin Sección "Descripción del Trabajo"--> 
                                       
                                          
                            <!--Sección de "Status" del Trabajo (Likes, comentarios y vistas)-->  
                                          
											<div class="job-status-bar">
												<ul class="like-com">
                                                
                                           <!--Imágenes de Usuarios que han dado Like al Trabajo-->
													<li>
														<a href="#"><i class="fas fa-heart"></i> Like</a>
														<img src="images/liked-img.png" alt="">
														<span>25</span>
													</li> 
                                                    
                                                    
                                          <!--Número total de Likes dados al Trabajo-->       
											<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
												</ul>
                                                
                                                
                                         <!--Número total de Vistas del Trabajo-->      
												<a href="#"><i class="fas fa-eye"></i>Views 50</a>
											</div>
										</div><!--post-bar end-->
                                        
                    <!--Fin Sección de "Status" del Trabajo (Likes, comentarios y vistas) y Recuadro de Posts--> 
                    
                    @empty
                    

                          
                           <!--Inicio Recuadro Informativo de Posteos --> 
                          <!--Imagen de Perfil del Usuario Posteador--> 
                          
									<div class="posts-section">
										<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													
												</div>
                        
												<div class="ed-opts">
													
												</div>
											</div>
                    
											<div class="epi-sec">
												
											</div>
                                           
											<div class="job_descp">
                                            
                                          			<img src="images/postnew.png" alt="">
											</div>
                                          
											
										</div>
                    
                    
              @endforelse
              
        
                    
                    
<!------------------------------------------------FIN DE PRIMER POST-------------------------------------------------->
                                        
                                        
<!-------------------------------------------BARRA DESLIZABLE DE PERFILES "TOP"---------------------------------------------->                                        
                                        
										<div class="top-profiles">
											<div class="pf-hd">
												<h3>Top Profiles</h3>
												<i class="la la-ellipsis-v"></i>
											</div>
                                            
                                  <!--Primer Perfil Destacado-->          
                                            
											<div class="profiles-slider">
												<div class="user-profy">
                                                
													<img src="images/resources/user1.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
                                                    
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
                                                    
													<a href="#" title="">View Profile</a>
												</div><!--user-profy end-->
                                                
                                                
                                   <!--Segundo Perfil Destacado-->  
                                              
												<div class="user-profy">
                                                
													<img src="images/resources/user2.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
                                                    
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
                                                    
													<a href="#" title="">View Profile</a>
												</div><!--user-profy end-->
                                                
                                    <!--Tercer Perfil Destacado-->            
                                              
												<div class="user-profy">
                                                
													<img src="images/resources/user3.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
                                                    
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
                                                    
													<a href="#" title="">View Profile</a>
												</div><!--user-profy end-->
                                                
                                  <!--Cuarto Perfil Destacado-->              
                                                
												<div class="user-profy">
													<img src="images/resources/user1.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
                                                    
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
                                                    
													<a href="#" title="">View Profile</a>
												</div><!--user-profy end-->
                                 
                                               
                                <!--Quinto Perfil Destacado-->
                                   
												<div class="user-profy">
													<img src="images/resources/user2.png" alt="">
                                                    
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
                                                    
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
                                                    
													<a href="#" title="">View Profile</a>
												</div><!--user-profy end-->
                                                
                              <!--Sexto Perfil Destacado-->                  
                                                
												<div class="user-profy">
													<img src="images/resources/user3.png" alt="">
                                                    
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
                                                    
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
                                                    
													<a href="#" title="">View Profile</a>
												</div><!--user-profy end-->
											</div><!--profiles-slider end-->
										</div><!--top-profiles end-->
                                        
<!-------------------------------------FIN BARRA DESLIZABLE DE PERFILES "TOP"---------------------------------------->
                                       
                                            
<!-----------------------------------------------SECCIÓN DE COMENTARIOS-------------------------------------------------->                                           
											<!--<div class="comment-section">
                                            
												<a href="#" class="plus-ic">
													<i class="la la-plus"></i>
												</a>
                                                
												<div class="comment-sec">
                                                
													<ul>
														<li>
															<div class="comment-list">
																<div class="bg-img">
																	<img src="images/resources/bg-img1.png" alt="">
																</div>
																<div class="comment">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt=""> 3 min ago</span>
																	<p>Lorem ipsum dolor sit amet, </p>
																	<a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
																</div>
															</div>--><!--comment-list end-->
                                                            
                                                            
															<!--<ul>
																<li>
																	<div class="comment-list">
																		<div class="bg-img">
																			<img src="images/resources/bg-img2.png" alt="">
																		</div>
																		<div class="comment">
																			<h3>John Doe</h3>
																			<span><img src="images/clock.png" alt=""> 3 min ago</span>
																			<p>Hi John </p>
																			<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
																		</div>
																	</div>--><!--comment-list end-->
																<!--</li>
															</ul>
														</li>
                                                        
														<li>
															<div class="comment-list">
																<div class="bg-img">
																	<img src="images/resources/bg-img3.png" alt="">
																</div>
																<div class="comment">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt=""> 3 min ago</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
																	<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
																</div>
															</div>--><!--comment-list end-->
														<!--</li>
													</ul>
												</div>--><!--comment-sec end-->
                                                
<!--------------------------------------------FIN SECCIÓN DE COMENTARIOS-------------------------------------------------->
                                                
                                                
<!--------------------------------------------SECCIÓN "POSTEAR COMENTARIOS"----------------------------------------------->                                                
												<!--<div class="post-comment">
													<div class="cm_img">
														<img src="images/resources/bg-img4.png" alt="">
													</div>
													<div class="comment_box">
														<form>
															<input type="text" placeholder="Post a comment">
															<button type="submit">Send</button>
														</form>
													</div>
												</div>
											</div>
										</div>--><!--posty end-->
                                        
<!----------------------------------------FIN SECCIÓN "POSTEAR COMENTARIOS"-----------------------------------------------> 
 
 
<!------------------------------------------BARRA DE CARGA DE COMENTARIOS------------------------------------------------->                                       
										<!--<div class="process-comm">
											<div class="spinner">
												<div class="bounce1"></div>
												<div class="bounce2"></div>
												<div class="bounce3"></div>
											</div>
										</div>--><!--process-comm end-->
                                        
<!--------------------------------------FIN BARRA DE CARGA DE COMENTARIOS------------------------------------------------->


									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>
                            
<!------------------------------------------FIN DE BARRA CENTRAL PARA POSTEO--------------------------------------------->                           

<!------------------------------------------INICIO DE BARRAS LATERALES DERECHAS------------------------------------------>                   
					<div class="col-lg-3 pd-right-none no-pd">
								<div class="right-sidebar">
                                
                                
                                <!--Sección "Acerca de..." de la Página-->
                                
									<div class="widget widget-about">
										<img src="images/logo-square.png" alt="">
										<h3>Track Time on My Digital Thougth</h3>
										<span>Pay only for the Hours worked</span>
                                        
										<div class="sign_link">
											<h3><a href="sign-in.html" title="">Sign up</a></h3>
											<a href="#" title="">Learn More</a>
										</div>
									</div><!--widget-about end-->
                                    
                                 <!--Fin Sección "Acerca de..." de la Página-->
                                    
                                
                                <!--Sección "Top Jobs " de la Página--> 
                                  
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Top Jobs</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
                                        
                                        
                                <!--Información del Primer Trabajo-->     
                                        
										<div class="jobs-list">
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Product Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
                                            
                                            
                                <!--Información del Segundo Trabajo-->            
                                            
											<div class="job-info">
												<div class="job-details">
													<h3>Senior UI / UX Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
                                            
                                            
                                 <!--Información del Tercer Trabajo-->      
                                            
											<div class="job-info">
												<div class="job-details">
													<h3>Junior Seo Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
                                            
                                            
                               <!--Información del Cuarto Trabajo-->      
                                            
											<div class="job-info">
												<div class="job-details">
													<h3>Senior PHP Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
                                     
                                            
                                <!--Información del Quinto Trabajo-->
                                            
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Developer Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
                                                
											</div><!--job-info end-->
										</div><!--jobs-list end-->
									</div><!--widget-jobs end-->
                                    
                     <!--Fin Sección "Top Jobs" de la Página-->
                                    
                                    
                     <!--Sección "Most Viewed Jobs" de la Página-->               
                                    
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Most Viewed This Week</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
                                        
										<div class="jobs-list">
                                        
                                        
                              <!--Información del Primer Trabajo-->
                              
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Product Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
                                            
                                            
                               <!--Información del Segundo Trabajo-->  
                                          
											<div class="job-info">
												<div class="job-details">
													<h3>Senior UI / UX Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
                                            
                                            
                               <!--Información del Tercer Trabajo-->  
                                          
											<div class="job-info">
												<div class="job-details">
													<h3>Junior Seo Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
                                            
                                            
										</div><!--jobs-list end-->
									</div><!--widget-jobs end-->
                                    
                      <!--Fin Sección "Most Viewed Jobs" de la Página-->      
                                    
                                    
                                    
                      <!--Sección "Most Viewed People" de la Página-->    
                              
									<div class="widget suggestions full-width">
										<div class="sd-title">
											<h3>Most Viewed People</h3>
											<i class="la la-ellipsis-v"></i>
										</div><!--sd-title end-->
                                        
                                        
										<div class="suggestions-list">
											<div class="suggestion-usd">
												<img src="images/resources/s1.png" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
                                            
                                            
											<div class="suggestion-usd">
												<img src="images/resources/s2.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
                                            
                                            
											<div class="suggestion-usd">
												<img src="images/resources/s3.png" alt="">
												<div class="sgt-text">
													<h4>Poonam</h4>
													<span>Wordpress Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
                                            
                                            
											<div class="suggestion-usd">
												<img src="images/resources/s4.png" alt="">
												<div class="sgt-text">
													<h4>Bill Gates</h4>
													<span>C &amp; C++ Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
                                            
                                            
											<div class="suggestion-usd">
												<img src="images/resources/s5.png" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
                                            
                                            
											<div class="suggestion-usd">
												<img src="images/resources/s6.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
                                            
                                  <!--Sección para desplegar más "Most Viewed People"-->
                                  
											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
									  </div><!--suggestions-list end-->
								  </div>
								</div><!--right-sidebar end-->
                                
                           <!--Fin Sección "Most Viewed People" de la Página-->
                                
<!------------------------------------------FIN DE BARRAS LATERALES DERECHAS---------------------------------------------->                             
							</div>
				  </div>
				</div><!-- main-section-data end-->
			  </div> 
			</div>
		</main>
        
<!------------------------------------------FIN SECCIÓN PRINCIPAL DE LA PÁGINA------------------------------------------->



<!------------------------------------------FORMULARIO "POP UP" PARA TRABAJOS-------------------------------------------->

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Post a job</h3>
                
				<div class="post-project-fields">
					<form method="POST" action="{{ route('job.store') }}">
                    	@csrf
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
                            
                            {!! Form::hidden('user_id', auth()->user()->id) !!}
                            
							<div class="col-lg-12">
								<div class="inp-field">
									<select class="form-control" name="category_id">
										<option disabled selected>Select a Category</option>
										@foreach($categories as $cate)
                                                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
                            
                                <!--<div class="col-lg-12">
                                	<div class="inp-field">
									    <input type="text" name="skill_id" placeholder="Tags" class="tm-input form-control tm-input-info"/>
									  <p>&nbsp;</p>
                           	      </div>
                            </div>-->
                            
							<div class="col-lg-6">
								<div class="price-br">
									<input type="text" name="price" onkeypress="return soloNumeros(event)" placeholder="Price">
									<i class="la la-dollar"></i>
								</div>
							</div>
                            
							<div class="col-lg-6">
								<div class="inp-field">
									<select class="form-control" name="time_id">
										<option disabled selected>Select Time...</option>
										@foreach($times as $ti)
                                                <option value="{{ $ti->id }}">{{ $ti->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
                            
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
                            
								<ul>
									<li><button class="active" type="submit" value="submit">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

<!--------------------------------------FIN FORMULARIO "POP UP" PARA TRABAJOS-------------------------------------------->

<!--------------------------------------------INICIO DE CAJAS DE CHAT---------------------------------------------------->


<!-------------------------------------------------PRIMERA CAJA---------------------------------------------------------->
		<div class="chatbox-list">
        
			<div class="chatbox">
				<div class="chat-mg">
					<a href="#" title=""><img src="images/resources/usr-img1.png" alt=""></a>
					<span>2</span>
				</div>
                
				<div class="conversation-box">
					<div class="con-title mg-3">
						<div class="chat-user-info">
							<img src="images/resources/us-img1.png" alt="">
							<h3>John Doe <span class="status-info"></span></h3>
						</div>
						<div class="st-icons">
							<a href="#" title=""><i class="la la-cog"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
						</div>
					</div>
					<div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
						<div class="date-nd">
							<span>Sunday, August 24</span>
						</div>
						<div class="chat-msg st2">
							<p>Cras ultricies ligula.</p>
							<span>5 minutes ago</span>
						</div>
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
					</div><!--chat-list end-->
					<div class="typing-msg">
						<form>
							<textarea placeholder="Type a message here"></textarea>
							<button type="submit"><i class="fa fa-send"></i></button>
						</form>
						<ul class="ft-options">
							<li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
							<li><a href="#" title=""><i class="la la-camera"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
						</ul>
					</div><!--typing-msg end-->
				</div><!--chat-history end-->
			</div>
            
<!---------------------------------------------FIN PRIMERA CAJA---------------------------------------------------------->            
            
<!-------------------------------------------------SEGUNDA CAJA---------------------------------------------------------->            
			<div class="chatbox">
				<div class="chat-mg">
					<a href="#" title=""><img src="images/resources/usr-img2.png" alt=""></a>
				</div>
				<div class="conversation-box">
					<div class="con-title mg-3">
						<div class="chat-user-info">
							<img src="images/resources/us-img1.png" alt="">
							<h3>John Doe <span class="status-info"></span></h3>
						</div>
						<div class="st-icons">
							<a href="#" title=""><i class="la la-cog"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
						</div>
					</div>
					<div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
						<div class="date-nd">
							<span>Sunday, August 24</span>
						</div>
						<div class="chat-msg st2">
							<p>Cras ultricies ligula.</p>
							<span>5 minutes ago</span>
						</div>
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
					</div><!--chat-list end-->
					<div class="typing-msg">
						<form>
							<textarea placeholder="Type a message here"></textarea>
							<button type="submit"><i class="fa fa-send"></i></button>
						</form>
						<ul class="ft-options">
							<li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
							<li><a href="#" title=""><i class="la la-camera"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
						</ul>
					</div><!--typing-msg end-->
				</div><!--chat-history end-->
			</div>
            
<!---------------------------------------------FIN SEGUNDA CAJA---------------------------------------------------------->


<!-------------------------------------------------TERCERA CAJA---------------------------------------------------------->       
			<div class="chatbox">
				<div class="chat-mg bx">
					<a href="#" title=""><img src="images/chat.png" alt=""></a>
					<span>2</span>
				</div>
				<div class="conversation-box">
					<div class="con-title">
						<h3>Messages</h3>
						<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
					</div>
					<div class="chat-list">
						<div class="conv-list active">
							<div class="usrr-pic">
								<img src="images/resources/usy1.png" alt="">
								<span class="active-status activee"></span>
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>1:55 PM</span>
							</div>
							<span class="msg-numbers">2</span>
						</div>
						<div class="conv-list">
							<div class="usrr-pic">
								<img src="images/resources/usy2.png" alt="">
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>11:39 PM</span>
							</div>
						</div>
						<div class="conv-list">
							<div class="usrr-pic">
								<img src="images/resources/usy3.png" alt="">
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>0.28 AM</span>
							</div>
						</div>
					</div><!--chat-list end-->
				</div><!--conversation-box end-->
			</div>
		</div><!--chatbox-list end-->
        
<!---------------------------------------------FIN TERCERA CAJA---------------------------------------------------------->        
<!--------------------------------------------FIN DE CAJAS DE CHAT------------------------------------------------------->

	</div><!--theme-layout end-->
    
<!---------------------------------------FIN DE LA SECCIÓN DE "CONTENIDO"----------------------------------------------->


<!--SECCIÓN JAVASCRIPT-->    
   
  
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script> 

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>

<script type="text/javascript">
		$(".tm-input").tagsManager();
</script>   
   
    
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


<!--FUNCIÓN PARA SELECCIONAR 'SKILS'-->  

    
    
    
<!--FIN DE LA FUNCIÓN 'SELECCIONAR SKILLS'-->

</script>
<!--FIN DE SECCIÓN JAVASCRIPT--> 


<!--LIBRERÍAS DE JAVASCRIPT-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--FIN DE LIBRERÍAS-->

</body>
</html>


