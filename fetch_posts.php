<?php
include 'dbconnection.php';

try{
    $query = "SELECT post.*, users.* FROM post
            INNER JOIN users ON post.user_id = users.id 
            ORDER BY post.id DESC";
    $statement = $pdo->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    header('Content-type: application/json');
    echo json_encode($result);
}catch (PDOException $th ) {
    echo json_encode(['error' => $th->getMessage()]);
}
?>