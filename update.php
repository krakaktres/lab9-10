<?php
    include "configure.php";

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $Name = $_POST['Name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $title = $_POST['title'];
        $created = $_POST['created'];
   

        $sql = "UPDATE contacts SET id='$id', Name='Name', email='$email', phone='$phone', title='$title , created=$created' WHERE id='$id'";

        $result = $conn->query($sql);

    if($result == TRUE){
            echo "Updated record successfully!!!";
        }
        else{
            echo "ERROR!!!". $conn->error;
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM 'contacts' WHERE 'id'='$id'";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
         
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $title = $_POST['title'];
                $created = $_POST['created'];
           
            }

            

        
        }

    }
?>
<!DOCTYPE html>
<html>
<body>
        <h2> LAB ACTIVITY </h2>
        <form action="" method="POST">
        <fieldset>
        <legend> UPDATE CONTACT: </legend>
     
        ID:<br>
        <input type="text" name="id">
        
</br>
        Name:<br>
        <input type="text" name="name">
        
</br>
        email:<br>
        <input type="text" name="email">
</br>
        phone:<br>
        <input type="text" name="phone">
</br>
        title:<br>
        <input type="text" name="title">
</br>
        created:<br>
        <input type="text" name="created">
</br>

        <input type="submit" value="update" name="update"
        </fieldset>
        </form>
</body>
</html>