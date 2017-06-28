<h1 style="font-family: verdana">
    Nouvelle demande materiel
</h1>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">demande materiel</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="<?= current_url() ?>">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">designation</label>
                <input type="text" name="designation" class="form-control" id="exampleInputEmail1" required=""  placeholder="livre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">description</label>
                <input type="text" name="description" class="form-control" id="exampleInputEmail1" required=""  placeholder="livre">
            </div>
            <div class="form-group">
                <label for="quantite_demande">quantite_demande</label>
                <input type="number" name="quantite_demande" class="form-control" id="quantite_demande" required="" placeholder="quantite_demande">
            </div>
            <div class="form-group">
                <label for="quantite_disponible">quantite_disponible</label>
                <input type="number" name="quantite_disponible" class="form-control" id="quantite_disponible" required="" placeholder="quantite_disponible">
            </div> 
             <div class="form-group">
                <label for="quantite_accorde">quantite_accorde</label>
                <input type="number" name="quantite_accorde" class="form-control" id="quantite_accorde" required="" placeholder="quantite_accorde">
            </div> 
            

        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>
<!-- /.box -->
