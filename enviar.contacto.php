<?php

// Defino función para redireccionar
function redirect($url) {
    if(!headers_sent()) {
        //If headers not sent yet... then do php redirect
        header('Location: '.$url);
        exit;
    } else {
        //If headers are sent... do javascript redirect... if javascript disabled, do html redirect.
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
        exit;
    }
	return true;
}
// Fin función para redireccionar

if($_POST['nombre']!='' && $_POST['telefono']!='' && $_POST['email']!='' && $_POST['consulta']!=''):
		
	$nombre		 = strip_tags($_POST['nombre']);
	$telefono		 = strip_tags($_POST['telefono']);
	$email 		 = strip_tags($_POST['email']);
	$consulta  = strip_tags($_POST['consulta']);
	
	//$campo_normal   = strip_tags($_POST['campo_normal']);
	//$campo_normal2  = strip_tags($_POST['campo_normal2']);
	//$campo_checkbox	= $_POST['campo_checkbox'] == 'Y' ? strip_tags($_POST['campo_checkbox']) : 'N'; // o sea chequeado = 'Y', no chequeado = 'N'

			$mailBody ="
				 <html><head></head><body>
				 <p>
				 <font size=5 color='#5a5a5a'><b>Caminos Traslasierra</b></font><br /><br />
				 <font size=3 color='#5a5a5a'><b>Solicitud de cotizacion</b><br /><br /></font>
				 <font size=3 color='#5a5a5a'><b> Nombre:</b></font>
				 <font size=3 color='#333333'> " .$nombre." - &lt;".$email."&gt; </font><br />
					<font size=3 color='#5a5a5a'><b>Telefono:</b></font>
					<font size=3 color='#333333'> " .$telefono."</font><br /><br /><br />
				 <font size=3 color='#5a5a5a'><b>Consulta:</b></font>
				 <font size=3 color='#333333'> " .$consulta."</font><br /><br /><br />
				 </p>
				 </body></html>";
	
					$headers .= "MIME-Version: 1.0 \r\n" ;
					$headers .= "Content-Type:text/html;charset=iso-8859-1 \r\n";
					$headers .= "From:Caminos Traslasierra <contacto@caminostraslasierra.com.ar> \r\n";
			
			//echo $mailBody;
			
			if ( !$envio = mail("violeta.gau@gmail.com", " Consulta desde web Caminos Traslasierra", $mailBody, $headers) ): 
				// Redireccionar a página "error"
				redirect("http://www.caminostraslasierra.com.ar/index.php#contacto?result=error");
			else:
				// Redireccionar a página "todo bien papá"
				redirect("http://www.caminostraslasierra.com.ar/index.php#contacto?result=ok");
			endif;
else:
	redirect("http://www.caminostraslasierra.com.ar/index.php#contacto?result=error");
endif;
?>