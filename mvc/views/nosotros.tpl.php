<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<h1><?=$titulo  ?> </h1>
<p> <?php echo "$contenido"; ?>
</p>


<table>
<tr><th colspan="4">Menu</th></tr>
<tr>
<td><a href="index.php?url=home">H</a><td>
<td><a href="index.php?url=nosotros">N</a><td>
<td><a href="index.php?url=galeria">G</a><td>
<td><a href="index.php?url=contactanos">C</a><td>
</td>
</table>
</body>
</html>