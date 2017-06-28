<?php include 'attributionjs.php'; ?>

<!--message d'erreur-->
    <?php $this->load->view("maniement/erreur") ?> 
<!-- fin message d'erreur-->

<div class="row">
    
    <!--liste du personnel-->
        <?php $this->load->view("maniement/liste_personnel") ?> 
    <!--fin liste du personnel-->
    
    <!--debut liste materiel-->     
        <?php $this->load->view("maniement/liste_materiel_btn") ?>               
    <!-- fin liste materiel--> 
                    
    <!--liste d'elements selectionnés-->
        <?php $this->load->view("maniement/liste_choix") ?>
    <!--fin liste d'element à selectionner-->
</div>