
<?php

$is_float = filter_var("esto no es un float", FILTER_VALIDATE_FLOAT);

$is_int = filter_var("456", FILTER_VALIDATE_INT);

$is_ip = filter_var("127.0.0.0", FILTER_VALIDATE_IP);

$is_email = filter_var("tonyoanthony@gmail.com", FILTER_VALIDATE_EMAIL);

echo "<pre>";
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_email);
echo"</pre>"; 


if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
    echo "Hola " . $_POST["nombre"];
} else {
    echo "<pre>";
    echo "No mandaste nada";
    echo"</pre>";
}

echo "\n";

if (!$is_ip) {
    echo "debes mandar un dirección IP válida";
} else {
    echo "Perfecto, ya validamos tu dirección IP";
}

?>