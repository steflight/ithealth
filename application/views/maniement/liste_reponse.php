 <?php // var_dump($demande); ?>
<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
                <h2 style="text-indent: 25%"> Materiels Attribués</h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          
          <?php if(!empty($reponse)): ?>
               
          
          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    
                    <th>numero de serie</th>
                    <th>id demandeur</th>
                    <th>Caracteristiques</th>
                    <th>designation</th>  
                    <th>date creation </th>  
                  </tr>
                </thead>
                <tbody>
                     <?php foreach ($reponse as $demande) : ?>
                  <tr>
                   
                    <td><?=  $demande->num_serie  ?></td>
                    <td><?= $this->ion_auth->user($demande->id_demandeur)->row()->first_name  ?></td>
                    <td><?=  $demande->caracteristiques  ?></td>
                      <td><?= $demande->designation ?></td>
                      <td><?= $demande->date_creation ?></td>
                      
                  </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="#" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
      
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
            </div>
          </div>
        </section
         <?php else: ?>
            <h2> Liste de materiel vide </h2>
        <?php endif; ?>