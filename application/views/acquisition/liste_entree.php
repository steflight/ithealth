<div class="row">
<div class="col-md-9">
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Liste des ordres d'entrées</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    
                 <?php if($entree != NULL) : ?>
                  <table class="table table-bordered">
                    <tbody>
                    <tr>
                      <th style="width: 10px">code entree</th>
                      
                      <th>Date creation</th>
                    </tr>
                    <?php foreach ($entree as $entre): ?>
                    <tr>
                      <td><?= $entre->code_entree ?></td>
                      
                      <td>
                        <?= $entre->date_creation ?>
                      </td>
                      <td><a href="<?= site_url("acquisition/detail_ordre")?>?id=<?= $entre->id?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin"> Voir detail</button></a></td>
        
                    </tr>
                    <?php endforeach; ?>
                    
                    
                  </tbody>
                </table>
                   
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="row"> <div class="col-sm-5">
               <!--<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 11 to 20 of 57 entries</div></div>-->
           <div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                   <ul class="pagination">
                       
                       <?php foreach ($pagination as $link) {
            echo        "<li class='paginate_button'>". $link."</li>";
}
           ?>            
                      
                   </ul></div></div>
           </div>  
              </div>
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
                
                
                 <?php else : ?>
                        <h3> Aucun n'ordre d'entré enregistré</h3>
                    <?php endif ; ?>
              </div><!-- /.box -->
              
  </div>