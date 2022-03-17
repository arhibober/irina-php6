(function ($, undefined) {
  jQuery(function () {
    /*activeSlider();
   buttonUp();*/
    leftMenu();
    searchLine();
  });

// Остальной код файла...

  function searchLine() {
    $(".sendSearch").click(function () {
      $(".searchRow").toggleClass("widthSearch");
      $(".sendSearch").toggleClass("widthSendSearch");
      $(".inputSearch").focus();
    });
  }
})(jQuery);