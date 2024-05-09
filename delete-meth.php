<?php
include 'dbconnection.php';

if(isset($_GET['meth_id'])) {
    $meth_id = $_GET['meth_id'];

    try {
        $query = "DELETE FROM comment WHERE id = $meth_id";
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