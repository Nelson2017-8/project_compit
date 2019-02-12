// document.addEventListener('DOMContentLoaded', function  () {
// 	M.AutoInit();
// })

// Dropdown
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems, {
    // hover: true,
    inDuration: 460,
    alignment: 'right'
  });
});

// sidenav
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {
    inDuration: 460
  });
});

// Scrollspy
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.scrollspy');
  var instances = M.ScrollSpy.init(elems, {
    scrollOffset: 100
  });
});

$("a[href='#']").click(function(event) {
	event.preventDefault();
});