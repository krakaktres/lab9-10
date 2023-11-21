<?php
include "configure.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $created = $_POST['created'];

    $sql = "INSERT INTO contacts (`id`, `name`, `email`, `phone`, `title`, `created`) 
            VALUES ('$id', '$name', '$email', '$phone', '$title','$created' )";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "New Acc created successfully!!!";
    } else {
        echo "ERROR!!!" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>

<body>
    <center>
        <h2> LAB ACTIVITY </h2>
        <form action="" method="POST">
            <fieldset>
                <center>
                    <legend> CREATE CONTACT </legend>
                </center>

                <br>

                Id:<br>
                <input type="text" name="id">
                <br>
                Name:<br>
                <input type="text" name="name">
                <br>
                email:<br>
                <input type="text" name="email">
                <br>
                phone:<br>
                <input type="text" name="phone">
                <br>
                title:<br>
                <input type="text" name="title">
                <br>
                created:<br>
                <input type="text" name="created">
                <br>
                <input type="submit" name="submit" value="submit">
            </fieldset>
        </form>
    </center>
</body>

</html>
