<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                  <span> <i class="fa fa-globe"></i> <?= COMPANY_NAME ?></span>
                  <span style="float: right"> <i class="fa fa-globe"></i> <?= APP_NAME ?></span>
               
              </h2>
                <h2 style="text-indent: 25%"> Détail du matériel automobile </h2>
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
                    <h3 class="box-title"><strong id="titre_for_per"> Materiel automobile</strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                
                <div id="formulaire-perso" class="box-body" style="display: block;">
                    <div class="form-group">
                <label for="designation">Designation du materiel</label> <br>
                
                <input name="designation" id="designation" type="text" value="automobile" disabled="" >
                            
            </div>
            <div class="form-group">
                <label for="num_serie">numéro de chassi</label>
                <input type="text" name="num_chassi" id="numero_serie" class="form-control"  required="" placeholder="numéro série" disabled=""
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
                            <label for="marque">Marque</label>
                            <input type="text" name="marque" id="marque" class="form-control"  required="" placeholder="Marque" disabled=""
                                    value="<?php  if (isset($materiel->caracteristique->marque)) {  echo $materiel->caracteristique->marque;
                                } else {
                                    echo '';
                                }
                                ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="type">Vitesse</label>
                            <input type="text" name="vitesse" id="vitesse" class="form-control"  required="" placeholder="Vitesse" disabled=""
                                    value="<?php  if (isset($materiel->caracteristique->vitesse)) {  echo $materiel->caracteristique->vitesse;
                                } else {
                                    echo '';
                                }
                                ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="type">Nombre de Places</label>
                            <input type="text" name="nbr_place" id="nbr_place" class="form-control" disabled="" required="" name="nbr_place" placeholder="nombre de place"
                                    value="<?php  if (isset($materiel->caracteristique->nbr_place)) {  echo $materiel->caracteristique->nbr_place;
                                } else {
                                    echo '';
                                }
                                ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="type">Couleur</label>
                            <input type="text" name="couleur" id="couleur" class="form-control"  required="" placeholder="couleur" disabled=""
                                    value="<?php  if (isset($materiel->caracteristique->couleur)) {  echo $materiel->caracteristique->couleur;
                                } else {
                                    echo '';
                                }
                                ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="type">Type de Moteur</label>
                            <input type="text" name="type_moteur" id="type_moteur" class="form-control"  required="" placeholder="type de moteur" disabled=""
                                    value="<?php  if (isset($materiel->caracteristique->type_moteur)) {  echo $materiel->caracteristique->type_moteur;
                                } else {
                                    echo '';
                                }
                                ?>">
                        </div>
                       
                    </div>
          
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                       
                </div><!-- /.box-body -->
                 <td><a href="<?= site_url("acquisition/detail_materiel_modif")?>?id=<?= $materiel->id?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin"> Modifier</button></a></td>

                
              </div>
            
             </section>
            
             