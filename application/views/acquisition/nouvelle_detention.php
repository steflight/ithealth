<h1 style="font-family: verdana">
    Nouvelle detention
</h1>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">detention materiel</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="<?= current_url() ?>">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">code entree</label>
                <input type="text" name="code_entree" class="form-control" id="exampleInputEmail1" required=""  placeholder="livre">
            </div>
            <div class="form-group">
                <label for="quantite">Quantite</label>
                <input type="number" name="quantite" class="form-control" id="quantite" required="" placeholder="quantite">
            </div>
            <div class="form-group">
                <label for="fournisseur">fournisseur</label>
                <input type="text" name="fournisseur" class="form-control" id="fournisseur" required="" placeholder="fournisseur">
            </div>

        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>
<!-- /.box -->
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

