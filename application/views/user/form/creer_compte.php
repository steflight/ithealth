

                                    <p>
<?php // echo validation_errors(); ?>

<?php echo form_open(current_url()); ?>

<h5>Nom</h5>

<input type="text" name="cmp_nom" value="" size="50" />
<?php echo form_error('cmp_nom','<span class="alert alert-error">', '</span>'); ?>
<h5>Prenom</h5>
<input type="text" name="cmp_prenom" value="" size="50" />
    <?php echo form_error('cmp_prenom','<span class="alert alert-error">', '</span>'); ?>

<h5>Telephone</h5>
<input type="text" name="cmp_telephone" value="" size="50" />
    <?php echo form_error('cmp_telephone','<span class="alert alert-error">', '</span>'); ?>

<h5>Email</h5>
<input type="text" name="cmp_email" value="" size="50" />
    <?php echo form_error('cmp_email','<span class="alert alert-error">', '</span>'); ?>

<h5>Service </h5>
<input type="text" name="cmp_service" value="" size="50" />
    <?php echo form_error('cmp_service','<span class="alert alert-error">', '</span>'); ?>

<h5>Login</h5>
<input type="text" name="cmp_login" value="" size="50" />
    <?php echo form_error('cmp_login','<span class="alert alert-error">', '</span>'); ?>

<h5>Password</h5>
<input type="text" name="cmp_password" value="" size="50" />
    <?php echo form_error('cmp_password','<span class="alert alert-error">', '</span>'); ?>

<h5>Password Confirm</h5>
<input type="text" name="cmp_confirm_password" value="" size="50" />
    <?php echo form_error('cmp_confirm_password','<span class="alert alert-error">', '</span>'); ?>



<div><input type="submit" value="Inscription" name="inscription" /></div>

</form>

				                    
                                    

			