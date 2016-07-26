<script src='js/jquery-1.10.1.min.js'></script>
<script src='js/jquery.fancybox.js'></script>
<script src='js/infoView.js'></script>
<script src='js/main.js'></script>
<script src='js/all.js'></script>
<script type='text/javascript'>

function UrlExists(url)
{
    var http = new XMLHttpRequest();
    http.open('HEAD', url, false);
    http.send();
    return http.status!=404;
}


 $(document).ready(function(){
 	$(".contact>a").click(function(event){
 		window.location.href = "contactUs.php";
 		 event.preventDefault();
 	});

	$('.good1>a').click(function() {

			var $a = $(this);
				//console.log($a.siblings('h3').html());
			var imagenes = new Array();

			for(var ch = 'b'.charCodeAt(0); ch <= 'e'.charCodeAt(0); ch++ )
			{

				var url_image = $a.prop('href')+ $a.data('folder') +  String.fromCharCode(ch) +'.jpg';

					if(UrlExists(url_image))
					{
						imagenes.push({
								href : url_image,
								title : $a.siblings('h3').html()
							});
					}
			}


				$.fancybox.open(imagenes
				, {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			
				return false;
			});
});
</script>

