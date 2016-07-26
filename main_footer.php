<div class="ftr">
	<div class="row ftr-mnu">
		<div id="op1" class="col-md-2 nopad">
			<a id="ic1" href="diamonds.php">
				Semblanza
			</a>
		</div>
		<div id="op2"  class="col-md-2 nopad">
			<a id="ic2" href="education.php">
				¿Quién es Naz?
			</a>
		</div> 
		<div id="op3" class="col-md-2 nopad">
			
			<a id="ic3" href="ringcollection.php?page=0">
				Servicios
			</a>
		</div>
		<div id="op4" class="col-md-2 nopad">
			
			<a id="ic4" href="about.php">
				Publicaciones
			</a>
		</div>
		<div id="op5" class="col-md-2 nopad">
			
			<a id="ic5" href="contactUs.php">
				Blog
			</a>
		</div>
		<div id="op1" class="col-md-2 nopad">
			
			<a id="ic1" href="faqs.php">
				Contacto
			</a>
		</div>
	</div>
	<div class="row ftr-mnu2">
		<div class="container">
			<ul>
				<li><a href="faqs.php">FAQ</a></li>
				<li><a href="contactUs.php">contact us</a></li>
			</ul>
		</div>
	</div>
</div>
<!--js-->
<script src="js/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
var ua = navigator.userAgent;
var isiPad = /iPad/i.test(ua);
if ((isiPad)){ 

	var maxjeit = $(document).height();
	$('body').css('height', maxjeit);


}else{
	
	var maxjeit = $(document).height();
	$('body').css('height', maxjeit);
	$( "#ic2" ).mouseenter(function() {
		$("#ic2 i, span").addClass('bck');
		$(".ftr-mnu a span").css('display','block');
	});
	$( "#ic2" ).mouseleave(function() {
		$("#ic2 i, span").removeClass('bck');
		$(".ftr-mnu a span").css('display','none');
	});
	$( "#go1" ).click(function() {
			
		$(this).hide();
		$("#go2").show();

	});
	$( "#go2" ).click(function() {
		$(this).hide();
		$("#go1").show();
	});
}
</script>
</body>
</html>