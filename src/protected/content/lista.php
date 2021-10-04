<?php

$public_functions = ['lista'];

require_once CORE_DIR.'database_manager.php';

function lista(){
    $query = 'SELECT termeknev, kategoria, mennyiseg, mennyisegi_egyseg, ar FROM raktarkeszlet ORDER BY termeknev ASC';
    $result = select($query);
    require_once VIEWS_DIR.'listazas/listazas.php';
}

?>