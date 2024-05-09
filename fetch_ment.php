<?php
include 'dbconnection.php';

$postid = $_GET['id'];

try{
    $query = "SELECT * FROM comment WHERE post_id = :postid ORDER BY id DESC";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':postid', $postid);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    header('Content-type: application/json');
    echo json_encode($result);
}catch (PDOException $th ) {
    echo json_encode(['error' => $th->getMessage()]);
}
?>