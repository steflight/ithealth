<?php

?>
<script>
    var base_url = "http://localhost/sygepa/index.php/acquisition";
    function traitement(data)
    {
        
    }
    
    function get_data()
    {
        designation = $("#designation").text();
                   numero_serie = $("#numero_serie").text();
//                 continuez =  $('input[name=continuez]:checked').val();
//                 groupe = $("#titre_for_per").text();
                    
                    switch(designation)
                    {
                        case "ordinateur" :
                            //alert("ordinateur choisi");
                            id = $("#id_materiel").val();
                             marque = $("#marque").val();
                             //type = $('input[name=type]:checked').val();
                             type = $("#type").val();
                             marque_processeur = $("#marque_processeur").val();
                             frequence = $("#frequence").val();
                             ram = $("#ram").val();
                             disque_dur = $("#disque_dur").val();
                             
                             num_serie_moniteur = $("#num_serie_moniteur").val();
                             marque_moniteur = $("#marque_moniteur").val();
                            if($('input[name=type]:checked').val() === "desktop"){
                                num_serie_moniteur = $("#num_serie_moniteur").val();
                                marque_moniteur = $("#marque_moniteur").val();
                            }
                        data = {action:"modifier",id:id,
                            marque:marque,type:type,
                            marque_processeur:marque_processeur,
                            frequence:frequence,ram:ram,disque_dur:disque_dur,
                            num_serie_moniteur:num_serie_moniteur,marque_moniteur:marque_moniteur,
                            numero_serie:numero_serie};
                        console.log(data);
                        
                            $.post('edit_materiel',data,function(data){
                                // pensons à faire des fonctions pour gerer les evenements en arriere plan. (callback)
                               window.location.href = data.reponse;
                                
                                //console.log(data);
                            },'json');
                                break;
                        case "imprimante" :
                            // caracteritiques
                            marque = $("#marque").val();
                            model = $("#designation").val();
                            type_couleur = $('input[name=type_couleur]:checked').val();
                            //type_format = $('input[name=type_format]:checked').val();
                            type_format = $('input[name=type_format]:checked').val();// ne recupere q'une valeur il faut recuperer le tableau de val
                           // type_format = "rien";
                            
                            /**
                             *  à faire , fonction de recuperation des checkbox
                             */
                            
                        data = {continuez:continuez, groupe:groupe,marque:marque,model:model,
                            type_couleur:type_couleur,type_format:type_format,
                            designation:designation,numero_serie:numero_serie};
                            $.post('set_entree_materiel',data,function(data){
                                window.location.href = data.reponse;
                                console.log(data);
                            },'json');
                            break;
                    }             
    }
    
    $(document).ready(function(){
        var btn_action = $("button");
        var url_save = "<?= site_url("acquisition/set_entree_materiel") ?>";
        
        btn_action.click(function(){
            switch($(this).attr("data-action")){
                case "enregistrer":
           
                    designation = $("#designation").val();
                    numero_serie = $("#numero_serie").val();
                    continuez =  $('input[name=continuez]:checked').val();
                    groupe = $("#titre_for_per").text();
                    
                    switch(designation)
                    {
                        case "ordinateur" :
                            //alert("ordinateur choisi");
                             marque = $("#marque").val();
                             type = $('input[name=type]:checked').val();
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
                                break;
                        case "imprimante" :
                            // caracteritiques
                            marque = $("#marque").val();
                            model = $("#designation").val();
                            type_couleur = $('input[name=type_couleur]:checked').val();
                            //type_format = $('input[name=type_format]:checked').val();
                            type_format = $('input[name=type_format]:checked').val();// ne recupere q'une valeur il faut recuperer le tableau de val
                           // type_format = "rien";
                            
                            /**
                             *  à faire , fonction de recuperation des checkbox
                             */
                            
                        data = {continuez:continuez, groupe:groupe,marque:marque,model:model,
                            type_couleur:type_couleur,type_format:type_format,
                            designation:designation,numero_serie:numero_serie};
                            $.post('set_entree_materiel',data,function(data){
                                window.location.href = data.reponse;
                                console.log(data);
                            },'json');
                            break;
                    }
                    
            case "modifier":
                
                    get_data();
                 
                    
                break;
                                       
                    break;
                case "annuler":
                         window.location.href = base_url;
                    break;
            }
        });
    });

</script>


