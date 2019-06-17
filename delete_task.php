<?php 

    include ("db.php");

    if (isset($_GET['id'])){
       // echo 'saving';

       $id = $_GET['id'];


       $query = "delete from task where id = $id";
       $result = mysqli_query($conn, $query);

       if(!$result){
           die("Query failed");
       }

       $_SESSION['message'] = 'Task Deleted';
       $_SESSION['message_type'] = 'danger';

       //echo "saved";
       header("Location: index.php");
    }




?>