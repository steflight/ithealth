<script>
    $(document).ready(function(){
        $("#moniteur").hide();
        $('input[name=type]').change(function(){
            if($(this).val() === "desktop")
            {
                $("#moniteur").show();
            }
            else
            {
                $("#moniteur").hide();
            }
        });
    });
</script>
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
                                <input type="text" name="marque" id="marque" class="form-control"  required="" placeholder="">
                            </div>

                            <label for="type">Type</label>

                            <div id="ordinateur" class="row">
                                <div class="col-md-6">
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
                            <input type="text" name="marque" id="marque_processeur" class="form-control"  required="" placeholder="" >
                        </div>
                        
                        <div class="form-group">
                            <label for="frequence">Fréquence du processeur</label>
                            <input type="text" name="frequence" id="frequence" class="form-control"  required="" placeholder="">
                        </div>
                       
                        <div class="form-group">
                            <label for="ram">RAM</label>
                            <input type="text" name="ram" id="ram" class="form-control"  required="" placeholder="">
                        </div>
                        
                        <div class="form-group">
                            <label for="disque_dur">Disque dur</label>
                            <input type="text" name="disque_dur" id="disque_dur" class="form-control"  required="" placeholder="">
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
                            <input type="text" name="marque_moniteur" id="marque_moniteur" class="form-control"  required="" placeholder="">
                        </div>
                        
                        <div class="form-group">
                            <label for="num_serie_moniteur">Numero de série du moniteur</label>
                            <input type="text" name="num_serie_moniteur" id="num_serie_moniteur" class="form-control"  required="" placeholder="">
                        </div>
                       
                    </div>
                    </div>
                 
                </div><!-- /.box-body -->
              </div>