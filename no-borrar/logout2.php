<?php
    session_start();

    session_unset();

    session_destroy();

    header('localition: /php-login');

?>