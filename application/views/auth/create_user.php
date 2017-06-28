                
                <div id="2-action" class="box-body" style="display: block;">
                    <div class="box box-primary box-solid">    
                       <div class="box-header with-border">
                            <h3 class="box-title"><strong id="designation"> Description générale </strong> </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div><!-- /.box-tools -->
                        </div>
                        <div id="2-action" class="box-body" style="display: block;">
                            <?php echo form_open("auth/create_user");?>
                            
                            <div id="infoMessage"><?php echo $message;?></div>
                            <div class="form-group">
                                <label for="marque">Nom</label>
                                <input type="text" name="first_name" id="marque" class="form-control"  required="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="marque">Prenom</label>
                                <input type="text" name="last_name" id="marque" class="form-control"  required="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="marque">email</label>
                                <input type="text" name="email" id="marque" class="form-control"  required="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="marque">Matricule</label>
                                <input type="text" name="matricule" id="marque" class="form-control"  required="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="marque">Role</label>
                                <select name="role" class="form-control">
                                    <option class="select">Directeur</option>
                                    <option class="select">Directeur</option>
                                    <option>Directeur</option>
                                    <option>Directeur</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="marque">Mot de passe</label>
                                <input type="text" name="password" id="marque" class="form-control"  required="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="marque">Confirmer le mot de passe</label>
                                <input type="text" name="password_confirm" id="marque" class="form-control"  required="" placeholder="">
                            </div>
                                
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                
                            <?php echo form_close();?>
      
                        </div>
                    </div>
                    
                </div><!-- /.box-body -->
                








