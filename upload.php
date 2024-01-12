<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $targetDir = "uploads/";  // Directory where you want to save the uploaded photo
        $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the file is an actual image
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            // Check file size (you can modify this as needed)
            if ($_FILES["photo"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
            } else {
                // Allow only certain image file formats (you can modify this as needed)
                if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
                    echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
                } else {
                    // Move the uploaded file to the desired directory
                    if(move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
                        echo "The file ". htmlspecialchars(basename($_FILES["photo"]["name"])). " has been uploaded and saved.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
            }
        } else {
            echo "File is not an image.";
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>
