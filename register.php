

<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From newuser where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO newuser(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: login.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}



if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $sql="SELECT * FROM newuser WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        
        // Store user details in session variables
        $_SESSION['user_id'] = $row['id']; // Assuming 'id' is the column for user ID
        $_SESSION['username'] = $row['firstName']; // Assuming 'firstName' is the column for user's name
        $_SESSION['email'] = $row['email']; // Email is already being stored

        header("Location: homepage.php"); // Redirect to homepage
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
}

?>