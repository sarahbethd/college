<?php
// Start the session
session_start();


$_SESSION['firstname'] = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$_SESSION['lastname'] = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
$_SESSION['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$_SESSION['phone'] = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$_SESSION['address1'] = filter_var($_POST['address1'], FILTER_SANITIZE_STRING);
$_SESSION['address2'] = filter_var($_POST['address2'], FILTER_SANITIZE_STRING);
$_SESSION['city'] = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
$_SESSION['postalcode'] = filter_var($_POST['postalcode'], FILTER_SANITIZE_STRING);




$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$picture = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// generate password
$passwordtoemail = rand(); // this is just a random 
$passwordencrypted = md5($passwordtoemail); // this is the same number but encrypted


// INSERT

$servername = "localhost";
$username = "sarahbethd";
$password = "Meadows862!";
$dbname = "jaxcode47";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO college_students (firstname, lastname, email, picture, phone, address1, address2, city, state, postalcode, gender, status, password)
VALUES ('{$_SESSION['firstname']}', '{$_SESSION['lastname']}', '{$_SESSION['email']}', '$picture','{$_SESSION['phone']}','{$_SESSION['address1']}','{$_SESSION['address2']}','{$_SESSION['city']}','{$_SESSION['state']}','{$_SESSION['postalcode']}','{$_SESSION['gender']}','{$_SESSION['status']}','{$passwordencrypted}')";

if (mysqli_query($conn, $sql)) {
// send email
 
$to = "sarahbethd@gmail.com";
$subject = "HTML email";

$message = " HELLO
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);



    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>


<img src="uploads/<?=$picture?>" style="width:300px;">