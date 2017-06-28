<div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="designation"> Détail sur l'imprimante </strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                <div id="2-action" class="box-body" style="display: block;">
                    <div>
                        <div class="form-group">
                            <label for="marque">Marque</label>
                            <input type="text" name="marque" id="marque" class="form-control"  required="" placeholder="">
                        </div>
                        
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" name="model" id="model" class="form-control"  required="" placeholder="">
                        </div>
                        
                        
                        <div id="imprimante" class="row">
                            <div class="col-md-6">
                                <!--definitionn de couleur--> 
                                <label for="oui">Format de couleur</label>
                                <div class="col-md-3">
                                    <label for="noir_blanc">Noir sur blanc</label>
                                    <input type="radio" checked="" class="radio-inline" name="type_couleur" id="noir_blanc" value="Noir sur blanc" />
                                </div>

                                <div class="col-md-3">
                                     <label for="couleur">Couleur</label>
                                     <input type="radio" class="radio-inline" name="type_couleur" id="couleur" value="couleur" />
                                </div>
                                <!--fin de definition de couleur-->
                                
                                
                                <!--format d'impression-->
                                
                                <label for="oui">Format d'impression</label>
                                <div class="col-md-3">
                                     <label for="non">A0</label>
                                     <input type="checkbox" class="radio-inline" name="type_format" id="a0" value="A0" />
                                </div>
                                <div class="col-md-3">
                                     <label for="non">A3</label>
                                     <input type="checkbox" class="radio-inline" name="type_format" id="a3" value="A3" />
                                </div>
                                <div class="col-md-3">
                                     <label for="non">A4</label>
                                     <input type="checkbox" class="radio-inline" name="type_format" id="a4" value="A4" />
                                </div>
                                
                                <!--fin format d'impression-->
                                
                            </div>
                        </div>
                        
                    </div>
          
                </div><!-- /.box-body -->
              </div>






