<?php
    include "../classes/User.php";

    /*
    * create on object
    */
    $user = new User;
    # Note: The $user is the object

    # Call the method
    $user->store($_POST);
    #Note: the #_POST -- holds the data coming from the resiration form (first_name, last_name, username and the password)

    /*
     * $_POST = [ first_name, last_nmae username, password ];
     */

?>