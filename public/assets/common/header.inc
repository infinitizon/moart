<?php
require_once 'core/init.inc.php';
$fxns = new Functions($dbo);

if(isset($_POST) && isset($_POST['newsletter'])){
    $q_ChkUsr = "SELECT * FROM newsletter WHERE email = :email  ";
    $q_ChkUsr = $dbo->prepare($q_ChkUsr);
    $q_ChkUsr->execute(array(":email" => $_POST['newsletter']));
    $user = $q_ChkUsr->fetchAll(PDO::FETCH_ASSOC);
    if (count($user) < 1) {
        $q_newUsr = "INSERT INTO newsletter (email, create_date) VALUES (:email, NOW())";
        $q_newUsr = $dbo->prepare($q_newUsr);
        $q_newUsr->execute(array(":email" => $_POST['newsletter']));
        $alertMessage = array('type'=>'success', 'message'=>'Email address '.$_POST['newsletter'].' subscribed successfully');
    }else{
        $alertMessage = array('type'=>'warning', 'message'=>'Email subscription already exists');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Moart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo WEB_ROOT; ?>/scripts/jquery-ui/1.12.0/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo WEB_ROOT; ?>/scripts/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="<?php echo WEB_ROOT; ?>/styles/main.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <?php
    if($style_css){
        foreach ( $style_css as $css ){
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>/styles/<?php echo $css; ?>" />
            <?php
        }
    }
    ?>
</head>
<body>