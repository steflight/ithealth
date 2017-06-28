
<?php include("acquisition_js.php"); ?>
<div class="row">
   
<div class="col-md-12">

<div class="box box-primary">
    <div class="box-header with-border">
        <div class="">
            <h3 class="box-title"> Nouvelle approvisionnement </h3><br>

            <i><i class="fa fa-info"></i><strong>-</strong><?= $this->session->userdata('message') ?></i>
         </div>
        
        <div id="confirm_mess" class="callout callout-info">
                    <h4>Votre attention svp</h4>
                    <p>Veuillez relire les informations que vous avez entré.<br>
                    Il est possible que vous ayez laissé passé une erreur</p>
        </div>
        
        
    </div><!-- /.box-header -->
    <!-- form start -->
    
    <div class="box-body" style="">
            <div class="col-md-9" id='choix'>
                <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong > Veuillez choisir le groupe </strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                 <?php foreach ($groupe as $group) : ?>
                <button class="btn-primary categorie" style="padding: 5px" data-name="<?= $group->designation ?>" value="<?= $group->designation ?>"><?= $group->designation ?></button>
                 <?php endforeach; ?>
                
                </div>
            </div>
            
            <script>
                
                function perso_form(group)
                {
                    $("#titre_for_per").text(group);
                    $("#formulaire-per").show();
                    //$("#groupe").te
                   
                    var groupeee = group;
                            
                    switch(group){
                        case "parc informatique et bureautique":
                            data = {groupe:"informatique"};
                            $.get('ajax',data,function(data,status){
                                
                                $("#formulaire-per").text("").append(data);
                                
                                console.log(data.reponse);
                            },'json');
                            
                            break;
                        case "parc automobile":
                             data = {groupe:"automobile"};
                              $.get('ajax',data,function(data,status){
                                  
                                  $("#formulaire-per").text("").append(data);console.log(data);
                              });
                           
                            break;
                        case "mobilier de bureau":
                            data = {groupe:"bureau"};
                              $.get('ajax',data,function(data,status){$("#formulaire-per").text("").append(data);console.log(data);});
                            
                            break;
                    }
                    
                }
                
                // au charge de la page
                
                $(document).ready(function(){
                    
                });
                   var groupe = $(".categorie");
                   var formulaire_perso = $("#formulaire-perso");
                   
                   groupe.click(function(){
                        group = $(this).attr("data-name");
                        $("#choix").hide();
                        perso_form(group);
                 
                   
                   });
                </script>
                
            <!--debut formulaire personnalise-->
            <div id="formulaire-per" class="col-md-12">
                
            <!-- /.box -->
            </div>
            
            <div style="background: #ebebae;position: relative;left: 30%;top: 50%" id="message" class="col-md-4">
                veuillez relire et confirmer 
            </div>
              
            <!--fin de formulaire personalisé-->
            
        </div><!-- /.box-body -->
        <div class="form-group">
                <label for="motif">Voulez vous ajouter un matériel ?</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-3">
                            <label for="oui">Oui</label>
                            <input type="radio" checked="" class="radio-inline" name="continuez" value="oui" />
                        </div>
                        
                        <div class="col-md-3">
                             <label for="non">Non</label>
                             <input type="radio" class="radio-inline" name="continuez" id="non" value="non" />
                        </div>
                    </div>
                </div>
                
            </div>
        
        <div class="box-footer">
            
            <button  type="submit" data-action="enregistrer" class="btn btn-primary">Enregistre</button>
            <button   data-action="annule" class="btn btn-primary" >Annuler</button>
        </div>
    
</div>
</div>
</div>
<!-- /.box -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/acquisition.js"></script>
