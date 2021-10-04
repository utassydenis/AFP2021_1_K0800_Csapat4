<?php require './protected/config/config.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="<?=CHARSET?>">
        <title><?=TITLE?></title>
        
        <?php if(!empty(CSS)){
            $cssItemCount = count(CSS);
            
            for($i = 0; $i < $cssItemCount; $i++){
                echo '<link rel="stylesheet" type="text/css" href="'.CSS_DIR.CSS[$i].'">';
            }
        }?>
        
    </head>
    <body>
        <?php
        
        ?>
        
        <?php include VIEWS_DIR.'header.php'; ?>
        <?php require PROTECTED_DIR.'menu.php'; ?>
        <br>
        <br>
        <?php require PROTECTED_DIR.'content.php'; ?>
        <?php include VIEWS_DIR.'footer.php'; ?>
    </body>
</html>
