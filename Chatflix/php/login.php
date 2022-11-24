<?php
require_once("conexao.php");
@$username = trim($_POST["username"]);
@$senha = trim($_POST["password"]);


$sql = "SELECT * FROM cadastro WHERE username='$username' AND senha='$senha'";
$roda = $con->query($sql);

if($roda->num_rows == 1){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['senha'] = $senha;
    header("Location: ../paginas/pgprincipal.html");
    exit(0);

} else{
    header("Location: ../paginas/index.html");
    exit(0);
}
