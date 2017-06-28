<script>
    $(document).ready(function(){
        $(document).ready(function() {  
            $('#designation').change(function(){
                choix = $(this).find("option:selected").attr('value');    
                switch(choix){
                    case "ordinateur":
                        data = {designation:"ordinateur"};
                        $.get('ajax',data,function(data,status){
                                
                                $("#caracteristique_des").empty().append(data);console.log(data);
                            });
                        break;
                    case "imprimante":
                        data = {designation:"imprimante"};
                        $.get('ajax',data,function(data,status){
                                
                                $("#caracteristique_des").empty().append(data);console.log(data);
                            });
                        break;
                }
            });
        });
    });
</script>


<div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="titre_for_per">Materiel informatique</strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                
            <div id="formulaire-perso" class="box-body" style="display: block;">
                <div class="form-group">
                    <label for="designation">Désignation</label> <br>
                    <!--<input name="designation" id="designation" list="designation" />-->
                    
                    <select name="designation" id="designation">
                        <option value="--">-- selectionne --</option>
                        <option value="ordinateur">Ordinateur</option>
                        <option value="imprimante">Imprimante</option>
                    </select>
                
                </div>
                
                <div class="form-group">
                    <label for="numero_serie">Numéro de série</label>
                    <input type="text" name="numero_serie" id="numero_serie" class="form-control"  required="" placeholder="numéro série">
                </div>
            
                <div id="caracteristique_des"></div>
            
            <!-- /.box -->
                       
            </div><!-- /.box-body -->
                
</div>
