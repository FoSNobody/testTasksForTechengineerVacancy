<?php
$servername = "localhost";
$database = "testtask7";
$username = "arsder";
$password = "TestPass123";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("З'єднання невдале: " . mysqli_connect_error());
}

deleteDuplicatedRows($conn);

mysqli_close($conn);

function selectQueryToDatabase($conn)
{
     mysqli_query( $conn,"
                                DELETE test_table
                                FROM test_table 
                                LEFT JOIN (
                                   SELECT id 
                                    FROM test_table 
                                    GROUP BY `key` 
                                    HAVING COUNT(`key`) > 1
                                ) AS duplicate USING (id)
                                WHERE duplicate.id IS NOT NULL
                                " );
}
