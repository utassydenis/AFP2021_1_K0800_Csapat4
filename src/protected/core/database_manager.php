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

function delete($query, $params = [])
{
    $connection = get_connection();
    $statement = $connection->prepare($query);
    $success = $statement->execute($params);
    
    
    $statement->closeCursor();
    $connection = NULL;
    
    return $success;
}