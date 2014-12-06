<?php

class Usuario {
	
	private $idq;
	private $question;
	private	$answer_c;
	private $answer_i;
	
	
	public function get_question ()
	{

?>
<form action="" method="post" name="preguntas" id="preguntas">
 <table class='table table-striped'>
 <tr><th>Pregunta</th>
 <th>Respuesta</th></tr>
<?php
for ($i=1;$i<11;$i++)
{
$query=mysql_query("SELECT * FROM questions ORDER BY RAND() LIMIT 1")or die (mysql_error());
while ($field=mysql_fetch_array($query)) 
      {
			  $idq= $field['idq'];
			  $question= $field['cuestion'];
			  $ans_c= $field['ans_c'];
			  $ans_i= $field['ans_i'];
			  $ans=rand(0,2);  
			  echo"<tr><td> $question <input type='hidden' value='$idq' name='idq".$i."' > </td>";
			  if ($ans ==1 )
			  {
				  echo"<td><input type='radio' name='resp".$i."' value=$ans_c required='required'>$ans_c
				  		<input type='radio' name='resp".$i."' value=$ans_i required='required'>$ans_i</td></tr> ";
		
        }
		else
		{
			echo"<td><input type='radio' name='resp".$i."' value=$ans_i required='required'>$ans_i
				  		<input type='radio' name='resp".$i."' value=$ans_c required='required'>$ans_c</td></tr> ";
			
		
		}   
		
	  }
	}
echo "</table><input type='submit' value='calificar' name='preg' class='btn btn-success'>";
$cont=0;
if (isset($_POST['preg']) ){
		$cont=0;
		$z=1;
		for ($z==1;$z<=10;$z++)
		{
		
		$idq=$_POST['idq'.$z.''];
		$resp=$_POST['resp'.$z.''];
		$coprobar=mysql_query("select ans_c from questions where idq=$idq") or die (mysql_error());
		$coprobar1=mysql_result($coprobar,0,'ans_c');
		
		if ($resp==$coprobar1)
		{
			$cont=$cont+1;
			}
			
		}
	}
	if ($cont!=0)
	{
	echo"<br><br><div class='alert alert-success'>Acertaste $cont preguntas</div>";
	?>
   
    <?php
  }
	}
}
		?>