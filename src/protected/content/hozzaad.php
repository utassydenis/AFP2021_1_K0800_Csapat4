<?php
$public_functions = ['hozzaad'];

require_once CORE_DIR.'database_manager.php';

function hozzaad(){
    if(!filter_has_var(INPUT_POST, 'submithozzaad') ||
            filter_input(INPUT_POST, 'submithozzaad', FILTER_VALIDATE_INT) != 1){
        require VIEWS_DIR.'hozzaadas/hozzaadas.php';
    }
    else{
        
        $termeknev = '"'.filter_input(INPUT_POST, 'termeknev').'"';
        $kategoria = '"'.filter_input(INPUT_POST, 'kategoria').'"';
        $mennyiseg = '"'.filter_input(INPUT_POST, 'mennyiseg').'"';
        $mennyisegi_egyseg = '"'.filter_input(INPUT_POST, 'mennyisegi_egyseg').'"';
        $ara = '"'.filter_input(INPUT_POST, 'ara').'"';
        
        $termeknev = '"'.$_POST['termeknev'].'"';
        $kategoria = '"'.$_POST['kategoria'].'"';
        $mennyiseg = '"'.$_POST['mennyiseg'].'"';
        $mennyisegi_egyseg = '"'.$_POST['mennyisegi_egyseg'].'"';
        $ara = '"'.$_POST['ara'].'"';
        
        $query = select('INSERT INTO raktarkeszlet(termeknev, kategoria, mennyiseg, mennyisegi_egyseg, ar) VALUES('.$termeknev.','.$kategoria.','.$mennyiseg.','.$mennyisegi_egyseg.','.$ara.')');
        
        echo 'Sikeres hozzáadás!';
    }
}

?>