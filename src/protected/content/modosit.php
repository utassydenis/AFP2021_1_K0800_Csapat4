</br>

<html>
    <head>
        <meta charset="utf-8">
        <title>Módosítás</title>
        
    </head>
    <body style="background-color: blue">
            <table style="color: white">
        <thead>
            <tr>
                <th>Terméknév</th>
                <th>Kategória</th>
                <th>Mennyiség</th>
		<th>Mennyiségi egység</th>
		<th>Ár</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form action="" method="POST" accept-charset="UTF-8">
                    <td>
                        <input type="text" name="termeknev" required="required" minlength="2" maxlength="30"/><br/>
                    </td>
                    <td>
                        <input type="text" name="kategoria" required="required" minlength="2" maxlength="30"/><br/>
                    </td>
                    <td>
                        <input type="text" name="mennyiseg" required="required" minlength="1" maxlength="30"/><br/>
                    </td>
                    <td>
                        <input type="text" name="mennyisegi_egyseg" required="required" maxlength="30"/><br/>
                    </td>
                    <td>
                        <input type="text" name="ara" required="required" minlength="2"><br/>
                    </td>
                    <td>
                        <button type="submit" name="submitmodosit" value="1">Módosít</button>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
    </body>
</html>

<?php

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
            filter_input(INPUT_POST, 'submitmodosit', FILTER_VALIDATE_INT) == 1){
        
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
    else{
        echo("Sikertelen");

    }
}

?>
