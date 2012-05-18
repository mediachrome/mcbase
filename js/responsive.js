(function ($) {

  Drupal.behaviors.mcbase_responsive = {
    
    attach: function(context, settings) {
  
   
      // detect window size from css
      var size = window.getComputedStyle(document.body,':after').getPropertyValue('content');
      
      // alert('size = ' + size);
      
      // if (size == 'phone') {

        // add an element-invisible class to the menu 
        // $('#main-menu').addClass('element-invisible');
        $('#navigation').addClass('padding');
        
        // add menu button id to the nav title
        $('#navigation h2').removeClass('element-invisible');
        $('#navigation h2').attr('id', 'menu-toggle');
        
        // set a toggle action on the nav title to hide and show the menu */
        
        $('#menu-toggle').bind('click', function(){
          $("#main-menu").toggleClass('element-invisible');
        });
      // }


    }
  };
}(jQuery));
