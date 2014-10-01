<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <title>Validator</title>
    </head>

    <body>
        <h1>Code validator</h1>

        <form method="post">
            <input type="text" value="<?php echo isset($code) ? $code : 'Type a code' ?>" name="code" />
            <input type="submit" value="Check" />
            <?php if (isset($code)): ?>
                <br />
                <?php echo $validIn10 ? 'Valid in 10' : 'Not valid in 10' ?>
                <br />
                <?php echo $validIn13 ? 'Valid in 13' : 'Not valid in 13' ?>
            <?php endif; ?>
        </form>
    </body>
</html>
