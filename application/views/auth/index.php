<h1>Liste  des utilisateurs</h1>
<p>  </p>

<div id="infoMessage"><?php echo $message;?></div>

<div class="box-body table-responsive no-padding">
<table  class="table table-hover">
    
	<tr>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Email</th>
		<th>groupe</th>
		
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			
			<td><?php echo htmlspecialchars($user->role,ENT_QUOTES,'UTF-8');?></td>
			
		</tr>
	<?php endforeach;?>
</table>
</div>

<p>
    
        <a style="color: #000;" href="<?= site_url('auth/create_user') ?>"><button class="btn btn-primary"> Ajouter un utilisateur </button></a>
    
    
        