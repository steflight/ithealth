<!-- To the right -->
<?php if(isset($js_files)): ?>
    <?php foreach($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
 <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <?= COMPANY_SLOGAN ?>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; Janvier 2016 <a href="#"><?= COMPANY_NAME ?></a>.</strong> <?= COMPANY_SLOGAN ?>
 </footer>