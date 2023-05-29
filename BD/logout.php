<?php
    session_start();
    session_destroy();
    header("location: ../interfaces/iniciar_sesion.html");
    exit();
?>