<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    print "<p>Kaixo " . $_POST['nombre'].". Tu nombre tiene ". strlen($_POST['nombre'])." caracteres.</p>";
    print "<p>Tienes ".(intval(date("Y"))-intval($_POST['añonac']))." años.</p>";
    print "<p>El año que viene tendrás ".(intval($_POST['amigos'])*2)." amigos.</p>";    



?>