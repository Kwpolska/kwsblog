---
layout: page
title: <?php if($_GET['title'] != '') { $title = $_GET['title']; } else { $title = "ModalBox Contents"; } echo $title; ?>
---
<?php
$file = 'http://kwpolska.co.cc/'.$_GET['file'];
if($_GET['mbox'] == 'n') {
   $ch = curl_init(); 
   curl_setopt($ch, CURLOPT_URL, $file); 
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
   echo curl_exec($ch); 
   curl_close($ch);
   echo '<div id="postsftr">End of <strong>'.$file.'</strong>. <a href="'.$file.'" title="ModalBox" onclick="Modalbox.show(this.href, {title: \''.$title.'\', width: 600}); return false;">Open in ModalBox</a>.</div>';
} else {
   echo "<script type=\"text/javascript\">Modalbox.show('$file', {title: '$title', width: 600}); return false;</script>
<div id=\"postsftr\">A ModalBox shall open with this page. <a href=\"http://kwpolska.co.cc/modalbox.php?mbox=n&file=".$_GET['file']."\">Open without ModalBox</a>.</div>";
}
?>