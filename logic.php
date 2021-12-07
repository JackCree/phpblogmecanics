<?php   

    //Elements of connection
    $server = "sql102.epizy.com";
    $username = "epiz_30539641";
    $password = "z24D4A9sQLs";
    $dbname = "epiz_30539641_blog_data";

    //Initialize a database connection
    $conn = mysqli_connect($server,$username,$password,$dbname);

    //Indicate if a database connection is etablished or not
    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Not able to establish database connection</h3>";
    }
    //Get data to display
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);

    //Create a new post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO data(title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);
        // Redirection after the action plus the updated info into url
        header("Location: index.php?info=added");
        exit();
    }
    //Get post from data on respectively vew page
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }
    //Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE data SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=updated");
        exit();
    }
    //Delete a post like the get method
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);

        header("Location: index.php?info=deleted");
        exit();
    }
?>