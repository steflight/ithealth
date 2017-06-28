<?php

/**
 * represente la liste de materiels afin qu'un choix y soit effectué
 */

 ?>
<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> Mintp, Inc.
                <small class="pull-right">Date: 01/06/2015</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              De
              <address>
                <strong> <?=  $this->ion_auth->user($this->input->get('id'))->row()->username  ?> </strong><br>
                
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Matricule : <?=  $this->ion_auth->user($this->input->get('id'))->row()->matricule  ?></b><br>
              
              <b>Poste:</b> <?=  $this->ion_auth->user($this->input->get('id'))->row()->poste  ?><br>
              
              
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              
            <?php if($materiels != NULL) : ?> 
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th>code</th>
                    <th>categorie</th>
                    <th>designation</th>
                    <th>Date entrée</th>
                   
                  </tr>
                </thead>
                
                <tbody>
                  <?php  foreach ($materiels as $materiel) : ?>
                  <tr>
                        <td><?php echo $this->materiel->get_by_id($materiel->id)->num_serie ?></td>
                        <td><?php echo $this->materiel->get_by_id($materiel->id)->categorie ?></td>
                        <td><?php echo $this->materiel->get_by_id($materiel->id)->designation ;
                                if($this->materiel->get_by_id($materiel->id)->designation == "ordinateur"){
                                                                
                                echo "<br> type :". json_decode($this->materiel->get_by_id($materiel->id)->caracteristique)->type 
                                ."<br> marque :". json_decode($this->materiel->get_by_id($materiel->id)->caracteristique)->marque 
                                ."<br> ram :". json_decode($this->materiel->get_by_id($materiel->id)->caracteristique)->ram
                                ."<br> disque dur :". json_decode($this->materiel->get_by_id($materiel->id)->caracteristique)->disque_dur
                                ."<br> marque processeur :". json_decode($this->materiel->get_by_id($materiel->id)->caracteristique)->marque_processeur
                                ."<br> frequence :". json_decode($this->materiel->get_by_id($materiel->id)->caracteristique)->frequence;
                                }
                                
                            ?>
                                
                        </td>
                        <td><?php echo $this->materiel->get_by_id($materiel->id)->date_creation ?></td>
                        
                     
                  </tr>
                  <?php endforeach; ?>
                  <?php else : ?> 
                    <h3> Vous ne possedez aucun materiel</h3>
                  <?php endif; ?> 
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="#" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimer</a>
              <!--<button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>-->
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generer le  PDF</button>
            </div>
          </div>
        </section><!-- /.content -->
