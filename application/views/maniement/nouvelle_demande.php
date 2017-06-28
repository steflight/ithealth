<style>
    .error{
        color: red;
    }
</style>
<div class="row box-body ">
<div class="col-md-12">
<h1 style="font-family: verdana">
    <!--Nouvelle demande de materiel-->
</h1>
   
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">  Nouvelle demande de materiel </h3><br>
        <i><i class="fa fa-info"></i><strong>-</strong><?php //  $this->session->userdata('message') ?></i>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="<?= current_url() ?>">
        <div class="box-body">
            <div class="form-group">
                <label for="designation">Designation </label>
                <div class='error'>  </div>
               
                 <select name="designation" class="select2">
                            <?php foreach ($designation as $design) : ?>
                     <option style="padding: 4px" class="select2-results" value="<?= $design->intitule ?>"><?= $design->intitule ?></option>
                            <?php endforeach; ?>
                </select>
                
            </div>
            <div class="form-group">
                <label for="caracteristiques">caracteristiques </label>
                <div class='error'>  </div>
                <input type="text" name="caracteristiques" class="form-control" id="caracteristiques" required="" placeholder="caracteristiques">
            </div>
            
<!--            <div class="form-group">
                <label for="quantite">Motif</label>
                <div class='error'> ---- </div>
                <input type="text" name="motif" class="form-control" id="quantite" required="" placeholder="motif">
            </div>-->
            
          <div class="form-group">
                <label for="motif">Voulez vous ajouter un matériel ?</label>
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
</div>
   
    
    
</div>


    
<!-- /.box -->
