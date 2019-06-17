<?php 

    include ("db.php");

    if (isset($_POST['save_task'])){
       // echo 'saving';

       $title = $_POST['title'];
       $description = $_POST['description'];

       //echo $tittle;
       //echo $description;

       $query = "INSERT INTO task (title, description) VALUES ('$title', '$description')";
       $result = mysqli_query($conn, $query);

       if(!$result){
           die("Query failed");
       }

       $_SESSION['message'] = 'Task Saved';
       $_SESSION['message_type'] = 'success';

       //echo "saved";
       header("Location: index.php");
    }




?>