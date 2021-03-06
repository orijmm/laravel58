(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  //datatable
$(document).ready(function() {
  $('#dataTable').DataTable();
});

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });


  $(document).on('click','.btn-delete', function(){
    var model = $(this).data('model');
    var url = $(this).data('url');
    swal({
      title: 'Are you sure?',
      text: "You are going to delete this "+model,
      icon: 'warning',
       buttons: {
        cancel: true,
        confirm: true,
      },
    }).then(result => {
      if (result) {
        $.ajax({
          url:url,
          dataType: "json",
              type: 'delete',
              data: {
                  "_token": $("#gettoken").val()
              },
          success: function(response){
            swal({
              icon: 'success',
              title: response.message,
            });
            //get new list data
            $('.content-table').html(response.view);
            //redraw table
          },
          failure: function(response){
            swal({
              title: response.message,
              icon: 'warning',
            });
          }
        }) 
      }
    })
  });

})(jQuery); // End of use strict
