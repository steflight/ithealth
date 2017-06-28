
<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
                <h2 style="text-indent: 25%"> Liste des demandes non traitées </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>code</th>
                    <th>Demandeur</th>
                    <th>Date</th>
                    <th>Motif</th>  
                  </tr>
                </thead>
                <tbody>
                     <?php foreach ($liste_demande as $demande) : ?>
                  <tr>
                    <td><?=  $demande->id  ?></td>
                    <td><?=  $demande->code_demande  ?></td>
                    <td><?=  $demande->id_demandeur  ?></td>
                    <td><?=  $demande->date_creation  ?></td>
                      <td><?= $demande->motif ?></td>
                      <td><a href="<?= site_url("maniement/detail_demande_traitement?id=$demande->id ") ?>"><button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-trello"></i> Traiter</button></a></td>
                      
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
              <!--<button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>-->
            </div>
          </div>
        </section>