<?php  ?>
<script>
   
</script>
<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Liste de  materiels</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example">
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Designation</th>
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">caracteristique</th>
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"> Date entree</th>
                       </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($materiel as $materiels) : ?>
                     <tr role="row" class="odd">
                        <td class="sorting_1"><?= $materiels->designation  ?></td>
                        <td><?= $materiels->caracteristique  ?></td>
                        <td><?= $materiels->date_creation  ?></td>
                        
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
                    
      