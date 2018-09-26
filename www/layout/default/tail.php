<?php
	if(!defined('_ANIDB_')) exit; // 개별 파일 접근 제한.
?>

<div class="w3-black w3-center w3-padding-24">
Source by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a><br>
Powered by <a href="https://moe.work" target="_blank" class="w3-hover-opacity">MOEWORK ENTERTAINTMENT</a></div>
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
<?php
	include_once(ANI_LAYOUT_PUBLIC_PATH.'/tail.sub.php');
?>