<?php

if (isset($_POST['code'])) {
    /**
     * Autoloader...
     */
    function __autoload($className)
    {
        include $className . '.php';
    }

    $code = strip_tags($_POST['code']);

    // Check if the code is valid in reference system 13
    $validator = new \Validator\Number10Validator();
    $validIn10 = $validator->validate($code);

    // Check if the code is valid in reference system 13
    $validator = new \Validator\Number13Validator();
    $validIn13 = $validator->validate($code);
}

// Without front-end...
include 'view.php';

