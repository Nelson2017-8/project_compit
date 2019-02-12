// Chat Start of Tawk.to Script
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5c5946986cb1ff3c14cb2602/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
})();
// End of Tawk.to Script


// Dropdown
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.dropdown-main');
  var instances = M.Dropdown.init(elems, {
    hover: true,
    inDuration: 460,
    alignment: 'right'
  });
});
// floping
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems,{
    toolbarEnabled: true
  });
});
// modal
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems, {
    opacity: 0.8,
  });
});


function showHideSidebar(){
  $(".sidenav").toggleClass("openSidebar");
}
$("#menu-sidebar").click(function() {
  showHideSidebar();
  $("#addClass").toggleClass("left");
});


$(document).ready(function() {
  // MODAL-NP
  $(".modal-btn").click(function() {
    var id = "#"+$(this).attr('data-modal');
      $(id+".modal-np").fadeIn(300, function(){
        $("body").addClass('no-over');
        $(".hide-modal").fadeOut();
      });
    });

  // modal-close
  $(".modal-bg").click(function() {
    // console.log("click");
    $(".modal-np").fadeOut(300, function () {
      $("body").removeClass('no-over');
      $(".hide-modal").fadeIn();
    });
  });
  // select
  $('select').formSelect();

  /* link */
  $('a[href="#"]').click(function (e) {
      e.preventDefault();
  });
  // $('.dropdown-main').dropdown();
});
