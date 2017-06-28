<script>
    
     $(document).ready(function(){
         invent = $("#inventaire_jso");
         //alert(invent);
         
          $("#btn_json").click(function(){
            //  alert(invent);
            $.get('detail_materiel_json',{id:'122'},function(data){
                inventaire = data;
                $('#inventaire_jso').empty();
                console.log(data.caracteristique.chassi);
               
            },'json');
        });
     });
       
  </script>
  <button id="btn_json">detail json</button>
<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> <?= COMPANY_NAME ?>
                <!--<div style="text-align: left"> Demande de materiel </div>-->
                </h2>
                <h2 style="text-indent: 25%"> Detail materiel </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
             
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Numero de serie : <?= $materiel->num_serie ?>  </b><br>   
              <br>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>categorie</th>
                    <th>designation</th>
                    <th>Description</th>
                    <th>Etat</th>
                    <th>Date d'ajout</th>
                    
                  </tr>
                </thead>
                <tbody id="inventaire_jso">
                    
                  <tr>
                    <td><?= $materiel->categorie  ?></td>
                    <td><?= $materiel->designation  ?></td>
                    <td><?= $materiel->caracteristique  ?></td>
                    <td><?= $materiel->etat  ?></td>
                    <td><?= $materiel->date_creation  ?></td>
                   
                  </tr>
                 
                 
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
          
            
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          
        </section>

