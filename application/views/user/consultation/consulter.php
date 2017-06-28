<?php $this->load->view("template/header"); ?>
<?php foreach ($info as $info_item) { ?>
<p>
<div class="span1"><?php echo $info_item["cmp_nom"]; ?></div>
<div class="span1"><?php echo $info_item["cmp_prenom"]; ?></div>
<div class="span1"><?php echo $info_item["cmp_service"]; ?></div>
<div class="btn btn-primary"><a   href="<?php echo site_url('user/voir_profil').'/'.$info_item["id_user"]; ?>"> Voir profil </a></div>
<div class="btn btn-primary"><a   href="<?php echo site_url('user/mise_a_jour').'/'.$info_item["id_user"]; ?>"> Modifier Profil </a></div>
<div class="btn btn-primary"><a   href="<?php echo site_url('user/voir_profil').'/'.$info_item["id_user"]; ?>"> Bloquer Profil </a></div>
<div class="btn btn-primary"><a   href="<?php echo site_url('user/voir_profil').'/'.$info_item["id_user"]; ?>"> Supprimer Profil </a></div><br />

<?php echo '</p>'; } ?>

<table class="table table-bordered table-striped">
    <thead>
        <tr class="">
            <td>Login</td>
            <td>Nom</td>
            <td>Prenom</td>
            
            <td>Service</td>
            <td>Telephone</td>
            <td>Date de creation</td>
            
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ($info as $info_item) { ?>
        <tr>
            <td><?php echo $info_item["login"]; ?></td>
            <td><?php echo $info_item["cmp_nom"]; ?></td>
            <td><?php echo $info_item["cmp_prenom"]; ?></td>
            <td><?php echo $info_item["cmp_service"]; ?></td>
            <td><?php echo $info_item["cmp_telephone"]; ?></td>
            <td><?php echo Date("d/m/y",$info_item["cmp_date_enreg"]); ?></td>
            
        </tr>
         <?php echo ''; } ?>
    </tbody>
</table><button class="btn-primary">Ajouter</button>

<script type="text/javascript">
			$().ready(function() {
				$("button").click(function(){
                                   $(".test").after("mama je t'aime");
                                   
                                });
			});
		 </script>


<?php $this->load->view("template/footer"); ?>