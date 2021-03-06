<?php
require "lib/password.php";

echo "Test for functionality of compat library: " . (PasswordCompat\binary\check() ? "Pass" : "Fail");
echo "\n";

$hash = password_hash('test', PASSWORD_BCRYPT);

echo $hash;

echo "\n";
echo password_verify('test', $hash);

#-------------------------------------------------------
# Crear usuario
$userPass = 'test';
$passHash = password_hash($userPass, PASSWORD_BCRYPT);
#Guardar en BD $passHash

#-------------------------------------------------------
# Validar formulario de acceso
$userPassInput = 'test';

#Consultar hash en BD
var_dump(password_verify($userPassInput, $passHash));
var_dump(password_verify('test0', $passHash));
var_dump(password_verify('test1', $passHash));

?>