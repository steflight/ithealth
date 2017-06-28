<aside class="main-sidebar">
<section class="sidebar">

          <!-- Sidebar user panel (optional) -->
         

          <!-- search form (Optional) -->
          
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
              <!--<li class="header" style="color:white;"> liste des taches </li>-->
            <!-- Optionally, you can add icons to the links -->
            
            <!--<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>-->
            
            
            <li class="treeview">
               <a href="<?= site_url('/acquisition') ?>"><i class="fa fa-link"></i> <span>Approvisionnement</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="<?= site_url('acquisition/nouvelle_entree') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Nouveau ordre d'entrée</button></a></li> 
                  <li><a href="<?= site_url('acquisition/liste_ordre_entree') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Consulter ordre d'entrée</button></a></li> 
                  <li><a href="<?= site_url('acquisition/detail_ordre') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Rechercher ordre d'entrée</button></a></li> 
              
              </ul>
            </li>
            <li class="treeview">
              <a href="<?= site_url('maniement') ?>"><i class="fa fa-link"></i> <span>Maniement</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?= site_url('maniement/nouvelle_demande') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Soumettre demande</button></a></li> 
                <li><a href="<?= site_url('maniement/liste_demande') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Consulter les demandes</button></a></li> 
                <li><a href="<?= site_url('maniement/traiter_demande') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Traiter demande</button></a></li> 
                
              </ul>
            </li>
            <li class="treeview">
              <a href="<?= site_url('alienation') ?>"><i class="fa fa-link"></i> <span>L'alienation</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"></a></li>
                <li><a href="<?= site_url('alienation/nouvelle_sortie') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Etablir un nouveau ordre   </button></a></li> 
                <li><a href="<?= site_url('alienation/liste_ordre_sortie') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Consulter ordre de sortie</button></a></li> 
                <li><a href="<?= site_url('alienation/detail_ordre') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Rechercher ordre de sortie</button></a></li> 
                
              </ul>
            </li>
            <li><a href="<?= site_url('acquisition/inventaire') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Inventaire</button></a></li> 
                
          </ul><!-- /.sidebar-menu -->
        </section>
     </aside>