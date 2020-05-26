<html>
<head>
<title>Prova download di file</title>
</head>
<body>
<div align="center">
<p>&nbsp;</p>
<a href="getfile.php?<?php echo "name=contaclick"; ?>">Scarica</a> (download <?php @include("conta/contaclick.txt"); ?>, size <?php
$dim = @filesize ("contaclick.zip");

echo $dim . 'KB'; ?>)
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</body>
</html>