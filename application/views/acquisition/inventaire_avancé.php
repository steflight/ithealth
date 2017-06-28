<?php include 'attribution_js.php'  ?>

<?php if(empty($materiel)): ?>
    <h3> Ce materiel n'existe pas</h3>
<?php else :?>

    <script>
        $("#btn_inventaire").click(function(){
            $.post('inventaire_json',null,function(data){
                $('#inventaire_json').empty().append(data);
            });
        });
    </script>
    
    <button id='btn_inventaire'>inventaire Json</button>
    <?php foreach ($materiel as $materiels) : ?>
<div class="row" id='inventaire_json'>
            <div class="col-xs-12">
              <div class="box">
                
                <div class="box-body">
                    <table id="example">
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                          <th>Numero de serie</th>
                          <th>Désignation</th>
                          <th>Caracteristique</th>
                          <th>Date entrée</th>
                       </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($materiel as $materiels) : ?>
                    <tr role="row" class="odd">
                        <td><?= $materiels->num_serie  ?></td>
                        <td><?= $materiels->designation  ?></td>
                        <td><?= $materiels->caracteristique  ?></td>
                        <td><?= $materiels->date_creation  ?></td>
                        <td><button  data-demandeur="<?= $materiels->id  ?>" data-id_demande="<?= $materiels->id  ?>" data-designation="<?= $materiels->designation  ?>" data-caracteristique="<?= $materiels->caracteristique  ?>" data-num_serie="<?= $materiels->num_serie  ?>" type="button" data-action="attribuez" data-num_serie="<?= $materiels->num_serie  ?>" class="btn btn-success"><i class=""></i>Attribué</button></td>  
                    </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                  </table>
                         
              </div>
              </div>
              </div>
              </div>
            <?php endforeach; ?>          
      <?php endif; ?>

        