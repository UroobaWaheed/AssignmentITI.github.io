<?php 

$servername = "localhost";
$username = "root"; /*  username */
$password = ""; /*  password */
$dbname = "rest2";   /*  dbname */

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
        $fullname = $_POST['fullName'];
        $dob = $_POST['dob'];
        $birthcountry = $_POST['birthcountry'];
        $birthcity = $_POST['birthcity'];
        $martial = $_POST['martial'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $qualification = $_POST['qualification'];
        $experience = $_POST['experience'];
        $jobapply = $_POST['jobapply'];
        $resume = $_POST['resume'];
        $terms = $_POST['terms'];
$query = "INSERT INTO `career` (`fullName`, `dob`, `birthcountry`, `birthcity`, `martial`, `gender`,`email`,`phone`,`address`,`qualification`,`experience`,`jobapply`,`resume`,`terms`) 
            VALUES ('.$fullName.', '.$dob.','.$birthcountry.', '.$birthcity.', '.$martial.', '.$gender.', '.$email.', '.$phone.', '.$address.', '.$qualification.', '.$experience.', '.$jobapply.', '.$resume.', '.$terms.')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} else {
    echo json_encode(array("statusCode"=>201));
}

mysqli_close($conn);
?>