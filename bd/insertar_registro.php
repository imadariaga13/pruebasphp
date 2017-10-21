<html>
<head>
  <title>ASIR</title>
  <meta charset="UTF-8">
  <meta name="description" content="Probando bordes">
  <meta name="keywords" content="HTML, CSS, bordes">
  <meta name="author" content="root" >
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  
</head>

<body>

	<h3>Nueva Película</h3>


<?php

if ( !isset($_POST['CodPelicula']) ) {
?>
        
    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post">
        CodPelicula: <input type="text" name="CodPelicula" size="5" /><br/>
        Titulo: <input type="text" name="Titulo" size="80" /><br/>
        Año: <input type="text" name="Año" size="4" /><br/>
        <input type="submit" name="env" value="ENVIAR"/>
    </form>	  
    
<?php    
}
else {
    $username = root;
    $password = r00t;
    $servername = localhost;
    $database = Cine;
    $table = Peliculas; 

try {
    //Conexión con una base de datos del servidor
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión con la base de datos '".$database."' del servidor '".$servername."' realizada.<br/>";
    
    echo "CodPelicula: ".$_POST['CodPelicula']."<br/>";
    echo "Titulo: ".$_POST['Titulo']."<br/>";
    echo "Año: ".$_POST['Año']."<br/>";    
    
    $sql = "INSERT INTO ".$table." VALUES (".$_POST['CodPelicula'].",'".$_POST['Titulo']."',".$_POST['Año'].")";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Película insertada correctamente.<br/>";
    }
catch(PDOException $e) {
    if ($e->getCode() == "23000")
        echo "Imposible insertar el registro porque esa clave ya existe."."<br/>";
    else
        echo $e->getMessage();
}
}    
 //print "<br/><br/><br/>sql: ".$sql;
?>



</body>
</html>
