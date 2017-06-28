<?php //$this->load->view("template/header"); ?>
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
<table>
    <thead>
        <tr>
            <th>Logi</th>
            <th><?php echo $info_item["cmp_nom"]; ?></th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Service</th>
            <th>Bloqué</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </tbody>
</table>

<?php // $this->load->view("template/footer"); ?>