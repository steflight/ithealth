<style>
.active {
    z-index: 2;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
}
</style>

<?php //  var_dump("cool"); ?>

 <script>
    // var invent = document.getElementById("inventaire_jso");
    // alert(invent);
    
    function recherche_ordinateur(){
        marque = $("#marque").val();
        //type = $('input[name=type]:checked').val();
        marque_processeur = $("#marque_processeur").val();
        frequence = $("#frequence").val();
        ram = $("#ram").val();
        disque_dur = $("#disque_dur").val();
        num_serie_moniteur = "";
        marque_moniteur = "";
        if($('input[name=type]:checked').val() === "desktop"){
            num_serie_moniteur = $("#num_serie_moniteur").val();
            marque_moniteur = $("#marque_moniteur").val();
        }
        data = {action:"enregistrer",designation:designation,continuez:continuez,
        groupe:groupe,marque:marque,type:type,
        marque_processeur:marque_processeur,
        frequence:frequence,ram:ram,disque_dur:disque_dur,
        num_serie_moniteur:num_serie_moniteur,marque_moniteur:marque_moniteur,
        numero_serie:numero_serie};
                        
        $.post('set_entree_materiel',data,function(data){
                                // pensons à faire des fonctions pour gerer les evenements en arriere plan. (callback)
            window.location.href = data.reponse;
                                
            console.log(data);
        },'json');
    }
    
    function recherche()
    {
        designation = $("#search-designation").val();
        numero_serie =  $("#search-numero").val();
        caracteristique = "";// $("#search-caracteristique").val();
        categorie =  $("#search-categorie").val();
        
        data = {designation:designation,caracteristique:caracteristique,numero_serie:numero_serie,categorie:categorie};
        alert(console.log(data));
        $.get('search',data,function(data){
           $('#inventaire_jso').empty().append(data); 
        });
    }
    
    
     $(document).ready(function(){
         
         $("td").click(function(){
             action = $(this).attr('data-action');
             switch(action)
             {
                 case "search":
                    alert('je suis là');
                     recherche();
                    break;
             }
         });
         
         invent = $("#inventaire_jso");
         
          $("#btn_inventair").click(function(){
            $.post('inventaire_json',null,function(data){
                inventaire = data;
                $('#inventaire_jso').empty();
                for(var i=0;i<inventaire.length; i++)
                {
                  
                  html1 = "<td> "+ inventaire[i].categorie +" </td>";
                  html2 = "<td> "+ inventaire[i].designation +" </td>";
                  html3 = "<td> "+ inventaire[i].num_serie +" </td>";
                 // html4 = "<td> "+ inventaire[i].caracteristique.chassi +" </td>";
                  html5 = "<td> "+ inventaire[i].date_creation +" </td>";
                  
                  invent.append("<tr>",html1,html2,html3,html5,"</tr>");
                }
                //$('#inventaire_jso').empty().append(inventaire[2].caracteristique);
                console.log(typeof inventaire[2].caracterisque);
                //console.log(data[1].caracteristique);
            },'json');
        });
     });
       
  </script>
    
    <!--<button id='btn_inventair'>inventaire Json</button>-->
<div class="row" id="inventaire_jso" >
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Liste de  materiels</h3>
                  <h3 class="box-title"><a href="<?= site_url("acquisition/corbeille")?>"><button  data-action="corbeille" class="btn bg-purple margin">Corbeille</button></a></td>
        </h3>
                  <div style="float: right">                  
                          
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example">
                  <div>
                      <div class="row">
                          <div class="col-sm-12"><table  class="table table-bordered table-hover">
                    <thead>
                      <tr role="row">
                          <th>Categories</th>
                          <th>Designations</th>
                          <th>Numeros de serie</th>
                          <th>Etat</th>
                          
                          <th>Date entrée</th>
                       </tr>
                    </thead>
                    <tbody >
                    <tr>
                        <td data-categorie=""><input type="input" id="search-categorie" name="categorie-search"></td>
                        <td><input type="input" id="search-designation" name="designation-search" ></td>
                        <td><input type="input" id="search-numero" name="numeroserie-search" ></td>
                        <td>entree</td>
                        <td><input type="input" name="etat-search" id="search-etat" ></td>
                        
                        <td data-action="search"><button  data-action="search" class="btn bg-purple margin"> Rechercher</button></td>
                         
                    </tr>
                        <?php foreach ($materiel as $materiels) : ?>
                     <tr>
                        <td><?= $materiels->categorie  ?></td>
                        <td><?= $materiels->designation  ?></td>
                        <td><?= $materiels->num_serie  ?></td>
                        <td><?= $materiels->etat  ?></td>
                        
                        <td><?= $materiels->date_creation  ?></td>
                         <td data-action="detail"><a href="<?= site_url("acquisition/detail_materiel")?>?id=<?= $materiels->id?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin"> Voir detail</button></a></td>
                         <td data-action="modifier"><a href="<?= site_url("acquisition/detail_materiel_modif")?>?id=<?= $materiels->id?>"><button  data-action="modifier" class="btn bg-purple margin"> Modifier</button></a></td>
                         <td data-action="supprimer"><a href="<?= site_url("acquisition/delete")?>?id=<?= $materiels->id?>"><button  data-action="supprimer" class="btn bg-purple margin"><?php echo ($materiels->supprime == 1)?"Restorer" : "Supprimer"; ?></button></a></td>
        
                      </tr>
                      <?php endforeach; ?>
                      
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                  </table>
                 
              </div>
       <div class="row"> <div class="col-sm-5">
               <!--<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 11 to 20 of 57 entries</div></div>-->
           <div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                   <ul class="pagination">
                       
                       <?php foreach ($pagination as $link) {
            echo        "<li class='paginate_button'>". $link."</li>";
}
           ?>            
                      
                   </ul></div>
           </div>
           </div>  
              </div>
              </div>
              </div>
              </div>
              
                
                    
      