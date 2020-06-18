<?php
require __DIR__ . '/bootstrap.php';

if (!empty($_POST)) {

    foreach ($data as $user) {
        
        if ($user['name'] === $_POST['user'] &&
        $user['pass'] === md5($_POST['password'])) {
            $_SESSION['login'] = 1;
            header('Location: http://192.168.64.2/PHP/PHP_JAVASCRIPT/login/locked.php'); // GET
            die();
        }
    }

}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: http://192.168.64.2/PHP/PHP_JAVASCRIPT/login/login.php'); // GET
    die();
}

?>



<form action="http://192.168.64.2/PHP/PHP_JAVASCRIPT/login/login.php" method="post">
<input type="text" name="user"> User Name<br>
<input type="password" name="password"> User Password<br>
<button type="submit">Jungtis</button>
</form>