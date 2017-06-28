
<?php include('traitement_js.php'); ?>
<div class="row">
<div class="col-md-12">
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Informations sur la demande</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="display: block;">
                  



<section >
    <div  id="id_demande" hidden="" > <?= $detail_demande[0]->id ?></div>
    <div  id="id_demandeur" hidden="" > <?= $detail_demande[0]->id_demandeur ?></div>
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
                    <th>Quantité demandée</th>
                    <th>Quantité disponible</th>
                  
                  </tr>
                  
                </thead>
                <tbody id="main-content">
                    
                <div  id='message-traitement' class="alert alert-success alert-dismissable" style="">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Enregistrement effectuez avec success</h4>
                    Clicquez sur le coin droit pour fermer
                </div>
                    
                   <div id="dispo" class="input-group margin">
                       <input  type="number" id="disponible" name="disponible" value="0" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" id="setdisponible" data-action="enreg-disponible" type="submit">Enregistrer</button>
                    </span>
                  </div>
                
                   <div id="accord" class="input-group margin">
                       <input  type="number" id="accordee" name="setaccordee" value="0" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" id="setaccorde" data-action="enreg-accordee" type="submit">Enregistrer</button>
                    </span>
                  </div>
                
                     <?php foreach ($detail_demande_materiel as $entre_o) : ?>
                  <tr>
                    <td><?=  $entre_o->designation  ?></td>
                    <td><?php echo $entre_o->caracteristiques ?></td>
                    <td class="quantite_demande" id="quantite_demande:<?= $entre_o->id ?>" data-name="quantite_demande" data-id="<?= $entre_o->id?>" contenteditable="false"><?php echo $entre_o->quantite_demande ?></td>
                    <td class="quantite_demande" id="quantite_disponible:<?= $entre_o->id ?>" data-name="quantite_disponible" data-id="<?= $entre_o->id?>" contenteditable="false"><?php echo $entre_o->quantite_disponible ?></td>
                          <td><button type="button" data-action="inventaire" data-designation="<?= $entre_o->designation ?>" data-id="<?= $entre_o->id ?>" class="btn btn-success">Voir inventaire</button></td>
                            
                       
                  </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>




                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
<div class="col-md-9">
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="designation"> Voir inventaire d'un materiel </strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                <div id="detail_inventaire" class="box-body" style="display: block;">
                        
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 </div>

<div class="col-md-3">
              <div class="box box-info box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Résultat du traitement</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                <div id="resultat" class="box-body" style="display: block;">
                     
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
</div>
    
    
    
   </div>