<?php 
function check_login($conn){

    // Checking if session is set
    if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        //Creating a query for checking if the current user id match any user_id in the database
        $query = "SELECT * FROM users WHERE user_id= '$user_id' LIMIT 1";
        $result= mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    //redirect to login page
    header("Location: admin.php");
    die;
}


?>