<?php

    include "../classes/User.php";

    # Create on object
    $user = new User;

    # Call the login method
    $user->login($_POST);


?>