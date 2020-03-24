	//Usage:
// add open-shoppingcart class to menu icon
// add data-menu attr with the id of the menu to be expanded
// add id to the menu element and the shoppingcart class
// wrap menu in right-menu-shoppingcart class
// add right-shoppingcart or shoppingcart--left to set the slide direction

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
/*
  $('#btn-modal-shop').on('touchend click', function(){
      var menu = $('.open-shoppingcart').attr('data-menu');
      $(menu).toggleClass('shoppingcart__expanded');
      $(menu).parent().toggleClass('shoppingcart__expanded');

  });

    });
*/

    $(window).scroll(function(){
        $(".banner").css("opacity", 1 - $(window).scrollTop() / 200);
      });

    //  $('#getCodeModal').modal({backdrop: 'static', keyboard: false})
    // $("#getCodeModal").modal('show');






