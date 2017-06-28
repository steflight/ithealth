
<div  class="row">
    
    <div class="col-md-10">
    
          <!-- title row -->
          
            <div>
                <h2 style="text-indent: 25%"> Liste des demandes </h2>
            </div><!-- /.col -->
         
          <!-- info row -->
          

          <!-- Table row -->
          <section>
          <div >
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    
                    <th>code</th>
                   
                    <th>Date</th>
                      
                    <th>Etat</th>  
                  </tr>
                </thead>
                
                <section >
                <tbody>
                     <?php foreach ($liste_demande as $demande) : ?>
                  <tr>
                    
                    <td><?=  $demande->code_demande  ?></td>
                    
                    <td><?=  $demande->date_creation  ?></td>
                    
        
                      <td>
                          <?php if ($demande->statut == "traitée"): ?>
                          <h4> traiter </h4>
                          <?php else: ?>
                          <h4> Non traiter </h4>
                          <?php endif; ?>
                      </td>
                      <td>
                          
                          
                         <a href="<?= site_url("maniement/detail_demande?id=$demande->id") ?>"> <button class="btn btn-primary pull-right" style="margin-right: 5px;"> Voir détail</button></a>
                         <a href="<?= site_url("maniement/liste_reponse?id=$demande->id") ?>"> <button class="btn btn-primary pull-right" style="margin-right: 5px;"> Voir reponse </button></a>
                         
                      </td>
                      
                  </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
               
            </div><!-- /.col -->
          </div><!-- /.row -->
 </section>
          

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="#" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Genérer PDF</button>
            </div>
          </div>
        </div>
      
        </div>