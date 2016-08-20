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
