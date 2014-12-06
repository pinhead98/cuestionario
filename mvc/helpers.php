
<body role="document">

    <!-- Fixed navbar -->
   <?php 
   require 'template/header.php';
   require 'template/menu.php'; 
   
   
   
   ?>
                    
      


<body>
<?php

function view ($plantilla,$variables = array())
{
	extract ($variables);
	require ('views/'.$plantilla.'.tpl.php');
}

function controller ($nombre)
{
		if (empty($nombre))
		
			$nombre='home';
			
			$archivo="controllers/$nombre.php";
			if( file_exists($archivo))
			require ($archivo);
			
			else 
			echo "error archivo no encontrado";
			
		}

?>
</body>
</html>