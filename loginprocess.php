<?

session_start();

if($_POST['username']) == '' OR $_POST['password'] == '') {
    $$_SESSION['messagefail'] = '<div class="alert alert-danger" role="alert">
        Invalid login. Please try again.
    </div>';
    header("Location: login.php");
} else {
    //Check login credentials against database
    
    include 'functions.php';



$email = $_POST['username'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM college_students WHERE email = '{$email} AND password = '$password'";


$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result) > 0) {
    //output data of each row
    
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];


$_SESSION['messagesuccess'] = '<div class="alert alert-success" role="alert">

Login sucessful, Welcome to your account.

</div>';

header("Location: dashboard.php");
    
}

} else {
    
}
