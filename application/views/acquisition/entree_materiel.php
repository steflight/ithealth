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
                    <?php foreach ($entree_materiel as $entree_mat): ?>
                    <tr>
                      <td><?= $entree_mat->id ?></td>
                      
                      <td><?= $entree_mat->designation ?></td>
                      <td><?= $entree_mat->caracteristique ?></td>
                      <td><?= $entree_mat->date_creation ?></td>
                      <td><a href="<?= site_url("acquisition/detail_ordre")?>?id=<?= $entree_mat->id_entree ?>"> Voir ordre entree</a></td>
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>