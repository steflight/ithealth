<script>
    var url_save = "<?= site_url("maniement/setReponse") ?>";
   $("td button").click(function(){
       $("#test").text("trop fort");
      var designation = $(this).attr("data-designation");
      var caracteristique = $(this).attr("data-caracteristique");
      var num_serie = $(this).attr("data-num_serie");
      var demandeur = $("#id_demandeur").text();
      var id_demande = $("#id_demande").text();
      data = {nume_serie:num_serie,designation:designation,caracteristique:caracteristique,id_demande:id_demande,id_demandeur:demandeur};
      
      $.post(url_save,data,function (dat,status){
          console.log(data);
          $("#message-traitement").slideDown(300).delay(2000).fadeOut(300);
          
      });
   });
</script>