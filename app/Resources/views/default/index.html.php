<!DOCTYPE html>
<html>
<head>
	<title> Formulário</title>
</head>
<body>

<form action="<?php echo $view['router'] ->path ('index') ?>" method="POST">

	<label>Nome </label>
	<input type="text" name="nome">
	<label> Senha </label>
	<input type="password" name="senha">
	<input type="submit" name="enviar">
</form>

</body>
</html>