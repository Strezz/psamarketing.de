//function dropdown() {
//    document.getElementById("lang").classList.toggle("show");
//  }
//
//  // Закрыть раскрывающийся список, если пользователь щелкнет за его пределами.
//  window.onclick = function(event) {
//    if (!event.target.matches('.dropbtn')) {
//      var dropdowns = document.getElementsByClassName("dropdown-content");
//      var i;
//      for (i = 0; i < dropdowns.length; i++) {
//        var openDropdown = dropdowns[i];
//        if (openDropdown.classList.contains('show')) {
//          openDropdown.classList.remove('show');
//        }
//      }
//    }
//  }
jQuery(document).ready(function() {
    jQuery('.dropbtn').click(function() {
        jQuery('.dropdown-content').toggleClass('show');
        jQuery('.dropbtn').toggleClass('show');
    });
  });