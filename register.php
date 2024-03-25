<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<style>
    .container{
    border: 2px solid grey;
    margin: 84px 438px;
    padding: 65px 55px;
    width: 25%;
    border-radius: 20px
}
.formgroup{
    align-items: center;
    text-align: center;
    display: block;
    width: 172px;
    padding: 5px;
    border: 2px ;
    margin: 8px auto;
    font-size: 21px;
}
.container h1{
    text-align: center;
}
.container button{
    display: block;
    width:33%;
    margin: auto;
}
.btn{
    margin:0px 9px;
    background-color: aqua;
    padding: 4px 14px;
    border-radius: 10px;
    font-size: 14px;
    cursor: pointer;
   }
   .btn :hover{
    background-color: gray;

   }
   
</style>
<body>
    <div class="container">
    <h1>Registration</h2>
    <form action="register.php" method="post" class="formgroup">

        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="Phoneno">Phoneno:</label>
        <input type="phone" name="Phoneno" required><br><br>

        <label for="password">Password (8-20 characters, with a number):</label>
        <input type="password" name="password" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,20}$" required>  <br><br>

        <label for="subjectcode">SubjectCode:</label>
        <input type="text" name="subjectcode" required><br><br>
        <p>
        <input type ="submit" value="Submit" >
        </p>
    </form>
    </div>
    
    <?php
        $conn= mysqli_connect('localhost','root','','project');
        if(!$conn){
            die("Connection failed: ".mysqli_connect_error());
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["Phoneno"];
            $password = $_POST["password"];
            $subjectcode = $_POST["subjectcode"];

            $query="INSERT into  REGISTRATIONS (Name ,Email ,PhoneNo , PASSWORD ,Subject_Code) VALUES ('$name','$email','$phone','$password','$subjectcode')";
           if(mysqli_query($conn,$query)){
            echo "Submitted Successfully!";
            }
            else{
            echo "Not Submitted";
             }
        }
    
    
    ?>
</body>
</html>