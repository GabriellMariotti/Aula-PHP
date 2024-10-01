<?php
    session_start();
    echo "A cor favorita é ". $_SESSION["favcolor"] . "<br>";
    echo "O animal favorito é o ". $_SESSION["favanimal"] . ".";

?>