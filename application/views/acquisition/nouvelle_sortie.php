<h1 style="font-family: verdana">
    Nouvelle sortie
</h1>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">sortie materiel</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="<?= current_url() ?>">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">code sortie</label>
                <input type="text" name="designation" class="form-control" id="exampleInputEmail1" required=""  placeholder="livre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">code sortie</label>
                <input type="text" name="description" class="form-control" id="exampleInputEmail1" required=""  placeholder="livre">
            </div>
           
            <div class="form-group">
                <label for="directeur">directeur</label>
                <input type="text" name="directeur" class="form-control" id="directeur" required="" placeholder="directeur">
            </div>

        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>
<!-- /.box -->
