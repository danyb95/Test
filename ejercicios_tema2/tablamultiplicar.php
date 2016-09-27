<HTML LANG="ES">

<HEAD>
   <TITLE>Tabla de multiplicar</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<H1>Tabla de multiplicar</H1>

<?PHP
   $n = $_REQUEST['numero'];
   $c = $_REQUEST['color'];
   print ("<P>La tabla de multiplicar del $n es:</P>\n");
   echo "<table>";
   for ($i=1; $i<=10; $i++){
   	if($i%2==0){
   	echo"<tr>";   		
   		echo'<td>'.$n."</td>";
   		echo'<td>*</td>';
   		echo'<td>'.$i.'</td><td>=</td>';
   		echo'<td>'.$n*$i."</td></tr>"; 
   	   	
   	}  
   	else{
   	echo"<tr>";   		
   		echo'<td>'.$n."</td>";
   		echo'<td>*</td>';
   		echo'<td>'.$i.'</td><td>=</td>';
   		echo'<td>'.$n*$i."</td></tr>"; 
   	} 
   	}  
   echo"</table>";

?>
[ <A HREF='cuestionariomultip.php'>Nueva búsqueda</A> ]

</BODY>
</HTML>
