<div class="row">
<div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Liste des ordres de sortie</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody>
                    <tr>
                      <th style="width: 10px">code entree</th>
                      
                      <th>Date de soumission</th>
                    </tr>
                    <?php foreach ($entree as $entre): ?>
                    <tr>
                      <td><?= $entre->code_sortie ?></td>
                      
                      <td>
                        <?= $entre->date_creation ?>
                      </td>
                      <td><a href="<?= site_url("alienation/detail_ordre")?>?id=<?= $entre->id?>"> Voir detail</a></td>
        
                    </tr>
                    <?php endforeach; ?>
                    
                    
                  </tbody>
                </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
</div>
</div>