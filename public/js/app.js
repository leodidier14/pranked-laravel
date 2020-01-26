
	//Usage:
// add open-shoppingcart class to menu icon
// add data-menu attr with the id of the menu to be expanded
// add id to the menu element and the shoppingcart class
// wrap menu in right-menu-shoppingcart class
// add right-shoppingcart or shoppingcart--left to set the slide direction

jQuery(function($){
    $('.open-shoppingcart').on('touchend click', function(){
          var menu = $(this).attr('data-menu');

          $(menu).toggleClass('shoppingcart__expanded');
          $(menu).parent().toggleClass('shoppingcart__expanded');

  });

  $('.right-menu-shoppingcart, .close-shoppingcart').on('touchend click', function(event){

      if ( $(event.target).hasClass('right-menu-shoppingcart') || $(event.target).hasClass('close-shoppingcart') ) {
           $('.shoppingcart__expanded').removeClass('shoppingcart__expanded');
      }
  });

  });



  /*jQuery(function($){
  $(".nav-link").on('click', function(event){

   var current = $(".active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";

  });

  });
  */




      $(window).scroll(function(){
      $(".banner").css("opacity", 1 - $(window).scrollTop() / 200);
    });



