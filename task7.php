<?php
$servername = "localhost";
$database = "testtask7";
$username = "arsder";
$password = "TestPass123";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("З'єднання невдале: " . mysqli_connect_error());
}
$fp = fopen('FilesFromTasks/task7.csv', 'w');

$result = selectQueryToDatabase($conn, []);
writeToCsv($result,$fp);

fclose($fp);
mysqli_close($conn);


function writeToCsv($result, $fp)
{
    $headers = ['c_name','p_name'];
    fputcsv($fp, $headers);
    foreach ($result as $row) {
        fputcsv($fp, $row);
    }
}

function selectQueryToDatabase($conn, $result)
{
    $res = mysqli_query( $conn,"
                                SELECT c.c_name, p.p_name 
                                FROM products AS p
                                LEFT JOIN associations AS a
                                ON a.p_id = p.p_id
                                LEFT JOIN categories AS c
                                ON c.c_id = a.c_id
                                " , MYSQLI_ASSOC);
    foreach ($res as $row) {
            $result[] = $row;
    }
    return $result;
}



