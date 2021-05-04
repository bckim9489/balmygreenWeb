<!DOCTYPE html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="./js/common.js"></script>
    <script type="text/javascript" src="./js/jquery.fullPage.js"></script>    
    
    <link href="./css/common.css" rel="stylesheet" type="text/css">
    <link href="./css/jquery.fullPage.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>
        BALMYGREEN
    </title>
</head>
<body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <div class ="header">
        <?
            if($_SESSION["USER_ID"]){
                include_once("./memberNav.php");
            } else {
                include_once("./defaultNav.php");
            }
        ?>
    </div>
    <div class ="container">
        <div class ="left" style="">
            <?
                include_once("./sideNav.php");
            ?>
        </div>
        <div class ="ct-frame" id = "ct-frame" style="">