jQuery(document).ready(function($){
    var pagination=$(".readMore").attr("data-pagination"); // exemple de récupération de contenu
  
      $(".readMore").on("click", function(e){
          e.preventDefault();
          console.log(pagination);
          var ajax_section =$(".card-columns"); // zone ou renvoyer le contenu de l'AJAX
          jQuery.post(
              ajaxurl, // url du fichier admin-ajax.php,
              {
                  'action': 'ajax-portfolioMore', // nom de l'action à créer
                  'pagination': pagination // exemple de variable à envoyer.
              },
              function(response){
                  //console.log(response);
                  ajax_section.append(response);
                  pagination++;
                  if(max_paged == pagination)
                  {
                      $(".readMore").hide();
                  }
              }
          );
      });
  
  });