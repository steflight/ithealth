<script type="text/javascript">
    $(document).ready(function (){
        $("#message-traitement").hide();
        var url_inventaire = "<?= site_url("maniement/inventaire") ?>";
        var url_dispo = "<?= site_url("maniement/update_dispo") ?>";
        var url_accorde = "<?= site_url("maniement/update_accorde") ?>";
        var id;
        var btn_inventaire = $("#detail_inventaire");
        /*
         * 
         * definition des zones de texte
         */
        var txt_resultat = $("#resultat");
        var main_content = $("#main-content");
        var txt_mainContent = $("#main-content");
        var txt_detailInventaire = $("#detail_inventaire");
        var txt_messageTraitement = $("#message-traitement");
        
        function inititialise()
        {
            txt_detailInventaire.text("Aucune désignation choisie");
            txt_resultat.text("Aucun  traitement effectué");
        }
        
        /*
         * 
         * @param {type} designation
         * @param {type} etat
         * @returns {undefined}
         */
     
        function get_inventaire(designation,etat)
        {
                $.get("<?php echo site_url('maniement/inventaire') ?>",{designation:designation,etat:etat},function(data,status){
                //alert("Data: " + data + "\nStatus: " + status);
                btn_inventaire.append(data);
              //  main_content.append(data);
                //txt_historique.append(data);
            });
        }
        
        
        /*
         * execution ... (utilisation des fonctions et implementation des evenements)
         */
        
        inititialise();
        
        
        
        
        $("#dispo").hide();
        $("#accord").hide();
        
      $("button[id=setdisponible]").click(function (){
          
           disponible = $("#disponible").val();
          // alert(disponible);
           data = {id:id,valeur:disponible};
           setdispo = $.post(url_dispo,data);
           setdispo.done(function(dat){
               console.log(data);
               $("#dispo").hide(1000);
           });
        });
        
      $("button[id=setaccorde]").click(function (){
          
           accorde = $("#accordee").val();
           alert(accorde);
           data = {id:id,valeur:accorde};
           setdispo = $.post(url_accorde,data);
           setdispo.done(function(dat){
               console.log(data);
               $("#accord").hide(1000);
           });
        });
        
        /**
         * gestion des resultats de traitement
         */
        
        
        $("td button").click(function(){
            
            id = $(this).attr("data-id");
            action = $(this).attr("data-action");
            
            id_courant = $(this).attr("data-id");
            switch(action)
            {
                
                case "inventaire":
                    btn_inventaire.text("");
                    
                    designation = $(this).attr("data-designation");
                    etat = "entrée";
                    $("#designation").text(designation);
                    //alert(designation);
                    get_inventaire(designation,etat);
                break;
                
                case "disponible":
                    $("#dispo").fadeIn(1000);
                break;
                
                case "attribuez":
                    $("#accord").fadeIn(1000);
                break;
             
            }
        });
        
       
    });
</script>
