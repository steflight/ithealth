
<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> CENADI
                <!--<div style="text-align: left"> Demande de materiel </div>-->
                <small class="pull-right">Date: <?= $detail_demande[0]->date_creation ?></small>
              </h2>
                <h2 style="text-indent: 25%"> Demande de materiel </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              De
              <address>
                  <?php $demandeur =  $this->ion_auth->user($detail_demande[0]->id_demandeur)->row(); ?>
                <strong><?= $demandeur->username ?></strong><br>
                 <?= $demandeur->division ?><br>
                 <?= $demandeur->poste ?><br>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Code :  <?= $detail_demande[0]->code_demande ?></b><br>
              <br>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Designation</th>
                    <th>Caracteristiques</th>
                    
                    <th>Quantité demande</th>
                    <th>Quantité disponible</th>
                    <th>Quantité</th>
                  </tr>
                </thead>
                <tbody>
                     <?php foreach ($detail_demande_materiel as $entre_o) : ?>
                  <tr>
                    <td><?=  $entre_o->designation  ?></td>
                      <td><?php echo $entre_o->caracteristiques ?></td>
                      <td><?php echo $entre_o->quantite_demande ?></td>
                      
                  </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead">Motif de la demande</p>
              
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
               
                <?= $detail_demande[0]->motif ?>           
              </p>
            </div><!-- /.col -->
            
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
            </div>
          </div>
        </section>