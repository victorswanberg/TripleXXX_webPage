//scripts page

//AOS data-scroll
AOS.init();
//Toggle button on carasouel component


$(function () {
    //Scripts for controlling menu Carousel:

    //Interval:
  $(".carousel").carousel({ interval: 3000})

    //Buttons:

    //NEXT
    $(".carousel-control-next").on("click", function(){
        $(".carousel").carousel('next');
    });

    //PREV
    $(".carousel-control-prev").on("click", function(){
        $(".carousel").carousel('prev');
    });

    //Slide indicators/selectors

  //Scripts for modals on history page:
  $("#historyButton").on( "click", function() {
      $("#historyModal").modal("toggle");
  })
  $("#atmosphereButton").on( "click", function() {
      $("#atmosphereModal").modal("toggle");
  })
})
