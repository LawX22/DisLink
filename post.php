<?php
include 'dbconnection.php';

$user_id = $_POST['user_id'];
$content = $_POST['content'];
$image = $_FILES['image'];

try {
    $filename = time() . '_' . basename($_FILES["image"]["name"]);
    $target_file = './uploads/' . $filename;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $query = "INSERT INTO post (user_id, content, image)
            VALUES (:user_id, :content, :image)";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':user_id', $user_id);
    $statement->bindParam(':content', $content);
    $statement->bindParam(':image', $target_file);
    $res = $statement->execute();

    if ($res) {
        echo json_encode(['res' => 'success']);
    } else {
        echo json_encode(['res' => 'error']);
    }
} catch(PDOException $th) {
    echo json_encode(['error' => $th->getMessage()]);
}

?>
