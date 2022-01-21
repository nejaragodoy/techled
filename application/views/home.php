<div class="hidden-xs" style="width: 10%; height: 200px; position: absolute; top:0px; right:0%;">
    <a href="#presupuesto" id="presupuesto-btn" >
        <img  class="img-responsive" src="<?php echo base_url();?>/assets/images/boton_presupuestos_online.png"/>
    </a>
</div>
<section style="background: #222;" class="visible-xs">
    <div class="container">
        <div class="col-lg-10 col-lg-push-1">
                 <div class="navbar-header navbar-inverse">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  
                  </div>
                  <div class="navbar-collapse collapse navbar-inverse">
                    <ul class="nav navbar-nav">
                     <li class="<?php if($seccion_active == "reparacion-de-abolladuras"){echo "active";}?>"><a href="<?php echo base_url()."reparacion-de-abolladuras";?>">Reparaci&oacute;n de abolladuras</a></li>
                     <li class="<?php if($seccion_active == "reparacion-de-pintura"){echo "active";}?>"><a href="<?php echo base_url()."reparacion-de-pintura";?>">Reparaci&oacute;n de pintura</a></li>
                     <li class="<?php if($seccion_active == "restauracion-de-llantas"){echo "active";}?>"><a href="<?php echo base_url()."restauracion-de-llantas";?>">Restauraci&oacute;n de llantas</a></li>
                     <li class="<?php if($seccion_active == "restauracion-de-opticas"){echo "active";}?>"><a href="<?php echo base_url()."restauracion-de-opticas";?>">Restauraci&oacute;n de &oacute;pticas</a></li>
                     <li class="<?php if($seccion_active == "otros-servicios"){echo "active";}?>"><a href="<?php echo base_url()."otros-servicios";?>">Otros servicios</a></li>
                    </ul>
                   <ul class="nav navbar-nav navbar-right">
                     <li class="<?php if($seccion_active == "3m"){echo "active";}?>"><a href="<?php echo base_url()."3m";?>">3M</a></li>
                     <li class="<?php if($seccion_active == "glasurit"){echo "active";}?>"><a href="<?php echo base_url()."glasurit";?>">Glasurit</a></li>
                   </ul>
                  </div><!--/.nav-collapse -->
                
        </div>
    </div>
</section>
    <div class="container">
            <div class="row">
                 
    
                
                <div class="col-lg-10 col-lg-push-1">
                    <p class="text-center">
                        <a href="<?php echo base_url()."empresa";?>">
                            <img style="margin: 10px auto;margin-top: 20px;" class="img-responsive" src="<?php echo base_url();?>/assets/images/logo_spot.jpg">
                        </a>
                    </p><br>
                </div>

            </div>   
           
        </div>
        <!-- /.container -->

   
    <div class="section section-cololightgray" style="padding: 0px; padding-bottom: 20px;"  >
      
        <div class="col-md-2 col-sm-2 col-xs-2 hidden-sm hidden-xs" style=" top:10px; padding: 0px;">
                    <div class="col-md-12" style="    padding: 0px;">
                      
                        <div class="col-lg-4" style="    padding: 0px;">
                            <img class="img-responsive" width="106" height="165" src="<?php echo base_url();?>/assets/images/banda_sup_botones_marcas.png" style="margin-bottom: 5px; margin-top: 40px;"><br>
                        </div>   
                        <div class="col-lg-8">
                            <a href="<?php echo base_url()."3m";?>" class="spot-3m  <?php if($seccion_active == "3m"){echo "active-3m";}?>"> </a><br>
                            <a href="<?php echo base_url()."glasurit";?>" class="spot-glasurit <?php if($seccion_active == "glasurit"){echo "active-glasurit";}?>" ></a>
                        </div>   
                      
                        
                    </div>
        </div>
        <div class="container hidden-xs">
            <div class="row">


               <ul class="ch-grid">
                   <li>    <a href="<?php echo base_url()."reparacion-de-abolladuras";?>">
                       
                                <div class="ch-item ch-img-1">
                                        <div class="ch-info <?php if($seccion_active == "reparacion-de-abolladuras"){echo "active-item";}?>">
                                               <h3>Reparaci&oacute;n<br> de abolladuras</h3>
                                              
                                        </div>
                                </div>
                            Reparaci&oacute;n de abolladuras
                           </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."reparacion-de-pintura";?>">
                                <div class="ch-item ch-img-2">
                                        <div class="ch-info <?php if($seccion_active == "reparacion-de-pintura"){echo "active-item";}?>">
                                            <h3>Reparaci&oacute;n<br> de pintura</h3>
                                             
                                        </div>
                                </div>
                               Reparaci&oacute;n de pintura
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."restauracion-de-llantas";?>">
                                <div class="ch-item ch-img-3">
                                        <div class="ch-info <?php if($seccion_active == "restauracion-de-llantas"){echo "active-item";}?>">
                                                <h3>Restauraci&oacute;n <br>de llantas</h3>
                                               
                                        </div>
                                </div>
                                Restauraci&oacute;n de llantas
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."restauracion-de-opticas";?>">
                                <div class="ch-item ch-img-4">
                                        <div class="ch-info <?php if($seccion_active == "restauracion-de-opticas"){echo "active-item";}?>">
                                                <h3>Restauraci&oacute;n <br>de &oacute;pticas</h3>
                                               
                                        </div>
                                </div>
                                Restauraci&oacute;n de &oacute;pticas
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."otros-servicios";?>">
                                <div class="ch-item ch-img-5">
                                        <div class="ch-info <?php if($seccion_active == "otros-servicios"){echo "active-item";}?>">
                                                <h3>Otros <br>Servicios </h3>
                                              
                                        </div>
                                </div>
                                Otros<br class="hidden-md visible-sm"> servicios
                            </a>
                        </li>
                </ul>
               
            </div>
           
        </div>
       
    </div>
    <div class="section section-coloryellow" style='padding-top: 0px ; padding-bottom: 49px;'  >
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-lg-push-1 " >
                   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="position: relative;">
                        <!-- Indicators -->
                        <ol class="carousel-indicators" style="left: 66%; text-align: right;">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                              <img class="img-responsive" src="<?php echo $banner_1;?>">
                            
                          </div>
                          <div class="item">
                           <img class="img-responsive" src="<?php echo $banner_2;?>" />
                            
                          </div>
                          <div class="item">
                           <img class="img-responsive"  src="<?php echo $banner_3;?>" />
                            
                          </div>
                         
                        </div>

                    </div>
                </div>
                
                     

            </div>
           
        </div>
       
    </div>

   

    <div class="section " style="padding:0px;" >

        <div class="container">

            <div class="row" >
               
                   
                        <?php if($seccion_active == 'otros-servicios'){
                         ?>
                        <div class="col-lg-10 col-lg-push-1 "  >
                            <p class="text-center" style="margin-top:-50px; margin-bottom: 40px;">
                                <img class="img-responsive"  style="" src="<?php echo $img_seccion;?>" >
                           </p>

                             <ul class="nav nav-tabs" >
                              <li class="active"><a href="#acrilico" data-toggle="tab">Tratamiento Acrilico</a></li>
                              <li><a href="#protector" data-toggle="tab">Protector Anti-chip</a></li>
                              <li><a href="#lustre" data-toggle="tab">Lustre y Pulido</a></li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="acrilico">    <p  style="width:101%;" ><img class="img-responsive"  style="" src="<?php echo $img_contenido_1;?>" ></p></div>
                                <div class="tab-pane" id="protector">    <p  style="width:101%;" ><img class="img-responsive"  style="" src="<?php echo $img_contenido_2;?>" ></p></div>
                                <div class="tab-pane" id="lustre">    <p  style="width:101%;" ><img class="img-responsive"  style="" src="<?php echo $img_contenido_3;?>" ></p></div>

                            </div>


                             <p style="margin-bottom:-50px;">
                                <iframe width="100%" height="456"src="//www.youtube-nocookie.com/embed/TzShBTZdnAc"  frameborder="0" allowfullscreen></iframe>
                           </p>
                        </div>
                        <?php
                        } else if($seccion_active == "empresa"){
                        ?>
                        <div class="col-lg-10 col-lg-push-1 "  >
                               <p class="text-center" style="margin-top:-50px; margin-bottom: 40px;">
                                    <img class="img-responsive"  style="" src="<?php echo $img_seccion;?>" >
                               </p>
                                <p  style="width:101%;" >
                                  <img class="img-responsive"  style="" src="<?php echo $img_contenido;?>" >
                                </p>
                        </div>
                        <div class="col-lg-10 col-lg-push-1" style="    padding-left: 35px;    padding-right: 49px;">
                        <div class="panel panel-default">
                        <div class="panel-body " style="padding: 0px;">

                              <div class="col-lg-4">

                                    <h3 class="t-spot">  CONSULTA ONLINE:</h3>
                                    <p>
                                        Hace tus consultas aqu&iacute;
                                    </p>
                                </div>

                            <div class="col-lg-8  " style=" padding-left: 0px;   padding-right: 0px;">

                                <div class="col-lg-12 section-cololightgray formulario" style="padding:25px 10px 10px 10px;">
                                    <form style="padding: 0px 10px" action="<?php echo base_url()."envio/mail.php"?>" method="POST" enctype="multipart/form-data">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                        <label for="nombre">Nombre y Apellido</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre"  required placeholder="Nombre">
                                      </div> 
                                       <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"  required  placeholder="Email">
                                      </div> 
                                       <div class="form-group">
                                        <label for="teelefono">Tel&eacute;fono</label>
                                        <input type="text" class="form-control" name="telefono" id="telefono"     placeholder="Tel&eacute;fono">
                                      </div> 
                                       <div class="form-group">
                                        <label for="localidad">Localidad</label>
                                        <input type="text" class="form-control" name="localidad" id="localidad"    placeholder="Localidad">
                                      </div> 
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label for="comentario">Comentario</label>
                                            <textarea  class="form-control" name="comentario" id="comentario" required  style="resize: none;" rows="6"></textarea>
                                            </div> 
                                         
                                            <div class="form-group col-lg-2 col-lg-offset-8 col-md-offset-11">
                                                <input type="hidden" name="Enviar" value="Enviar"/>
                                                <input type="hidden" name="consulta" value="consulta"/>
                                                <button type="submit" class=" btn-spot ">Enviar</button>
                                            </div> 
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                      </div>
                    </div>
                        <div class="col-lg-10 col-lg-push-1 "  >
                                         <p style="margin-bottom:-50px;">
                              <iframe width="100%" height="456"src="//www.youtube-nocookie.com/embed/TzShBTZdnAc" frameborder="0" allowfullscreen></iframe>
                          </p>
                        </div>
                
                     <?php
                     }
                     else{
                     ?>
                    <div class="col-lg-10 col-lg-push-1 "  >
                         <p class="text-center" style="margin-top:-50px; margin-bottom: 40px;">
                             <img class="img-responsive"  style="" src="<?php echo $img_seccion;?>" >
                        </p>
                        
                         <div class="row"><?php echo $contenido;?></div>

                         
                      
                        <p style="margin-bottom:-50px;">
                        <iframe width="100%" height="456" src="//www.youtube-nocookie.com/embed/TzShBTZdnAc" frameborder="0" allowfullscreen></iframe>
                        </p>
                     </div>
                    <?php
                        }
                       
                        ?>
                    </div>
                
                
               
            
            </div>
            
            <!-- /.row -->

        </div>
       
        <!-- /.container -->

    </div>
    <!-- /.section -->
    
    

  
    <!-- /.section -->
    <div class="section-coloryellow text-center">

			<div class="container">

				<div class="row">
									<div class="col-lg-10 col-lg-push-1" style="    padding-left: 35px;    padding-right: 49px; margin-top: 51px;">
					   
						<p>
							<img class="img-responsive  hidden-xs" style="margin: 16px 0px 0px 0px;" src="<?php echo base_url();?>/assets/images/img_porque_elegir.jpg">                
						</p>
					   
					  <div class="row">
						<div class="col-md-12 cajax3" style="margin: 23px 0px 0px 0px;">
														
							<div class="col-lg-3 col-sm-3 col-xs-12 caja-gris1">
					   
								<img src="<?php echo base_url();?>/assets/images/tick.png" alt="">
								
								<h2>CALIDAD EN<br> LA TERMINACIÓN</h2>
								
								<p>Trabajamos con<br> concesionarias 0KM.</p>
								
							</div>
					   
							<div class="col-lg-3 col-sm-3 col-xs-12 caja-amarilla1">
					   
								<img src="<?php echo base_url();?>/assets/images/reloj.png" alt="">
						 
								 <h2>VELOCIDAD EN<br> LA REPARACIÓN</h2>
								 <p>Contamos con<br> personal capacitado.</p>
					   
					   
							</div>
					   
							<div class="col-lg-3 col-sm-3 col-xs-12 caja-gris1">
					   
								<img src="<?php echo base_url();?>/assets/images/pesos.png" alt="">
						
								 <h2>TRANSPARENCIA<br> EN LOS COSTOS</h2>
								 <p>No hay sorpresas en<br> nuestros presupuestos.</p>
							</div>
					   
							<div class="col-lg-3 col-sm-3 col-xs-12 caja-amarilla2">
						
								<img src="<?php echo base_url();?>/assets/images/gps.png" alt="">
						 
								 <h2>VENÍ A<br> SPOT SERVICE  </h2>
								 <p>Y devolvele el valor<br> original a tu auto.</p>
					   </div>
				  </div>
					   
					  </div>
					  
					 </div>
				
				<!-- /.row -->
				</div>
			</div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <div class="section" style="padding-top:20px;">

        <div class="container">

            <div class="row">
                
                <div class="col-lg-10 col-lg-push-1 " >
                    <br>
                   <p class="box-padding-left box-padding-right " style="margin:0px;">
                            <img class="img-responsive hidden-xs"  style="margin:0 auto;" src="<?php echo base_url();?>/assets/images/img_detalle.jpg" >
                            <img class="img-responsive hidden-md visible-xs"  style="margin:0 auto;" src="<?php echo base_url();?>/assets/images/img_detalle_vertical.jpg" >
                   
                    </p>
                </div>

                <div class="col-lg-10 col-lg-push-1" id="presupuesto"><p><br></p></div>
                <div class="col-lg-10 col-lg-push-1" style="    padding-left: 35px;    padding-right: 49px;">
                    <div class="panel panel-default">
                    <div class="panel-body " style="padding: 0px;">
                      
                          <div class="col-lg-4">
                    
                                <h3 class="t-spot">  PRESUPUESTO ONLINE:</h3>
                                <p>
                                    Solicit&aacute; una cotizaci&oacute;n por la <br>reparaci&oacute;n en 3 simples pasos:<br>
                                    <br>
                                    &middot; Complet&aacute; el <strong>formulario</strong>.<br><br>
                                    &middot; Sac&aacute; una <strong>foto</strong> del detalle a reparar en tu auto<br><br>
                                    &middot; <strong>Envianos</strong> la imagen adjunta  en el formulario.
                                </p>
                            </div>
                        
                        <div class="col-lg-8  " style="   padding-left: 0px; padding-right: 0px;">
                   
                            <div class="col-lg-12 section-cololightgray formulario" style="padding:25px 10px 10px 10px;">
                                <form style="padding: 0px 10px" action="<?php echo base_url()."envio/mail.php"?>" method="POST" enctype="multipart/form-data">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                    <label for="nombre">Nombre y Apellido</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"  required placeholder="Nombre">
                                  </div> 
                                   <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"  required  placeholder="Email">
                                  </div> 
                                   <div class="form-group">
                                    <label for="teelefono">Tel&eacute;fono</label>
                                    <input type="text" class="form-control" name="telefono" id="telefono"     placeholder="Tel&eacute;fono">
                                  </div> 
                                   <div class="form-group">
                                    <label for="localidad">Localidad</label>
                                    <input type="text" class="form-control" name="localidad" id="localidad"    placeholder="Localidad">
                                  </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label for="comentario">Comentario</label>
                                        <textarea  class="form-control" name="comentario" id="comentario" required  style="resize: none;" rows="6"></textarea>
                                        </div> 
                                        <div class="form-group">
										<p>Formato aceptado: JPG &uacutenicamente: </p>
                                            <label for="imagen"><i class="glyphicon glyphicon-camera"></i> Subir Imagen</label>
                                        <input type="file" name="file" id="imagen" style="font-size: 0.82em;width: 99%;"/>
                                        </div> 
                                         <div class="form-group col-lg-2 col-lg-offset-8 col-md-offset-11">
                                            <input type="hidden" name="Enviar" value="Enviar"/>
                                            <button type="submit" class=" btn-spot">Enviar</button>
                                        </div> 
                                    </div>
                                </form>

                            </div>
                        </div>
                        
                        
                    </div>
                  </div>
                </div>
                
              
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="section-colored footer" >

        <div class="container">

            <div class="row">
                <div class="col-lg-10 col-lg-push-1">
                    
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2>Servicios</h2>
                    <ul class="servicios">
                        <li><a href="<?php echo base_url()."reparacion-de-abolladuras"?>"><strong> REPARACI&Oacute;N<br> DE ABOLLADURAS</strong> <br> Un trabajo con excelente terminaci&oacute;n</a></li>
                        <li><a href="<?php echo base_url()."reparacion-de-pintura"?>"><strong>ARREGLOS DE PINTURA</strong> <br> El resultado es identico al original</a></li>
                        <li><a href="<?php echo base_url()."restauracion-de-opticas"?>"><strong>LIMPIEZA DE &Oacute;PTICAS</strong> <br> Se realiza sin quitarlas del veh&iacute;culo</a></li>
                        <li><a href="<?php echo base_url()."restauracion-de-llantas"?>"><strong>RASPONES EN LLANTAS</strong> <br> Se restauran las llantas de aleaci&oacute;n</a></li>
                        <li><a href="<?php echo base_url()."otros-servicios"?>"><strong>OTROS SERVICIOS</strong> </a></li>
                      
                        
                    </ul>
<!--                    <p><a href="#" class="btn-promo btn-spot"> Promociones </a></p>-->
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4">
                    <h2>Contacto</h2>
                     
                     <img  class="img-responsive" src="<?php echo base_url()."assets/images/mapa.jpg"?>"/>
                </div>
                 <div class="col-lg-3 col-md-4 col-sm-4">
                   
                    <ul class="spot-info">
                        <h3> Spot Service: </h3>
                        <li>Urquiza 575, Vicente Lopez,<br>Pcia. Buenos Aires. </li>
                        <li>Tel.: <strong>(011) 4796 - 4176</strong></li>
                        <li>Mail: <strong>info@spotservice.com.ar</strong></li>
                       
                        <li>Reservas Online:<br> <strong>reservas@spotservice.com.ar</strong></li>
                        <li><a href="<?php echo base_url()."empresa"?>" class="masinfo">+ m&aacute;s info</a></li>
                        <li class="social-items">
                          
                            <br>
                            <br>
                            <br>
                                <span style="float:left;margin-top: 2px; margin-right: 10px;">
                                    <a href="https://www.facebook.com/pages/Spot-Service/1407283452867925"  id="fb"><i class="fa fa-facebook-square fa-2x"></i></a>
                                    
                                </span>
                           
                                <span>
                                <a href="https://www.youtube.com/channel/UCqYMiqH1tcpY42S2t1t9wUg/" id="ytube">
                                    <i class="fa fa-youtube fa-2x"></i>
                                </a>
                                </span>
                            
                        </li>
                      
                    </ul>
                </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

