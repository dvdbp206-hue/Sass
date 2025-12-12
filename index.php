<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página com Sass</title>

	<!-- estilo css -->
	<link rel="stylesheet" type="text/css" href="./css/estico.css">
</head>
<body>
<?php 
for ($i = 1; $i < 6; ++$i) {
	?>
<div id="div-especial" class="item-<?= $i ?>"> Item <?= $i ?></div>

	<?php
}

$data = date('d/m/Y');
/*
//echo $data;
switch ($data) {
	case '05/12/2025':
		$tema = "natal";
		break;
	
	default:
		$tema = "padrao";
		break;
}

$mixinTemas ="@include tema($tema);";   */

?>
<div >
testando 
</div>

<h1>Titulo 1</h1>
<h2>Titulo 1</h2>

<hr>

<div class="col-4">
	
	<p class="erro">Mensagem</p>

</div>
</body>
</html>