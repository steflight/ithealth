


<div class="row">
<div class="col-md-12">
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title" id="action-text">Faites une demande    </h3>
                    
                    <?php 
                        if(!isset($this->materiel->get_by_id(122)->designation)){
                            echo "c'est null ce truc ";
                        }
                        else {
                            echo $this->materiel->get_by_id(122)->designation;
                        }
                    ?>
                    
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="display: block;" id="1-action">
                  cliquer ici pour soumettre une demande <a href="<?= site_url('maniement/nouvelle_demande') ?>"><button  data-action="nouveau_orde" class="btn bg-purple margin">Soumettre demande</button></a> 
                    sur soumettre une demande pour effectuer une demande
                                
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 </div>
<div class="col-md-9">
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="designation"> Voir  matériel </strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                <div id="2-action" class="box-body" style="display: block;">
                    cliquez ici pour voir les materiels que vous possedez
               <a href="<?= site_url('maniement/liste_reponse') ?>"><button  data-action="nouveau_ord" class="btn bg-purple margin">Voir vos matériels</button></a> 
                
                    materiel detenu pour 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 </div>

            <div class="col-md-3">
              <div class="box box-info box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Historique designation</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div id="3-action" class="box-body" style="display: block;">
                   Aucune designation choisie
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
    
    </div>