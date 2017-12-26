<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/scroll.js"></script>
<script src="js/lightbox.js"></script>
<!--
<script type="text/javascript">
$(document).ready(function(){
	$(".navbar-toggle").hover(function(){
		var dropdownMenu = $(this).children(".collapsed");
		if(dropdownMenu.is(":visible")){
			dropdownMenu.parent().toggleClass(".collapsed");
		}
	});
});		
</script
-->


<footer>
	<div class="container-fluid">
	 	
		<div class="col-md-2 visible-xs"><p style="color: #908065; font-weight:400; font-size:1.3em;">Inmobiliaria Nueva Costanera S.A. </p></div>
		<div class="col-md-6"><p class="direccionFooter">Av. Nueva Costanera 3802 | Vitacura | Santiago | Chile · T: (56-2) 2246 9363</p></div>
		<!-- <div class="col-md-2"><p>Av. Nueva Costanera 3802</p></div> -->
		
		<div class="col-md-2">
		</div>
		<div class="col-md-2">
			<ul class="menu-rs">
				<!--
<li><img src="img/FB_icon.svg" alt=""></li>
				<li><img src="img/IG_icon.svg" alt=""></li>
-->
			</ul>
		</div>
		<div class="col-md-2 hidden-xs"><img src="img/logo-footer.svg" alt="" class="img-responsive logo-f"></div>
		
		<div class="col-md-12">
			<p class="text-center" style="color:#ababab; padding-top: 30px; font-size: 13px; font-weight:300;">Las imágenes que se muestran fueron elaboradas con fines ilustrativos y las dimensiones son aproximadas, no constituyendo necesariamente una representación exacta de la realidad. Su objetivo es mostrar una caracterización general del
proyecto y no cada uno de sus detalles. Lo anterior se informa en virtud de lo señalado en el n°5 del artículo único de la ley no 19.472. Los precios indicados en las cotizaciones están sujetos a las variaciones normales de mercado</p>
		</div>
		
	</div>
</footer>

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


  
  
