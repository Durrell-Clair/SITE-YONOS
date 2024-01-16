window.addEventListener('scroll', function() {
  var nav = document.getElementById('scroll-container'),
      navstyle = nav.style;

  if (window.scrollY > 0) {
      navstyle.backgroundColor = 'black';
      navstyle.color = 'white';
  } else {
      navstyle.backgroundColor = 'transparent';
  }
});