<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_FILES["myfile"]))
    {
        $file = $_FILES["myfile"];
        print_r($file);
        $filename = $file["name"];
        $tempname = $file["tmp_name"];
        $folder = "./data/".$filename;
        echo "File name: $filename<br>";
        echo "File type: {$file['type']}<br>";
        echo "File size: {$file['size']} bytes<br>";

        // Check if the file is uploaded successfully
        if (move_uploaded_file($tempname, $folder)) {
            echo "File uploaded successfully: <a href='$folder'>$filename</a>";
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "No file uploaded.";
    }
    ?>
</body>
</html>