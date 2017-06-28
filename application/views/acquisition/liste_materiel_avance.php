<?php  ?>

 <script>
     $(document).ready(function(){
          $("#btn_inventair").click(function(){
            $.post('inventaire_json',null,function(data){
                inventaire = data;
                //$('#inventaire_jso').empty().append(data);
                console.log(data[1].caracteristique);
            },'json');
        });
     });
       
  </script>
    
    <div class="box box-primary box-solid">    
<!--                       <div class="box-header with-border">
                            <h3 class="box-title"><strong id="designation"> Recherche avancée </strong> </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div> /.box-tools 
                        </div>-->
        <!--recherche--> 
<!--                        <div id="2-action" class="box-body" style="display: block;">
                        
                            <div class="form-group">
                                <label for="marque">Element recherché</label>
                                <input type="text" name="marque" id="marque" class="form-control"  required="" placeholder="">
                                </div>
                            </div>-->
 
                        <!--<button>chercher</button>-->
                    </div>
                        
    <?php foreach ($materiel as $key => $materiels) : ?>
<div class="row" id='inventaire_jso'>
             <div id="" class="box-body" style="display: block;">
                
            
                
            
            <!-- /.box -->
                       
            </div><!-- /.box-body -->
            <div class="col-xs-12">
              <div class="box box-solid box-primary collapsed-box">
                <div class="box-header">
                  <h3 class="box-title"> <?= $key  ?></h3>
                  
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example">
                  <div><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table  class="table table-bordered table-hover">
                    <thead>
                      <tr role="row">
                          <th>Categories</th>
                          <th>Designations</th>
                          <th>Numeros de serie</th>
                          <th>Etat</th>
                          <th>Date entrée</th>
                       </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><input type="input"></td>
                        <td><input type="input"></td>
                        <td><input type="input"></td>
                        <td>on met un widget de choix</td>
                        <td><input type="input"></td>
                        
                        <td data-action="search"><button  data-action="search" class="btn bg-purple margin"> Rechercher</button></td>
                         
        
                      </tr>
                    
                        <?php foreach ($materiel[$key] as $materiels) : ?>
                     <tr role="row" class="odd">
                        <td><?= $materiels->categorie  ?></td>
                        <td><?= $materiels->designation  ?></td>
                        <td><?= $materiels->num_serie  ?></td>
                        <td><?= $materiels->etat  ?></td>
                        <td><?= $materiels->date_creation  ?></td>
                         <td><a href="<?= site_url("acquisition/detail_materiel")?>?id=<?= $materiels->id?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin"> Voir detail</button></a></td>
        
                        
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