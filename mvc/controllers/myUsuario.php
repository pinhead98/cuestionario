<?php

$usuario = new Usuario();

$titulo = 'Examen';
$contenido = 'Este es tu Examen';
$variables =array ('titulo'=>$titulo,
				'contenido'=>$contenido);
				
			view ('myUsuario',$variables);
				
