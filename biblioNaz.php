<?php
	$max_width = 100;
	$max_height = 100;
	$per_page = 9;
if (isset($_GET['page'])) {	
	$page = $_GET['page'];
}
	$has_previous = false;
	$has_next = false;
	
	function getPictures() {
		$arr_pictures = array();

		global $page, $per_page, $has_previous, $has_next;
		if ( $handle = opendir("./gal") ) {
			$lightbox = rand();
			//echo '<div class="row">';
			
			$count = 0;
			$skip = $page * $per_page;
			
			if ( $skip != 0 )
				$has_previous = true;
			
			while ( $count < $skip && ($file = readdir($handle)) !== false ) {
				if ( !is_dir($file) && ($type = getPictureType($file)) != '' )
					$count++;
			}
			$count = 0;
			while ( $count < $per_page && ($file = readdir($handle)) !== false ) {
			

				if ( !is_dir($file) && ($type = getPictureType($file)) != '' ) {
					if ( ! is_dir('./gal') ) {
						mkdir('./gal');
					}
					if ( ! file_exists('./gal/'.$file) ) {
						makeThumb( $file, $type );
					}

					list($folder,$extension) =  explode('.',$file);
					
					$arr_pictures[$folder] = '';

					$arr_pictures[$folder] .= '
						<div class="col-md-4 good1">
							<a href="gal/'.$folder.'/"data-folder="'.$folder.'"data-fancybox-group="gallery" title="our special rings">
								<img src="./gal/'.$file.'" alt="ring" class="img-rounded"/>
							</a>'.getInfo($file).'
						</div>';
					$count++;
				}
			}

			//echo '</div>';
			
			while ( ($file = readdir($handle)) !== false ) {
				if ( !is_dir($file) && ($type = getPictureType($file)) != '' ) {
					$has_next = true;
					break;
				}
			}
		}
	return $arr_pictures;
	}

	function getInfo($file) {

		return file_get_contents("./info/".str_replace(array('.jpg','.png'), array('.html','.html'), $file));
	}
	
	function getInfoType($file) {
		
		$split = explode('.', $file); 
		$ext = $split[count($split) - 1];
		if ( preg_match('/html|txt/i', $ext) ) {
			return 'html';
		
		} else {
			return '';
		}
	}

	function getPictureType($file) {
		//echo "<br />archivo:".$file;
		$split = explode('.', $file); 
		$ext = $split[count($split) - 1];
		if ( preg_match('/jpg|jpeg/i', $ext) ) {
			return 'jpg';
		} else if ( preg_match('/png/i', $ext) ) {
			return 'png';
		} else if ( preg_match('/gif/i', $ext) ) {
			return 'gif';
		} else {
			return '';
		}
	}
	
?>
<?php
 require ('header.php')
?>
 <body id="rings">
 <div class="opacity"></div>
	<nav id="top" class="navbar navbar-default navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="col-md-2 logo">
              <a href="../naciramendoza/"><img src="imgs/nazLogo.png"></a>
            </div>
			<div class="col-md-8 secTitle">
				<h1>La biblioteca de Naz</h1>
			</div>
		</div>
	</nav>
<div id="ringCol" class="container">
		<?php 

		$arr_order = getPictures(); 
		ksort($arr_order,SORT_NUMERIC);

		echo '<div class="row">';
		foreach($arr_order as $img)
		{
			echo $img;
		}
		echo '</div>';

		?>
		 
		<?php
		if ( $has_previous )
			echo '<a class="prev" href="?page='.($page - 1).'">&larr; Previous Page</a>';

		if ( $has_next )
			echo '<a class="next" href="?page='.($page + 1).'">Next Page &rarr;</a>';
		?>
</div>


<?php 
 require ('footRings.php')
?>