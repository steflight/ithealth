<?php

//var_dump($liste_entre);
?>

<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> <?= COMPANY_NAME ?>
                <!--<div style="text-align: left"> Demande de materiel </div>-->
                <small class="pull-right"><strong> <?= $entree_par_ordre->date_creation ?></strong> </small>
              </h2>
                <h2 style="text-indent: 25%"> Ordre d'entrée </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
             
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Code : <?= $entree_par_ordre->code_entree ?>  </b><br>   
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
                    <th>Description</th>
                    <th>Date d'ajout</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($liste_entre as $entree) :?>
                  <tr>
                    <td><?= $entree->designation  ?></td>
                    <td><?php echo "marque :". json_decode($entree->caracteristique)->marque ."..."  ?></td> 
                    <td><?= $entree->date_creation  ?></td>
                   
                   
                  </tr>
                 <?php endforeach; ?>
                 
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
          
            
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          
        </section>

