<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>Parçala Yönet</title>
    <!--<Bootstrap - css>-->
    <link rel="stylesheet" href="lib/css/bootstrap.min.css"/>
    <!--<Custom - css>-->
    <link rel="stylesheet" href="lib/css/custom.css"/>
    <!--<Bootstrap - js>-->
    <link rel="stylesheet" href="lib/js/bootstrap.min.js"/>
</head>
<body>
<?php
/* GET['do'] pages klasöründeki dosya ile aynı olmalıdır. */
$get_page = $_GET['page'];
$folder = $_GET['folder'];
$page = 'pages/'.$folder.''.$get_page.'.php';
if(!$page || !$folder){
    header('Location: index.php?folder=home&page=index');
}else{
    if(is_file($page)){
        require_once($page);
    }else{
        require_once('pages/home/index.php');
    }
}
?>
</body>
</html>
