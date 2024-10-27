<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subj'];
    $message = $_POST['message'];
    $mailto = "tylerannis55@gmail.com";
    $host = "localhost";
    $db = "mydb";
    $username = "root";

    $connection = mysqli_connect($host, $username, "", $db);

    if (mysqli_connect_errno()) {
        die("Connection Error");
    }

    $sqlstat = "INSERT INTO maps (name, email, subject, message)
                VALUES (?, ?, ?, ?)";

    $stat = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stat, $sqlstat)) {
        die("Error");
    }

    mysqli_stmt_bind_param($stat, "ssss",
                           $name,
                           $email,
                           $subject,
                           $message);

    mysqli_stmt_execute($stat);

    mail($mailto, $subject, $message);
    header("Location: enquiries.php?success");
}
?>
