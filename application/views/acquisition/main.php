
<div class="row">
<div class="col-md-12">
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title" id="action-text">Etablir un ordre d'entrée</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="display: block;" id="1-action">
                  cliquer ici pour enregistrer un nouveau matériel <a href="<?= site_url('acquisition/nouvelle_entree') ?>"><button  data-action="nouveau_orde" class="btn bg-purple margin">Nouvelle entrée</button></a>
                  <p>
                      <i class="fa fa-info"></i> >> >> l'enregistrement d'un nouveau matériel passe par l'établissement d'un ordre d'entrée
                  </p>
                
                    
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 </div>
    
<div class="col-md-12">
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="designation"> Consulter les ordres d'entrée </strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                <div id="2-action" class="box-body" style="display: block;">
                    cliquez ici pour voir la liste des ordres d'entrée
               <a href="<?= site_url('acquisition/liste_ordre_entree') ?>"><button  data-action="nouveau_ord" class="btn bg-purple margin">consulter les ordres d'entrée</button></a> 
                
                    
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 </div>
    
<div class="col-md-12">
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="designation"> Inventaire </strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                <div id="2-action" class="box-body" style="display: block;">
                    cliquez ici pour voir la liste des materiels avec le detail sur leur etat(en stock , en service , sortie)
               <a href="<?= site_url('acquisition/inventaire') ?>"><button  data-action="nouveau_ord" class="btn bg-purple margin">consulter l'inventaire</button></a> 
                
                     
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 </div>
 
    
 </div>