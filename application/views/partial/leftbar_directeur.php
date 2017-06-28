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
                 
              </ul>
            </li>
            
            <li class="treeview">
               <a href="<?= site_url('/maniement') ?>"><i class="fa fa-link"></i> <span>Maniement</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="<?= site_url('maniement/setAttributions') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Nouvelle attribution</button></a></li> 
                  <li><a href="<?= site_url('maniement/getlistAttributions') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">liste des attributions</button></a></li> 
                  
              </ul>
            </li>
            
            <li class="treeview">
               <a href="<?= site_url('/magazin') ?>"><i class="fa fa-link"></i> <span>Magazin</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="<?= site_url('inventaire/materiel') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Inventaire</button></a></li> 
                  <li><a href="<?= site_url('inventaire/ordre_entree') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Consulter ordre d'entrée</button></a></li> 
              </ul>
            </li>
            
            <li class="treeview">
               <a href="<?= site_url('/magazin') ?>"><i class="fa fa-link"></i> <span>Gestion des utilisateurs</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="<?= site_url('auth') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Ajouter utilisateur</button></a></li> 
                  <li><a href="<?= site_url('inventaire/ordre_entree') ?>"><button  data-action="nouveau_ordre_entree" class="btn bg-purple margin">Consulter utilisateurs</button></a></li> 
              </ul>
            </li>
                
          </ul><!-- /.sidebar-menu -->
        </section>
     </aside>