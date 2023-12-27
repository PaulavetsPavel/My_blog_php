<?php

// создание сессии
session_start();
require('connect.php');

 //  test
function tt($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    exit();
}

// Проверка выполнения запроса к БД
function dbCheckError($query)
{
    $errInfo = $query->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }

    return true;
}

// Запрос на выборку данных из одной таблицы
function selectAll($table, $params = [])
{
    global $pdo;

    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            // проверка параметра на число
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetchAll();
}

// Запрос на выборку одной строки данных из одной таблицы по параметру
function selectOne($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            // проверка параметра на число
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }

            $i++;
        }

    }
//    $sql = $sql . " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetch();
}

// Запись в таблицу БД
function insert($table, $params)
{
    global $pdo;

    $i = 0;
    $col = '';
    $val = '';
    foreach ($params as $key => $value) {
        if ($i === 0) {
            $col = $col . "$key";
            $val = $val . "'" . $value . "'";
        } else {
            $col = $col . ", $key";
            $val = $val . ", '" . $value . "'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($col) VALUES ($val)";
     $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);

    return $pdo->lastInsertId();
}

// Обновление данных в таблице
function update($table, $id, $params)
{
    global $pdo;

    $i = 0;
    $str = '';
    foreach ($params as $key => $value) {
        if ($i === 0) {
            $str = $str . $key . " = '" . $value . "'";
        } else {
            $str = $str . ", " . $key . " = '" . $value . "'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}

// Удаление строки
function delete($table, $id)
{
    global $pdo;

    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

//$params = [
//    'is_admin' => '1',
//    'user_name' => "Admin",
//    'user_email' => 'admin@test.com',
//    'user_password' => '0000'
//];

// ВЫборка записей (posts) с автором в админку

function selectAllFromPostsWithUsers($table1,$table2){
    global $pdo;

    $sql = "
SELECT 
    t1.id,
    t1.title,
    t1.img,
    t1.content,
    t1.status,
    t1.id_topic,
    t1.created_date,
    t2.user_name
FROM $table1 AS t1 JOIN $table2 AS t2 ON t1.id_user = t2.id";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchAll();
}






























