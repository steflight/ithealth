<div class="form-group">
                <label for="designation">Designation</label> <br>
                
                <input name="designation" list="designation" class="select2">
                            <?php foreach ($designation as $design) : ?>
                <datalist id="designation">
                    <option style="padding: 4px" class="select2-results" value="<?= $design->intitule ?>"><?= $design->intitule ?></option>
                            <?php endforeach; ?>
                
                </datalist>
            </div>
            <div class="form-group">
                <label for="num_serie">numéro de serie</label>
                <input type="text" name="num_serie" class="form-control" id="num_serie" required="" placeholder="numéro série">
            </div>
            
            
            <div class="form-group">
                <label for="caracteristique">caracteristiques</label>
                <input type="text" name="caracteristique" class="form-control" id="caracteristique" required="" placeholder="caracteristique">
            </div>
            
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