<?php
use Sanitize\Sanitize;

// side effect: loads a file Saniteze var
require "../src/Sanitize.php";

$clear = new Sanitize();


if(isset($_POST['submit'])){

    $returnSaniteze = $clear->sanitizePost($_POST);
    var_dump($returnSaniteze);    
}


?>
<form action="" method="POST">
    <input type="text" name="texto1">
    
    <button type="submit" name="submit">
        Enviar
    </button>
</form>