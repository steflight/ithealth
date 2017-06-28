<?php

/**
 * ce fichier est le script permettant de manipuler l'interface des attributions
 */ 
 
?>

<script>
  
$(document).ready(function (){
    
    
    $("#liste_choix").hide();
    $("#message-traitement").hide();
    
    $("#liste_materiel").hide();
        var url_inventaire = "<?= site_url("maniement/inventaire") ?>";
        var url_dispo = "<?= site_url("maniement/update_dispo") ?>";
        var url_accorde = "<?= site_url("maniement/update_accorde") ?>";
        var id;
        var btn_inventaire = $("#detail_inventaire");
        var txt_historique = $("#historique");
        
        var id_personnel;
        var id_materiel;
      
        function get_inventaire(designation,etat)
        {
                $.get("<?php echo site_url('maniement/inventaire') ?>",{designation:designation,etat:etat},function(data,status){
                //alert("Data: " + data + "\nStatus: " + status);
                btn_inventaire.append(data);
                //txt_historique.append(data);
            });
        }
        
        $("#dispo").hide();
        $("#accord").hide();
        
      $("button[id=setdisponible]").click(function (){
          
           disponible = $("#disponible").val();
           alert(disponible);
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
        
      $("button[id=enregistrer]").click(function (){
          // recuperation de la liste d'elements selectionnés
             var element = document.querySelectorAll('#les_choix tr');
             
             var id = [];
             for(i=0; i <element.length;i++)
             {
                 id.push(element[i].getAttribute('data-id'));
             }
             
             // envoi des valeurs au serveur
             
             data = {id:id,id_personnel:id_personnel};
             console.log(data);
             setdispo = $.post('http://localhost/sygepa/index.php/maniement/setDetention',data);
                    setdispo.done(function(data){
                        console.log(data);
                        $("#message-traitement").show(1000).delay(3).hide(1000);
                    });
                   
       });
       
      $("button[id=annuler]").click(function (){
             alert("annuler");
       });
        
        
        
        
        
        $("td button").click(function(){
            
            id = $(this).attr("data-id");
            
            action = $(this).attr("data-action");
            
            id_courant = $(this).attr("data-id");
            
            switch(action)
            {
                
                case "choisir":
                    
                    id_personnel = $(this).attr("data-idpersonnel");
                    
                    $("#choix_personnel").hide(1000);
                    $("#liste_materiel").show(1000);
                    $("#liste_choix").show(1000);
                break;
                
                case "voirlist":
                //$("#choix_personnel").hide(1000);
                //$("#liste_materiel").show(1000);
                data = {id_personnel:id_personnel};
                console.log(data);
                setdispo = $.post('http://localhost/sygepa/index.php/maniement/listDetention',data);
                    setdispo.done(function(data){
                        console.log(data);
                        $("#message-traitement").show(1000).delay(3).hide(1000);
                    });
            
            
            
               break;
                
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
                
                case "affectez":
                   // alert('fait');
                   id_materiel = $(this).attr("data-id"); 
                   designation = $(this).attr("data-designation"); 
                   num_serie = $(this).attr("data-num_serie"); 
                    
                   html_debut = "<tr role='row' class='odd' data-id="+id_materiel+">";
                   html_corp = "<td>"+num_serie+"</td><td>"+ designation +"</td><td><button class='btn-primary'><<</button></td>";
                   html_fin = "</tr>";
                   $("#les_choix").append(html_debut+''+html_corp+''+html_fin);
                   $(this).hide(1000);
                break;
                
                case "attribuez":
                    //$("#accord").fadeIn(1000);
                    alert('fait');
                    id_materiel = $(this).attr("data-id"); 
                    //id_detenteur = $(this).attr("data-id"); 
                    
                    data = {id_personnel:23,id_materiel:id_materiel};
                    setdispo = $.post('http://localhost/sygepa/index.php/maniement/setDetention',data);
                    setdispo.done(function(dat){
                        console.log(data);
                       // $("#accord").hide(1000);
                       alert("oups");
                    });
                    
                    alert('fait');
                break;
             
            }
        });
        
       
    });
    
</script>