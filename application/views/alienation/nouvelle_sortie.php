<h1 style="font-family: verdana">
    <p>
        <?=  $this->session->userdata('message') ?>
    </p>
</h1>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">ajouter materiel</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="<?= current_url() ?>">
        <div class="box-body">
            <div class="form-group">
               
                  
                    <p>
                        <label for="designation"> Designation</label>
                    </p>
                    <p>
                        <select name="designation" class="select2">
                            <?php foreach ($materiels as $materiel) : ?>
                            <option style="padding: 4px" class="select2-results" value="<?= $materiel->id ?>"><?= $materiel->num_serie ?> -- <?= $materiel->designation ?></option>
                            <?php endforeach; ?>
                        </select>
                    </p>
                   
                
            </div>
            
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="mode">Mode</label><br>
                        <select name="mode">
                            <option style="padding: 4px" value="cession">cession</option>
                            <option  style="padding: 4px" value="reforme">reforme</option>
                        </select>
                    </div>
                </div>
            
            
            <div class="row form-group">
                <div class='col-md-6'>
                    <label for="motif">Motif</label>
                    <input type="text" name="motif" class="form-control" id="motif" required="" placeholder="motif">
                </div>
            </div>
            
            <div class="form-group">
                <label for="motif">continuez</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-3">
                            <label for="oui">Oui</label>
                            <input type="radio" checked="" class="radio-inline" name="continuez" value="oui" />
                        </div>
                        <div class="col-md-3">
                             <label for="non">Non</label>
                             <input type="radio" class="radio-inline" name="continuez" id="non" value="non" />
                        </div>
                    </div>
                </div>
                
            </div>

        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>
<!-- /.box -->
