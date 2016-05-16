<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style type="text/css">
	#content img {
		-webkit-webkit-transition: all ls ease;
		-moz-webkit-transition: all ls ease;
		-ms-webkit-transition: all ls ease;
		-o-webkit-transition: all ls ease;
		transition: all ls ease;
		/*filter: blur(1px);
		-webkit-filter: blur(1px);
		-moz-filter: blur(1px);
		-ms-filter: blur(1px);
		-o-filter: blur(1px);*/
		border: 1px solid #000000;
	}

	#content img:hover {
		-webkit-webkit-transition: all ls ease;
		-moz-webkit-transition: all ls ease;
		-ms-webkit-transition: all ls ease;
		-o-webkit-transition: all ls ease;
		transition: all ls ease;
		filter: blur(0px);
		-webkit-filter: blur(0px);
		-moz-filter: blur(0px);
		-ms-filter: blur(0px);
		-o-filter: blur(0px);
		transform: translateZ(25px) rotate(3deg);
		border: 1px solid #000000;
		box-shadow: 10px 10px 10px rgba(0, 0, 0, .5);
	}
</style>

<section id="festival">
    <div class="wrap">
        <h2><a href="#">Фото галерея</a></h2>
        <div id="content">
        	<ul class="row clearfix">
	            <li class="first"><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li 			 ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="last" ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="first"><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li              ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="last" ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="first"><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li  			 ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="last" ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="first"><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li  			 ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="last" ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="first"><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li  			 ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="last" ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="first"><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li              ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	            <li class="last" ><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/images/gallery/10.jpg">
	            	<img src="<?php echo base_url(); ?>/images/gallery/thumbnail/10.jpg"></a></li>
	        </ul>
        </div>
   	</div>
</section>

<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>/fancybox/jquery.fancybox.pack.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>