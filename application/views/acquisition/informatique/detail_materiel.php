<?php

//var_dump($materiel);
?>

<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                  <span> <i class="fa fa-globe"></i> <?= COMPANY_NAME ?></span>
                  <span style="float: right"> <i class="fa fa-globe"></i> <?= APP_NAME ?></span>
               
              </h2>
                <h2 style="text-indent: 25%"> Détail du matériel informatique </h2>
                <br><div style="text-indent: 350px"><h4>Numero de serie :<b> <?= $materiel->num_serie ?> </h4> </b></div>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
           <!-- /.col -->
            <!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            
                    <div class="col-md-12">
                
                
                <div id="2-action" class="box-body" style="display: block;">
                    <div id='ordinateur'>
                        
                        
                        <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="designation"> Caracteristiques de l'ordinateur </strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                <div id="2-action" class="box-body" style="display: block;">
                    <div class="box box-primary box-solid">    
                       <div class="box-header with-border">
                            <h3 class="box-title"><strong id="designation"> Description générale </strong> </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div><!-- /.box-tools -->
                        </div>
                        <div id="2-action" class="box-body" style="display: block;">
                        
                            <div class="form-group">
                                <label for="marque">Marque</label>
                                <input type="text" name="marque" id="marque" class="form-control" disabled=""  required="" placeholder="" 
                         
                                value="<?php  if (isset($materiel->caracteristique->marque)) {  echo $materiel->caracteristique->marque;
                                } else {
                                    echo '';
                                }
                                ?>">
                            </div>

                            <label for="type">Type</label>

                            <div id="ordinateur" class="row">
                                <div class="col-md-6">
                                    <input type="text" name="marque" id="type" class="form-control" disabled="" required="" placeholder="" 
                                 value="<?php  if (isset($materiel->caracteristique->type)) {  echo $materiel->caracteristique->type;
                                } else {
                                    echo '';
                                }
                                ?>">
                                           
                                    <div hidden="">
                                     <div class="col-md-3">
                                        <label for="oui">Desktop</label>
                                         <input type="radio"  class="radio-inline" name="type" value="desktop" />
                                    </div>

                                    <div class="col-md-3">
                                         <label for="non">Laptop</label>
                                         <input type="radio" class="radio-inline" name="type" id="laptop" value="laptop" />
                                    </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="box box-primary box-solid">    
                       <div class="box-header with-border">
                            <h3 class="box-title"><strong id="designation"> Spécifications techniques </strong> </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div><!-- /.box-tools -->
                        </div>
                        
                        <div id="2-action" class="box-body" style="display: block;">
                        <div class="form-group">
                            <label for="marque_processeur">Marque du processeur</label>
                            <input type="text" name="marque" id="marque_processeur" disabled="" required="" placeholder="" class="form-control" 
                                value="<?php  if (isset($materiel->caracteristique->marque_processeur)) {  echo $materiel->caracteristique->marque_processeur;
                                } else {
                                    echo '';
                                }
                                ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="frequence">Fréquence du processeur</label>
                            <input type="text" name="frequence" id="frequence" disabled="" class="form-control" 
                                value="<?php  if (isset($materiel->caracteristique->frequence)) {  echo $materiel->caracteristique->frequence;
                                } else {
                                    echo '';
                                }
                                ?>"
                                required="" placeholder="">
                        </div>
                       
                        <div class="form-group">
                            <label for="ram">RAM</label>
                            <input type="text" name="ram" id="ram" disabled="" class="form-control" 
                                   value="<?php  if (isset($materiel->caracteristique->ram)) {  echo $materiel->caracteristique->ram;
                                } else {
                                    echo '';
                                }
                                ?>"
                              required="" placeholder="">
                        </div>
                        
                        <div class="form-group">
                            <label for="disque_dur">Disque dur</label>
                            <input type="text" name="disque_dur" disabled="" id="disque_dur" class="form-control" 
                                value="<?php  if (isset($materiel->caracteristique->disque_dur)) {  echo $materiel->caracteristique->disque_dur;
                                } else {
                                    echo '';
                                }
                                ?>"
                            required="" placeholder="">
                        </div>
                    </div>
                    </div>
                        
                    <div class="box box-info box-solid" id="moniteur" >    
                       <div class="box-header with-border">
                            <h3 class="box-title"><strong > Moniteur </strong> </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div><!-- /.box-tools -->
                        </div>
                        <div  class="box-body" style="display: block;">
                       <div class="form-group">
                            <label for="marque_moniteur">Marque du moniteur</label>
                            <input type="text" name="marque_moniteur" disabled="" id="marque_moniteur" class="form-control" 
                                value="<?php  if (isset($materiel->caracteristique->marque_moniteur)) {  echo $materiel->caracteristique->marque_moniteur;
                                } else {
                                    echo '';
                                }
                                ?>"
                              required="" placeholder="">
                        </div>
                        
                        <div class="form-group">
                            <label for="num_serie_moniteur">Numero de série du moniteur</label>
                            <input type="text" name="num_serie_moniteur" disabled="" id="num_serie_moniteur" class="form-control" required="" placeholder=""  
                                value="<?php  if (isset($materiel->caracteristique->num_serie_moniteur)) {  echo $materiel->caracteristique->num_serie_moniteur;
                                } else {
                                    echo '';
                                }
                                ?>">
                        </div>
                       
                    </div>
                        
                         <td><a href="<?= site_url("acquisition/detail_materiel_modif")?>?id=<?= $materiel->id?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin"> Modifier</button></a></td>

                    </div>
                 
                </div><!-- /.box-body -->
              </div>                       
                    </div>
                   
                </div><!-- /.box-body -->
              </div><!-- /.box -->
    </div>
            <div class="row">
            <!-- accepted payments column -->
          
            
            </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          
    </section>

