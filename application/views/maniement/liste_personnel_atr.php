<?php

/**
 * liste du personnels
 */
?>

<div class="col-md-6" id="choix_personnel" style=""> 
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="designation"> choix du personnels </strong> </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                <div id="detail_inventaire" class="box-body" style="display: block;max-height:400px;overflow-y: scroll">
                    <div class="box-body">
                    <table id="example">
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                          <th>Matricules</th>
                          <th>Noms & Prenoms</th>
                          <th>Postes</th>
                          
                       </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($personnels as $personnel) : ?>
                    <tr role="row" class="odd">
                        <td><?= $personnel->matricule  ?></td>
                        <td><?= $personnel->first_name  ?> <?= $personnel->last_name  ?></td>
                        <td><?= $personnel->poste  ?></td>
                        
                        <td><a href="http://localhost/sygepa/index.php/maniement/liste_detention?id=<?= $personnel->id ?>"><button type="button" data-action="voirlist" data-idPersonnel="<?= $personnel->id ?>" data-role="<?= $personnel->id ?>"  class="btn btn-success personnel"><i class=""></i>Voir materiel</button></a></td>  
                    </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                  </table>
                         
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 </div>
 
