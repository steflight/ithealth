<?php $data = array('logged_in'=>1);$query = $this->db->get_where('user',$data);
if($query->num_rows < 1){
    echo 'vous etes seul au travail';
}
else{ 
    ?>
    <div class="">
    <?php
    foreach($query->result() as $row){
        ?>
         <div class="user-panel">
            <div class="pull-left image">
              <img src="assets/uploads/user/<?= $row->avatar ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?= $row->cmp_nom ?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> au travail</a>
            </div>
            </div>
          
<?php

    }
    }
            
        ?>
}
</div>        
