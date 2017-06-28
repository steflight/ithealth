<?php $this->load->view('template/header'); ?>
<?php 
    $login = $user_item["login"];
    $nom = $user_item["cmp_nom"];
    $prenom = $user_item["cmp_prenom"];
    $telephone = $user_item["cmp_telephone"];
    $email = $user_item["cmp_email"];
    $service = $user_item["cmp_service"];
    $password = $user_item["mot_pass"];
?>
<?php echo form_open(current_url()); ?>

<h5>Nom</h5>

<input type="text" name="cmp_nom" value="<?php echo $nom; ?>" size="50" />
<?php echo form_error('cmp_nom','<span class="alert alert-error">', '</span>'); ?>
<h5>Prenom</h5>
<input type="text" name="cmp_prenom" value="<?php echo $prenom ?>" size="50" />
    <?php echo form_error('cmp_prenom','<span class="alert alert-error">', '</span>'); ?>

<h5>Telephone</h5>
<input type="text" name="cmp_telephone" value="<?php echo $telephone; ?>" size="50" />
    <?php echo form_error('cmp_telephone','<span class="alert alert-error">', '</span>'); ?>

<h5>Email</h5>
<input type="text" name="cmp_email" value="<?php echo $email; ?>" size="50" />
    <?php echo form_error('cmp_email','<span class="alert alert-error">', '</span>'); ?>

<h5>Service </h5>
<select name="cmp_service">
    <option value="edition">Edition</option>
    <option value="gestion des stocks">Gestion des stocks</option>
    <option value="comptabilité">Comptabilité</option>
    <option value="ressource humaine">Ressource humaine</option>
</select>
    <?php echo form_error('cmp_service','<span class="alert alert-error">', '</span>'); ?>

<h5>Login</h5>
<input type="text" name="cmp_login" value="<?php echo $login; ?>" size="50" />
    <?php echo form_error('cmp_login','<span class="alert alert-error">', '</span>'); ?>

<h5>Nouveau mot de passe</h5>
<input type="password" name="cmp_password" value="<?php echo $password; ?>" size="50" />
    <?php echo form_error('cmp_password','<span class="alert alert-error">', '</span>'); ?>

<h5>Password Confirm</h5>
<input type="password" name="cmp_confirm_password" value="" size="50" />
    <?php echo form_error('cmp_confirm_password','<span class="alert alert-error">', '</span>'); ?>



<div><input type="submit" value="Enregistrer les modifications" name="inscription" /></div>

</form>


<?php $this->load->view('template/footer'); ?>