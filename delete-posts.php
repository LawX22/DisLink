<?php
include 'dbconnection.php';

if(isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    try {
        $query = "DELETE FROM post WHERE id = $post_id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo json_encode(['res' => 'success']);
        } else {
            echo json_encode(['res' => 'error',
                              'message' => 'Content not found']);
        }
    } catch (PDOException $th) {
        echo json_encode(['error' => $th->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Missing reference']);
}

?>