<?php
include 'dbconnection.php';

if(isset($_GET['methid']) && isset($_GET['methe'])) {
    $methid = $_GET['methid'];
    $methtxt = $_GET['methe'];

    try {
        $query = "UPDATE comment SET comment_text = :cmnttxt WHERE id = :cmntid";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':cmntid', $methid);
        $stmt->bindParam(':cmnttxt', $methtxt);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo json_encode(['res' => 'success']);
        } else {
            echo json_encode(['res' => 'error',
                              'message' => 'Invalid request']);
        }
    } catch(PDOException $th) {
        echo json_encode(['error' => $th->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Missing reference']);
}

?>