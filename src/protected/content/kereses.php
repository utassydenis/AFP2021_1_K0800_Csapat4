<?php
$public_functions = ['kereses'];

require_once CORE_DIR.'database_manager.php';

function kereses(){
    if(!filter_has_var(INPUT_POST, 'submitkeres') ||
            filter_input(INPUT_POST, 'submitkeres', FILTER_VALIDATE_INT) != 1){
        require VIEWS_DIR.'kereses/keres.php';
    }
    else{
        $keresett = '"'.filter_input(INPUT_POST, 'keres').'"';
        
        $keresett = '"'.$_POST['keres'].'"';

        $query = select('SELECT * from raktarkeszlet WHERE termeknev='.$keresett.';');
        
        require_once CONTENT_DIR.'keres_lekerdezes.php';
    }
}

function lista()
{
    
}

?>