<script>
    // definition des liens
    
    var url_save = "<?= site_url("maniement/setReponse") ?>";
    
    // definition des variable de type texte
    
    var txt_resultat = $("#resultat");
       
        var txt_mainContent = $("#main-content");
        var txt_detailInventaire = $("#detail_inventaire");
        var txt_messageTraitement = $("#message-traitement");
        
    // definition des boutons
    
    //implementation et fonction 
    
    /*
     * Fonction
     */
     function get_inventaire(designation,etat)
     {
                $.get("<?php echo site_url('maniement/inventaire') ?>",{designation:designation,etat:etat},function(data,status){
                //alert("Data: " + data + "\nStatus: " + status);
                txt_detailInventaire.text("").append(data);
             
            });
     }
    
    function get_resultat(id_demande)
    {
        $.get("<?php echo site_url('maniement/result_traitement') ?>",{id_demande:id_demande},function(data,status){
               // alert("Status: " + status);
                
                txt_resultat.text("").append(data);
              
            });
    }
    
    function set_etat(num_serie)
    {
        $.post("<?php echo site_url('maniement/set_etat') ?>",{numero_serie:num_serie},function(dat,status){
            console.log(data);
            $("#message-traitement").text("ce materiel est desormais pris" ).slideDown(300).delay(2000).fadeOut(300);
        });
        
    }
    
   $("td button").click(function(){
       
      var designation = $(this).attr("data-designation");
      var caracteristique = $(this).attr("data-caracteristique");
      var num_serie = $(this).attr("data-num_serie");
      var demandeur = $("#id_demandeur").text();
      var id_demande = $("#id_demande").text();
      data = {nume_serie:num_serie,designation:designation,caracteristique:caracteristique,id_demande:id_demande,id_demandeur:demandeur};
      
      $.post(url_save,data,function (dat,status){
          console.log(data);
          //$("#message-traitement").slideDown(300).delay(2000).fadeOut(300);
         //alert(num_serie);
         get_resultat(id_demande);
         set_etat(num_serie);
         etat = "entrée";
         get_inventaire(designation,etat);
          
      });
    });
</script>