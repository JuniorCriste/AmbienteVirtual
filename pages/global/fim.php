<?php

session_start();

$_SESSION = array();


if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
?>

<script type="text/javascript">
window.top.location.href = "https://informaticode.store/ambientevirtual/TecnicasDeFilmagem.php?deslogado";
</script>
