<?php


// iniciar sessoes
session_start();

//existe um var $_SESSION['user']
if (isset($_SESSION['user'])) {
    // estou logado
    header("location:index.php");
    exit();
}


// o pedido foi feito por um formulário?
if (isset($_POST['username']) && isset($_POST['password'])) {
    // estabelecer a ligacao à bd
    require_once('connect.php');

    $password = $_POST['password'];
    $username = $_POST['username'];

    // preparar uma query
    $ps =  $conn->prepare("SELECT * FROM users WHERE username = ? && pass = ?");

    // executar a query com parametros
    $ps->execute(array($username,$password));

    // o resultado fica referenciado pelo mesmo objecto $ps


    if ($ps->rowCount() == 1) {
       // existe login válido
        $loguser = $ps->fetch(PDO::FETCH_OBJ);
        $_SESSION['user'] = $loguser->username;
        $_SESSION['nomecompleto'] = $loguser->nome . ' ' . $loguser->apelido;        header("location:index.php");
    exit();
    }
}

session_write_close();

?>


<html>
<head>
<style>
label {
    display : inline-block;
    width : 120px;
}

input {
    display : block;
    width : 120px;
    margin-bottom : 10px;
}

</style>
</head>

<body>
PDO
<form action="login.php" method="POST">

<label for="iuser"> username: </label>
<input type="text" id="iuser" name="username"/>

<label for="ipass"> password: </label>
<input type="password" id="ipass" name="password"/>

<input type = "submit" value="login"/>

</form>
</body>



</html>