<?php

if (isset($_POST['submit'])) { 

    $newFileName = $_POST['filename'];
    if(empty($newFileName)) {
        $newFileName = "designs";
    } else {
        $newFileName = strtolower(str_replace(" ","-", $newFileName));
    } 
    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];
    
    $file = $_FILES['file'];

    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTempName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png");

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if ($fileSize < 2000000) {
                $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "../images/designs/" . $imageFullName;

                include_once "dbh.php";

                if (empty($imageTitle) || empty($imageDesc)) {
                    header("Location: ../designs.php?upload=empty");
                    exit();
                } else {
                    $sql = "SELECT * from designs;";
                    $stmt = mysqli_stmt_init($con);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL Statement failed!";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;

                        $sql = "INSERT INTO designs (titleDesigns, descDesigns, imgFullNameDesigns, orderDesigns) VALUES (?, ?, ?, ?);";
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL Statement failed!";
                        } else {
                            mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
                            mysqli_stmt_execute($stmt);

                            move_uploaded_file($fileTempName, $fileDestination);

                            header("Location: ../designs.php?upload=success");
                        }
                    }
                }
            } else {
                echo "File size is too big!";
                exit();
            }
            
        } else {
            echo "You have an Error!";
            exit();
        }
    } else {
        echo "You Need to upload a proper file type!";

    }

}