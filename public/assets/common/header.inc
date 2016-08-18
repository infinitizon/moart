<?php
require_once 'core/init.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Moart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="scripts/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="styles/main.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <?php foreach ( $validationEngine_css as $validation ): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>styles/<?php echo $validation; ?>" />
    <?php endforeach; ?>
</head>
<body>