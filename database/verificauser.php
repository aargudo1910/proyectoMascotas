<?php include("../db.php");

    $sql = "SELECT email, usertype, password from users";
    $result = $db-> query($sql);

    if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
                if($row['email'] == $_POST['email'] and $row['password'] == $_POST['password']){
                    if($row['usertype'] == "admin"){
                        include '../admin.php';
                        break;
                    }else if($row['usertype'] == "user"){
                        include '../user.php';
                        break;
                    }
                }
        }
    }else{
        echo "0 result";
    }

?>