<?php

?>

<script>
    var base_url = "http://localhost/sygepa/index.php/acquisition";
    
    function set_ordinateur(){
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
    }
    
    function set_imprimante(){
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
    }
    
    function set_automobile()
    {
         marque = $("#marque").val();
                            designation = $("#designation").val();
                            num_chassi = $("#numero_serie").val();
                            vitesse = $("#vitesse").val();
                            nbr_place = $("#nbr_place").val();
                            type_moteur = $("#type_moteur").val();
                            couleur = $("#couleur").val();
                           
                            data = {designation:designation,continuez:continuez,groupe:"parc automobile",marque:marque,numero_serie:num_chassi,
                            vitesse:vitesse,nbr_place:nbr_place,type_moteur:type_moteur,couleur:couleur};
                        console.log(data);
                        $.post('set_entree_materiel',data,function (data){
                            window.location.href = data.reponse;
                            console.log(data.reponse);
                        },'json');
    }
    
    function set_bureau()
    {
        numero_serie = $("#num_serie").val();  
        designation = $("#designation").val();  
        description = $("#description").val();  
        fabriquant = $("#fabriquant").val();  
        type = $("#type").val();  
       
        nbr_place = $("#nbr_place").val();
           
        data = {designation:designation,continuez:continuez,description:description,groupe:"Materiel de bureau",numero_serie:numero_serie,
        nbr_place:nbr_place,type:type,fabriquant:fabriquant};
        console.log(data);
        $.post('set_entree_materiel',data,function (data){
           // window.location.href = data.reponse;
           // console.log(data.reponse);
        },'json');
    }
    
    
    function set_scanner(){
        alert("non implemente");
    }
    
    
    function traitement(data)
    {
        // write your code
    }
   
    $(document).ready(function(){
        var btn_action = $("button");
        var url_save = "<?= site_url("acquisition/set_entree_materiel") ?>";
        var id_message = $("#message");
        id_message.hide();
        
        $("#confirm_mess").hide();
                
        btn_action.dblclick(function(){
            set_ordinateur();
        });
        
        
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
                            $("#confirm_mess").show();
                              //set_ordinateur();
                        break;
                        case "imprimante" :
                            // caracteritiques
                            //set_imprimante();
                        break;
                        
                        case "automobile" :
                            set_automobile();
                            
                        break;
                        case "bureau" :
                            alert("merci mon gars");
                            set_bureau();
                        break;
                    }
                    
            case "modifier":
                
                break;
                                       
                    break;
                case "annule":
                         window.location.href = base_url;
                    break;
            }
        });
    });

</script>


