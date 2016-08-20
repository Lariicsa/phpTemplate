
<div class="ftr">
	<div class="row ftr-mnu">
		<div class="col-md-12 pull"><span>our menu</span></div>
		<div id="op1" class="col-md-3 nopad">
			<a id="ic1" href="diamonds.php">OUR ENHANCED NATURAL <br>DIAMONDS COLLECTION<i></i></a>
		</div>
		<div  class="col-md-2 nopad"><a id="ic2" href="education.php">education<i></i>
			<span class="subies">process</span>
			<span class="subies">advantage</span>
		</a></div>
		<div class="col-md-2 nopad"><a id="ic3" href="ringcollection.php?page=0">ring collection<i></i></a></div>
		<div class="col-md-2 nopad"><a id="ic4" href="about.php">about us<i></i></a></div>
		<div class="col-md-3 nopad"><a id="ic5" href="contactUs.php">contact<i></i></a></div>
	</div>
	<div class="row ftr-mnu2">
		<div class="container">
			<ul>
				<li><a href="faqs.php">FAQ</a></li>
				<li><a href="contactUs.php">contact us</a></li>
				<li><a href="#">privacy policy</a></li>
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
	<div class="panel-controller">
		<div class="tab-controller"> <span class="close"><img src="imgs/down.png"></span> <span class="showe" style="display:none"><img src="imgs/up.png"></span> </div>
	</div>
	<div class="panel-content">
		<div class="col-md-5 respons"><a id="rp1" href="diamonds.php">Our enhanced natural <br>diamonds collection<i></i></a></div>
		<div class="col-md-5 respons"><a id="rp2" href="education.php">education<i></i></a></div>
		<div class="col-md-5 respons"><a id="rp3" href="ringcollection.php?page=0">ring collection<i></i></a></div>
		<div class="col-md-5 respons"><a id="rp4" href="about.php">about us<i></i></a></div>
		<div class="col-md-5 respons"><a id="rp5" href="contactUs.php">contact<i></i></a></div>
	
	</div>
</div>

<!--js-->
<?php
require ('fancy.php')
?>
<script type="text/javascript">
function abrirInicio() {
	function cerrarBarra(){
		return setTimeout(function() {
			$(".ftr-mnu").animate({
				bottom : -210,
				opacity : 1,
			}, 500, function(){
				$(".pull").animate({
					bottom : 210,
					opacity : 1,

				}, 500);
			});
		}, 200);
	}

//var timeOutId;

$(".ftr-mnu").animate({
		bottom : -200,
		opacity : 1,

	}, 500, function(){
		timeOutId = cerrarBarra();
	});
	$(".pull").click(
		function () {
			$(".pull").stop().animate({
				bottom : 210,
				opacity : 1,
			
			}, 500);
	
			$(".ftr-mnu").animate({
				bottom : 0,
				opacity : 1
			}, 500);
			$(".ftr-mnu").mouseleave(function(){
			cerrarBarra();
	});

		}
		
	);
//timeOutId = cerrarBarra();

}//openOn Load

setTimeout(function() {
	
abrirInicio();
}, 500);
//

$( "#ic2" ).mouseenter(function() {
	$(this).animate({height: '260px'});
	$("#ic2 i, a#ic2").addClass('bck');
	$(".ftr-mnu a span").css('display','block');
});
$( "#ic2" ).mouseleave(function() {
	$(this).animate({height: '210px'},{queue: false});
	$("#ic2 i, a#ic2").removeClass('bck');
	$(".ftr-mnu a span").css('display','none');
});

</script>
</body>
</html>
