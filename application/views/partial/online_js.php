<!--<button type="button" onclick="loadXMLDoc()">Change Content</button>-->
<script>
    
function getOnline()
{
   
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
    xmlhttp.open("GET","<?php echo site_url('maniement/inventaire') ?>",true);
    xmlhttp.send();
    
  
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("online").innerHTML=xmlhttp.responseText;
    }
  };
  setTimeout(function(){getOnline();},5000000);
 }
 

 
</script>