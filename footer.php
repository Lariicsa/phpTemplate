<div class="row ftr-mnu2">
	<div class="container">
		<ul>
			<li><a href="faqs.php">Noticias</a></li>
			<li><a href="contactUs.php">Contacto</a></li>
			<li class="facebook"><a href="#"></a></li>
			<li class="twitter"><a href="#"></a></li>
			<li class="youtube"><a href="#"></a></li>
		</ul>
		<div class="legal">2016 Nacira Mendoza Pinto ©</div>
	</div>
</div>
<script src="js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/all.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
	$(".menuHome").fadeIn(900);
})

var ua = navigator.userAgent;
var isiPad = /iPad/i.test(ua);
if ((isiPad)) { 

	var maxjeit = $(document).height();
	$('body').css('height', maxjeit);
	console.log('resize')

} else {
	
	var maxjeit = $(document).height();
	$('body').css('height', maxjeit);

	$( window ).resize(function() {
		var maxjeit = $(document).height();
		$('body').css('height', maxjeit);
		$('body').css('overflow-y', 'hidden');
		console.log('resize')
	})
}	
</script>
</body>
</html>