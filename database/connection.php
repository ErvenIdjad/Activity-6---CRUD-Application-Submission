<?php

    DEFINE ('DB_USER', 'root');
    DEFINE ('DB_PASSWORD', '');
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'dbschedule');

    $dbc =  @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR dies ("Could not connect to MYSQL: ".mysqli_connect_error());

?>