
<?php
   
?>
<script type="text/javascript">
    
    
    var url = "<?= site_url("maniement/maj_demande") ?>";
    var url_an = "<?= site_url("maniement/detail_demande") ?>";
    
    var url_inventaire = "<?= site_url("maniement/get_inventaire")?>?inventaire=souris";
    var data ;
    var valeur_dispo ;
    var id_demande, value,id,name,qte_accorde,qte_disponible,classe;
 
    $(document).ready(function (){
        $("#message-mod").hide(0);
        $("td[contenteditable=true]").focus(function(){
             valeur_actuel =  $(this).text();
        });
        
        $("td[contenteditable=true]").blur(function(){
            
            id = $(this).attr("data-id");
            name = $(this).attr("data-name");
            value = $(this).text();
            qte_disponible = $(this).attr("data-disponible");
          
            id_demande_c = Number($("#id_demande").text());
            value = Number($(this).text());
            
            if(name === "quantite_accorde")
            {
                qte_disponible = $(this).attr("data-disponible");
                
                qte_disponible = Number($(this).attr("data-disponible"));
                
                if(value > qte_disponible )
                {
                    $("#message-mod").text("la quantite accordée est inferieure à la quantité disponible");
                   
                    $("#message-mod").slideDown(300).delay(2000).fadeOut(300);
                }
                else
                {
                    id_demande = $(this).attr("id");

                    var data = {id:id,name:name,value:value,id_demande:id_demande_c }; 

                    var posting = $.post( url, data);
                    posting.done(function(dat){
                        console.log(data);
                        $.post(url_inventaire);
                        $("#message-mod").text("enregistrement effectué avec succès");
                      $("#message-mod").slideDown(300).delay(2000).fadeOut(300);
                    });
                }
            }
            else
            {
                id_demande = $(this).attr("id");

                    var data = {id:id,name:name,value:value }; 

                    var posting = $.post( url, data);
                    posting.done(function(dat){
                        console.log(data);
                        
                        //id_demande.text(data.value);
                        $("#message-mod").text("enregistrement effectué avec succès");
                        $("#message-mod").slideDown(300).delay(2000).fadeOut(300);
                    });
            }
                    
        });
    }); 
</script>

<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> CENADI
                <!--<div style="text-align: left"> Demande de materiel </div>-->
                <small class="pull-right">Date: <?= $detail_demande[0]->date_creation ?></small>
              </h2>
                <h2 style="text-indent: 25%"> Demande de materiel </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              De
              <address>
                  <?php $current_user = $this->ion_auth->user()->row() ; $demandeur =  $this->ion_auth->user($detail_demande[0]->id_demandeur)->row(); ?>
                <strong><?= $demandeur->username ?></strong><br>
                 <?= $demandeur->division ?><br>
                 <?= $demandeur->poste ?><br>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Code :  <?= $detail_demande[0]->code_demande ?></b><br>
              <br>
            </div><!-- /.col -->
          </div><!-- /.row -->
                
          <b hidden="" id="id_demande" ><?= $detail_demande[0]->id ?></b>
          
          
          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Designation</th>
                    <th>Caracteristiques</th>
                    
                    
                <div id="message-mod" class="col-xs-12" style="background: #Fa10cc; text-align: center;padding: 2%; border-radius:10px;"> <?= $this->session->userdata('mess') ?> </div>
                  
  
                    
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($detail_demande_materiel as $entre_o) : ?>
                   
                  <tr>
                      
                    <td><?=  $entre_o->designation  ?></td>
                      <td><?php echo $entre_o->caracteristiques ?></td>
                    
                  </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
<!--              <p class="lead">Motif de la demande</p>
              
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
               
                <?php // $detail_demande[0]->motif ?>           
              </p>-->
              
            </div><!-- /.col -->
          </div><!-- /.row -->

          
          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generer le PDF</button>
            </div>
          </div>
        </section>



