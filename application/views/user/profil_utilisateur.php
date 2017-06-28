<?php $this->load->view('template/header'); ?>
<p>
    Login : <?php echo $user_item["login"]; ?>
</p>
<p>
    Nom : <?php echo $user_item["cmp_nom"]; ?>
</p>
<p>
    Prenom : <?php echo $user_item["cmp_prenom"]; ?>
</p>
<p>
    Telephone : <?php echo $user_item["cmp_telephone"]; ?>
</p>
<p>
    Service : <?php echo $user_item["cmp_service"]; ?>
</p>
<p>
    bloqué : <?php echo ($user_item["bloque"] == 0)?"Compte non bloqué":"Compte bloqué"; ?>
</p>
<p>
    Date de creation : <?php echo date('d/M/Y',$user_item["cmp_date_enreg"]); ?>
</p>
<?php $this->load->view('template/footer'); ?>