<?php 

if( isset($_GET['result']) && $_GET['result']!='' ):
	$result = (string)$_GET['result'] == 'ok' ? 'ok' : 'bad';
endif;

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Contacte a Don Gau hoy! no sea marmota</title>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){
	$("form#contacto").validate({
	
		rules: {
			nombre: "required",
			//telefono: "required",
			email: {
				required: true,
				email: true
			}
		},
		errorElement: "em" // te crea un <em>, podés poner otra cosa, y así darle estilo, onda #contacto em { rojo :P }
	});
	$.validator.messages.required = ' Requerido'; //Mensaje default para todos los campos
});
</script>
</head>

<body>
	<form id="contacto" action="enviar.contacto.php" enctype="application/x-www-form-urlencoded" method="post" name="contacto">
	<h2>T&iacute;tulo</h2>
	<h4>Subt&iacute;tulo</h4>
	
<?php if($result==='bad'): ?>
	<div id="error">Error, compruebe que los datos son correctos.</div>
<?php elseif($result==='ok'): ?>
	<div id="exito">&iexcl;Gracias por ponerse en contacto! Nos comunicaremos con Ud a la brevedad.</div>
<?php endif; ?>
	
	<label for="nombre">Su Nombre</label>
		<input id="nombre" style="width: 350px;" type="text" name="nombre" />
	<label for="email">Su Email</label>
		<input id="email" style="width: 350px;" type="text" name="email" />
	<label for="consulta">Su Consulta sobre el viejo de la flaca</label>
		<textarea id="consulta" name="consulta"></textarea>
	
	<!-- Si querés usar un checkbox 
	¿Desea recibir info?
	<input id="campo_checkbox" type="checkbox" name="campo_checkbox" value="Y" />
	-->
	
	<!-- Los botones tienen estilos de bootstrap ;) -->
	<input type="submit" id="enviar" name="enviar" value="Enviar" class="btn btn-primary" /> 
	</form>

</body>
</html>