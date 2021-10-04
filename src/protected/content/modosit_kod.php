<?php
$public_functions = ['modosit'];
function get_connection()
{
    $dsn = DB_TYPE.':dbname='.DB_NAME.';host='.DB_HOST;
    $user = DB_USER;
    $password = DB_PASS;
    
    $connection = new PDO($dsn, $user, $password);
    $connection->exec("SET NAMES 'utf8'");
    
    return $connection;
}

function select($query, $row_base = FALSE, $params = [])
{
    $connection = get_connection();
    $statement = $connection->prepare($query);
    $success = $statement->execute($params);
    
     $result = [];
    if ($success === true) 
    {
        if ($row_base === false) {
                    $result = $statement->fetchAll();
        }
        else
        {
            $result = $statement->fetch();
        }
    }
    else
    {
        die('Sikertelen vegrehajtas');
    }
    
    $statement->closeCursor();
    $connection = NULL;
    
    return $result;
}
function modosit(){
    if(!filter_has_var(INPUT_POST, 'submitmodosit') ||
            filter_input(INPUT_POST, 'submitmodosit', FILTER_VALIDATE_INT) != 1){
        require './protected/content/modosit.php';
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
        
        $query = select('UPDATE raktarkeszlet SET kategoria='.$kategoria.', mennyiseg='.$mennyiseg.', mennyisegi_egyseg='.$mennyisegi_egyseg.', ar='.$ar.' WHERE termeknev='.$termeknev.';');
        
        echo 'Sikeres módosítás!';
    }
}

?>