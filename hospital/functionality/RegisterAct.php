<?php
include "../fxn.php";

if (isset($_POST["submit"])) {
    $name = $_POST["hospitalName"];
    $email = $_POST["email"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $phone = $_POST["phone"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $username = $email;
    $password = $phone;
    $res = doThis("INSERT INTO `hospitals`(`hospitalName`, `phoneNumber`, `emailAddress`, `addressLine1`, `addressLine2`, `stateID`, `cityID`, `username`, `password`,  `generatedAt`) 
    VALUES ('$name','$phone','$email','$address1','$address2','$state','$city','$username','$password',CURRENT_TIMESTAMP()) ");

    if ($res) {
?>
        <script>
            alert("Registeration Completed!! Now You Can Login Using Email Id and Phone Number!");
            window.location = "../index.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("There is some Technical Error!!");
            window.location = "../register.php";
        </script>
<?php
    }
}
?>