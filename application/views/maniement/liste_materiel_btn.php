<?php

/**
 * represente la liste de materiels afin qu'un choix y soit effectué
 */
 ?>
<div class="col-md-6" id="liste_materiel">
              <div class="box box-info box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">liste matériels</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div id="historique" class="box-body" style="display: block;height: 400px;overflow: scroll">
                   <div class="box-body">
                    <table id="example">
                  <div id="example2_wrapper" class=" form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                          <th></th>
                          <th>Numero de serie</th>
                          
                          <th>Désignation</th>
                         
                          <th>Date entrée</th>
                       </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($materiels as $materiel) : ?>
                    <tr role="row" class="odd">
                        <td><input value="<?= $materiel->id  ?>" type="checkbox"></td>
                        <td><?= $materiel->id  ?>|<?= $materiel->num_serie  ?></td>
                        
                        <td><?= $materiel->designation  ?></td>
                        
                        <td><?= $materiel->date_creation  ?></td>
                        <td><button data-id="<?= $materiel->id ?>"  data-id_materiel="<?= $materiel->id  ?>" data-designation="<?= $materiel->designation  ?>"  data-num_serie="<?= $materiel->num_serie  ?>" type="button" data-action="affectez" data-num_serie="<?= $materiel->num_serie  ?>" class="btn btn-success"><i class=""></i> >> </button></td>  
                    </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                  </table>
                         
              </div>
                </div><!-- /.box-body -->
                <div class="box-footer with-border box-primary">
                    <div class="col-md-3">
                        <button class="btn btn-block btn-primary btn-sm">reset</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-block btn-primary btn-sm">annuler</button>
                    </div>
                    
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div>

