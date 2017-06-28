<section class="invoice"> 
<!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                  <span> <i class="fa fa-globe"></i> <?= COMPANY_NAME ?></span>
                  <span style="float: right"> <i class="fa fa-globe"></i> <?= APP_NAME ?></span>
               
              </h2>
                <h2 style="text-indent: 25%"> Détail du matériel de bureau </h2>
                <br><div style="text-indent: 350px"><h4>Numero de serie :<b> <?= $materiel->num_serie ?> </h4>  </b></div>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
           <!-- /.col -->
            <!-- /.col -->
          </div><!-- /.row -->
<div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="titre_for_per"> Materiel de bureau </strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                   
        <div id="formulaire-perso" class="box-body" style="display: block;">
            
            <div class="form-group" hidden="">
                <label for="designation">Designation</label> <br> 
                <input name="designation" id="designation" list="designation" class="select2" value="bureau" >                  
            </div>
            
            <div class="form-group">
                <label for="type">Designation</label> <br> 
                <input name="type" id="type" list="type" class="select2"
                        value="<?php  if (isset($materiel->caracteristique->type)) {  echo $materiel->caracteristique->type;
                                } else {
                                    echo '';
                                }
                                ?>"
                >                  
            </div>
            
           
                    
            <div class="form-group">
                <label for="num_serie">numéro de serie</label>
                <input type="text" name="num_serie" id="num_serie" class="form-control"  required="" placeholder="numéro de série"
                        value="<?php  if (isset($materiel->num_serie)) {  echo $materiel->num_serie;
                                } else {
                                    echo '';
                                }
                                ?>">
            </div>
            
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="designation"> Caracteristiques </strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                <div id="2-action" class="box-body" style="display: block;">
                    <div>
                        <div class="form-group">
                            <label for="num_serie">Fabriquant</label>
                            <input type="text" name="fabriquant" id="fabriquant" class="form-control"  required="" placeholder="fabriquant"
                                    value="<?php  if (isset($materiel->caracteristique->fabriquant)) {  echo $materiel->caracteristique->fabriquant;
                                } else {
                                    echo '';
                                }
                                ?>">
                        </div>
                       
                        <div class="form-group">
                            <label for="type">Description</label>
                            <input type="text" name="description" id="description" class="form-control"  required="" placeholder="description"
                                    value="<?php  if (isset($materiel->caracteristique->description)) {  echo $materiel->caracteristique->description;
                                } else {
                                    echo '';
                                }
                                ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="capacite">Capacité (Nombre de Places)</label>
                            <input type="number" name="capacite" id="nbr_place" class="form-control"  required="" placeholder="capacite"
                                    value="<?php  if (isset($materiel->caracteristique->nbr_place)) {  echo $materiel->caracteristique->nbr_place;
                                } else {
                                    echo '';
                                }
                                ?>">
                        </div>
                      
                    </div>
          
                </div><!-- /.box-body -->
              </div>
                       
                </div><!-- /.box-body -->
            </div>
            </section>
             