<!-- gestion de chargements de page -->
<?php 

//var_dump(set_realpath($action));

/*
if(!empty($action))
{  
    if(file_exists(APPPATH."/views/partial/$action.php"))
    {
        include APPPATH."/views/partial/$action.php";
    }
    else 
    {
        echo "cette action n'existe pas";
    } 
}
 
 */
/*
else if(!empty($vue))
{
    if(file_exists(APPPATH."/views/$vue.php"))
    {
//        include APPPATH."/views/$vue.php";
        include APPPATH."/views/auth/index.php";
    }
    else 
    {
        echo "cette action n'existe pas";
    } 
}
else
{
    include 'partial/noaction.php';
}*/

?>


<!-- Gestion des chemins -->
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
</ol>