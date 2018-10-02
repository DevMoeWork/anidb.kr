<?php
	if(!defined('_ANIDB_')) exit; // 개별 파일 접근 제한.

	include_once(ANI_LAYOUT_PUBLIC_PATH.'/head.sub.php');
	head_metatag('<meta name="viewport" content="width=device-width, initial-scale=1">');
	head_stylesheet('<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/jejugothic.css">'); // 폰트로드
	head_stylesheet('<link rel="stylesheet" href="'.ANI_CSS_URL.'/w3.css">');
	head_stylesheet('<link rel="stylesheet" href="'.ANI_CSS_URL.'/default.css">');
	head_stylesheet('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">');
?>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Anime DB</a>
	 <?php for($i=0; $i<count($genre); $i++): ?>
	 <a href="<?php echo ANI_URL; ?>/g/<?php echo rawurlencode($genre[$i]); ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bookmark fa-fw w3-margin-right"></i><?php echo htmlspecialchars($genre[$i]); ?></a>
	 <?php endfor; ?>
    <a href="https://moe.work" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MOEWORK</a>
    <a href="mailto:keffred@moe.work?subject=CONTACT" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
