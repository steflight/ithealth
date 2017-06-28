<?php
?>
<div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    
                    <th>numero de serie</th>
                    
                    <th>designation</th>  
                     
                  </tr>
                </thead>
                <tbody>
                     <?php foreach ($reponse as $demande) : ?>
                  <tr>
                    
                    <td><?=  $demande->num_serie  ?></td>
                   
                    
                      <td><?= $demande->designation ?></td>
                      
                      
                  </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->