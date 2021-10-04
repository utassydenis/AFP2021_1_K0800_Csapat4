<?php

$public_functions = ['lista', 'torol'];

require_once CORE_DIR.'database_manager.php';

function lista(){
    $query = 'SELECT id, termeknev, kategoria, mennyiseg, mennyisegi_egyseg, ar FROM raktarkeszlet';
    $result = select($query);
    require_once VIEWS_DIR.'muveletek/muveletek.php';
}

function get_p()
{
    if(!filter_has_var(INPUT_GET, 'P')){
        die('Helytelen paraméter!');
    }
    
    $id = filter_input(INPUT_GET, 'P', FILTER_VALIDATE_INT);
    if($id === FALSE){
        die('Helytelen paraméter!');
    }
    
    return $id;
}
function torol()
{
    $id = get_p();
    
    $success = delete('DELETE FROM raktarkeszlet WHERE id = :id', ['id' => $id]);
    
    if ($success === TRUE) 
    {
        header('Location:'.BASE_URL);
    }
    else
    {
        die('Sikertelen törlés');
    }
}