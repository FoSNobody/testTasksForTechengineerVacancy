<?php
//woocommerce -- http://testwoocommerce.zzz.com.ua/wordpress/wp-admin/
//login -- arsder
//password -- TestPass123

$servername = "localhost";
$database = "testtask7";
$username = "arsder";
$password = "TestPass123";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("З'єднання невдале: " . mysqli_connect_error());
}


$result = selectQueryToDatabase($conn, []);
print_r($result);
mysqli_close($conn);


function selectQueryToDatabase($conn, $result)
{
    $res = mysqli_query( $conn,"
                                SELECT p.ID,p.post_title,t2.term_id,t2.name
                                FROM wp_terms as t
                                LEFT JOIN wp_term_taxonomy as tt
                                ON tt.parent = t.term_id
                                LEFT JOIN wp_terms as t2
                                ON t2.term_id = tt.term_id
                                INNER JOIN wp_term_relationships as tr
                                ON tr.term_taxonomy_id = t2.term_id
                                LEFT JOIN wp_posts as p 
                                ON p.id = tr.object_id
                                WHERE t.name = 'Test1' 
                                AND tt.taxonomy = 'product_cat'
                                " , MYSQLI_ASSOC);
    foreach ($res as $row) {
        $result[] = $row;
    }
    return $result;
}



