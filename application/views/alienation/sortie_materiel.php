 <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Liste des entrées</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>ID</th>
                      
                      <th>Designation</th>
                      <th>caracteristique</th>
                      <th>date d'entrée</th>
                      <th>son ordre entrée</th>
                    </tr>
                    <?php foreach ($sortie_materiel as $sortie_mat): ?>
                    <tr>
                      <td><?= $sortie_mat->id ?></td>
                  
                      <td><?= $sortie_mat->id_materiel ?></td>
                      <td><?= $sortie_mat->mode ?></td>
                      <td><?= $sortie_mat->motif ?></td>
                      <td><?= $sortie_mat->date_creation ?></td>
                      <td><a href="<?= site_url("alienation/detail_ordre")?>?id=<?= $sortie_mat->id_sortie ?>"> Voir ordre sortie</a></td>
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>