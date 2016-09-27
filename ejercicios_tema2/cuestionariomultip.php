<HTML LANG="es">

<HEAD>
   <META CHARSET="UTF-8">
   <TITLE>Formulario simple</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<H1>Formulario simple</H1>

<H2>Tabla multiplicar</H2>

<FORM CLASS="borde" ACTION="tablamultiplicar.php" METHOD="POST">

<P><LABEL>Texto a buscar:</LABEL>
<INPUT TYPE="TEXT" SIZE="40" NAME="numero"></P>

<P><LABEL>Escribe un color para la fila par:</LABEL>
<SELECT NAME="color">
   <OPTION>Rojo
   <OPTION>Azul
   <OPTION>Verde
</SELECT></P>

<P><INPUT TYPE="SUBMIT" NAME="buscar" VALUE="Buscar"></P>

</FORM>

</BODY>
</HTML>
