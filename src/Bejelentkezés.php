<?php require_once './protected/config/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?=CHARSET?>">
    <title><?=TITLE?></title>
    <?php if(!empty(CSS)){
        $css_item_count = count(CSS);
        for($i = 0; $i < $css_item_count; $i++){
            echo'<link rel="stylesheet" type="text/css" href="'.CSS_DIR.CSS[$i].'">';
        }
    } ?>
</head>
<body>
    <?php include PROTECTED_DIR . 'BejelentkezésMenu.php';?>
    <?php include PROTECTED_DIR . 'BejelentkezésContent.php';?>
</body>
</html>