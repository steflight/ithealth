<h1 style="font-family: verdana">
    Nouvelle sortie materiel
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
                <input type="text" name="code_sortie" class="form-control" id="exampleInputEmail1" required=""  placeholder="livre">
            </div>
           
            <div class="form-group">
                <label for="proces_verbal">proces_verbal</label>
                <input type="text" name="proces_verbal" class="form-control" id="proces_verbal" required="" placeholder="proces_verbal">
            </div>
            <div class="form-group">
                <label for="type">type</label>
                <input type="text" name="type" class="type" id="type" required="" placeholder="type">
            </div>

        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>
<!-- /.box -->
