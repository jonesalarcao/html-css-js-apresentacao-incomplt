$(function () {
  $("nav.mobile").click(function () {
    var listaMenu = $("nav.mobile ul")
    // if (listaMenu.is(":hidden") == true) {
    //   listaMenu.fadeIn()
    // } else {
    //   listaMenu.fadeOut()
    // }
    if (listaMenu.is(":hidden") == true) {
      var icone = $(".botao-menu-mobile i")
      icone.removeClass("fa-bars")
      icone.addClass("fa-xmark")
      listaMenu.slideToggle()
    } else {
      var icone = $(".botao-menu-mobile i")
      icone.removeClass("fa-xmark")
      icone.addClass("fa-bars")
      listaMenu.slideToggle()
    }
  })
})
