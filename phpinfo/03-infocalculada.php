<html>
<head>
  <title>infocalculada</title>
  <meta charset="UTF-8">
 
</head>

<body>

<?php   
   
   if($_SERVER['SERVER_ADDR'] > $_SERVER['REMOTE_ADDR']) { 
       echo "Tienes una IP menor que la del servidor al que estas accediendo";
   }
   elseif($_SERVER['SERVER_ADDR'] < $_SERVER['REMOTE_ADDR']) {
       echo "Tienes una IP mayor que la del servidor al que estas accediendo";
   }
   else {
      echo "Estás accediendo desde la máquina del servidor.";
   } 
   
   
?>

</body>
</html>