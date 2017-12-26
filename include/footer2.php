<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/scroll.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$(".navbar-toggle").hover(function(){
		var dropdownMenu = $(this).children(".collapsed");
		if(dropdownMenu.is(":visible")){
			dropdownMenu.parent().toggleClass(".collapsed");
		}
	});
});		
</script>

  <script src="dist/wow.js"></script>
  <script src="js/menu.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  
  
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108699516-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108699516-1');
</script>