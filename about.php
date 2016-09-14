<?php
	include("class.php");
	include("top.php");
	if($_POST){
		chat::login();
	}
	$hm=1;
?>
	<div class="intro">
		<span style="color:#ff0033;"><?php echo !isset($_GET['msg'])?"":$_GET['msg']; ?></span><br />
		<div style="text-align:center;font-size:40px;">
			ICAP CHAT SYSTEM&reg; v1.0
		</div>
	</div>
<?php
	include("foot.php");
?>