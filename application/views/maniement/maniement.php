<div class="col-md-6" id="liste_choix">
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong id="designation"> liste des choix </strong> </h3>
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
                          <th>Numero de serie</th>
                          <th>id</th>
                          <th>Désignation</th>
                         
                          <th>Date entrée</th>
                       </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($materiels as $materiel) : ?>
                    <tr role="row" class="odd">
                        <td><?= $materiel->num_serie  ?></td>
                        <td><?= $materiel->id  ?></td>
                        <td><?= $materiel->designation  ?></td>
                        
                        <td><?= $materiel->date_creation  ?></td>
                        <td><button data-id="<?= $materiel->id ?>"  data-id_materiel="<?= $materiel->id  ?>"  data-num_serie="<?= $materiel->num_serie  ?>" type="button" data-action="attribuez" data-num_serie="<?= $materiel->num_serie  ?>" class="btn btn-success"><i class=""></i>Attribuer</button></td>  
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