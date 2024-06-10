<?php
include 'dbconnection.php';

$user_id = $_POST['user_id'];
$content = $_POST['content'];
$images = $_FILES['image'];

try {
    $uploaded_files = [];

    if (!empty($images['name'][0])) {
        for ($i = 0; $i < count($images['name']); $i++) {
            $filename = time() . '_' . basename($images["name"][$i]);
            $target_file = './uploads/' . $filename;
            if (move_uploaded_file($images["tmp_name"][$i], $target_file)) {
                $uploaded_files[] = $filename;
            }
        }
    }

    $uploaded_json = json_encode($uploaded_files);
    
    $query = "INSERT INTO post (user_id, content, image)
            VALUES (:user_id, :content, :image)";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':user_id', $user_id);
    $statement->bindParam(':content', $content);
    $statement->bindParam(':image', $uploaded_json);

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
