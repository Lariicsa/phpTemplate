
<div class="panel-wrapper2">
	<div class="tab-controller2"> <span class="close"><img src="imgs/down.png"></span> <span class="showe" style="display:none"><img src="imgs/up.png"></span> </div>
	<div class="panel-controller2"></div>
	<div class="panel-content2">

		<div class="col-md-3 nopad"><a id="ic1" href="diamonds.php">Our enhanced natural <br>diamonds collection<i></i></a></div>
		<div class="col-md-2 nopad"><a id="ic2" href="education.php">Education<i></i><span class="subies">Bigger Diamonds</span></a></div>
		<div class="col-md-2 nopad"><a id="ic3" href="ringcollection.php?page=0">Ring Collection<i></i></a></div>
		<div class="col-md-2 nopad"><a id="ic4" href="about.php">About Us<i></i></a></div>
		<div class="col-md-3 nopad"><a id="ic5" href="contactUs.php">Contact<i></i></a></div>
	</div>
</div>
	<div class="row ftr-mnu2 bye">
		<div class="container">
			<ul>
				<li><a href="faqs.php">FAQ</a></li>
				<li><a href="contactUs.php">Contact Us</a></li>
				<li class="facebook"><a href="#"></a></li>
				<li class="twitter"><a href="#"></a></li>
				<li class="youtube"><a href="#"></a></li>
			</ul>
			<div class="legal">© 2015 Bigger Diamonds</div>
		</div>
	</div>
</div>
<!--Responsive menu-->
<div class="panel-wrapper">
	<div class="tab-controller"> <span class="close"><img src="imgs/down.png"></span> <span class="showe" style="display:none"><img src="imgs/up.png"></span> </div>
	<div class="panel-controller"></div>
	<div class="panel-content">
		<div class="col-md-5 respons"><a id="rp1" href="diamonds.php">Our enhanced natural <br>diamonds collection</a></div>
		<div class="col-md-5 respons"><a id="rp2" href="education.php">Education</a></div>
		<div class="col-md-5 respons"><a id="rp3" href="ringcollection.php?page=0">Ring Collection</a></div>
		<div class="col-md-5 respons"><a id="rp4" href="about.php">About Us</a></div>
		<div class="col-md-5 respons"><a id="rp5" href="contactUs.php">Contact</a></div>
		<div class="col-md-5 respons"><a id="rp6" href="faqs.php">FAQ<i></i></a></div>
	</div>
	<div class="legal">© 2015 Bigger Diamonds</div>
</div>

<!--js-->
<?php
require ('fancy.php')
?>
<script type="text/javascript">
var ua = navigator.userAgent;
var isiPad = /iPad/i.test(ua);
if ((isiPad)){ 


}else{
	
	$( "#ic2" ).mouseenter(function() {
		$("#ic2 i, span").addClass('bck');
		$(".ftr-mnu a span").css('display','block');
	});
	$( "#ic2" ).mouseleave(function() {
		$("#ic2 i, span").removeClass('bck');
		$(".ftr-mnu a span").css('display','none');
	});
}

</script>
</body>
</html>
