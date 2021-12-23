<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Christmas Cards Against Humanity";
    break;

    case 'cah.php':
        $title = "Christmas Cards Against Humanity";
    break;

    case 'cah-v.php':
        $title = "V's Hand!";
    break;

    case 'cah-em.php':
        $title = "Em's Hand!";
        break;
    
    case 'cah-ma.php':
        $title = "Mama's Hand!";
        break;

    case 'cah-pa.php':
        $title = "Papa's Hand!";

        break;


    default:
        $title = THIS_PAGE;
        $logo = '';
}

header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<header>

</header>

