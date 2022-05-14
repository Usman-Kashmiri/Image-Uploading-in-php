<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploading in Php</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <input type="submit" value="Upload">
    </form>
    <?php
        if(isset($_FILES['image'])) {
            $file_name = $_FILES['image']['name'];
            $file_type = $_FILES['image']['type'];
            $file_tmpName = $_FILES['image']['tmp_name'];
            $file_size = $_FILES['image']['size'];

            $uploaded = move_uploaded_file($file_tmpName,'images/'.$file_name);
            if ($uploaded) {
                echo "<script>alert('Image has been uploaded successfully')</script>";
            } else {
                echo "<script>alert('Image uploading failed...!')</script>";
            }
        }
    ?>
</body>
</html>