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

	<h3>Listados de Películas</h3>


<?php

$username = root;
$password = r00t;
$servername = localhost;
$database = Cine;
$table = Peliculas;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Conexión con la base de datos $database del servidor $servername reali.<br/>";
    $sql = "SELECT * FROM ".$table." ORDER BY Titulo";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result_array = $stmt->fetchAll();
    print "<table border='1px solid grey'>";
    print "<tr>";
    print "<th>";print "CodPelicula";print "</th>";
    print "<th>";print "Titulo";print "</th>";
    print "<th>";print "Año";print "</th>";
    print "</tr>";
    foreach ( $result_array as $linea ) {
        print "<tr>";
        print "<td>";print $linea['CodPelicula'];print "</td>";
        print "<td>";print $linea['Titulo'];print "</td>";
        print "<td>";print $linea['Año'];print "</td>";
        print "</tr>";
    }
    print "</table>";
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>

</body>
</html>
