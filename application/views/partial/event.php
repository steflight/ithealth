<script type="text/javascript">
    
    $(document).ready(function (){
        var zone_1 = $("#1-action-content");
        
        $("li button").click(function(){
            
            //id = $(this).attr("data-id");
            action = $(this).attr("data-action");
            alert(action);
           
        function get_form()
        {
            $.get("<?php echo site_url('acquisition') ?>",{designation:designation,etat:etat},function(data,status){
                //alert("Data: " + data + "\nStatus: " + status);
                zone_1.append(data);
                //txt_historique.append(data);
            });
        }
        function get_inventaire(designation,etat)
        {
                $.get("<?php echo site_url('maniement/inventaire') ?>",{designation:designation,etat:etat},function(data,status){
                //alert("Data: " + data + "\nStatus: " + status);
                zone_1.append(data);
                //txt_historique.append(data);
            });
        }
            
            id_courant = $(this).attr("data-id");
            switch(action)
            {
                
                case "inventaire":
                    
                break;
                
                case "disponible":
                    $("#dispo").fadeIn(1000);
                break;
                
                case "attribuez":
                    $("#accord").fadeIn(1000);
                break;
                
            case "nouveau_ordre_entree":
                //get_form();
             break;
             
            }
            
        });
        
       
    });
</script>
