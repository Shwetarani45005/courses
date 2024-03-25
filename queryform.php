<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          #contact{
    position: relative;
}

#contact::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.7;
    background: url('../img2/food1.jpg' );
}

#contact-box{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom:34px ;
}
#contact-box input,
#contact-box textarea{
    width: 100%;
    padding: 0.5rem;
    border-radius: 9px;
    font-size: 1.1rem;
}
#contact-box form{
    width: 40%;
}
#contact-box label{
    font-size: 1.3rem;
}
</style>

</head>
<body>
<section id="contact">
        <h1 class="h-primary" style="align-items: center;" >
            For More Query
        </h1>
        <div id="contact-box">
            <form action="queryform.php" method="post">
                <div  class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name"  placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email"  placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phoneno"  placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Query: </label>
                    <textarea type="text" name="Message"  cols="30" rows="10"></textarea>
                </div>
               
                <input type ="submit" value="Submit" >
            </form>
        </div>
    </section>
    
    <?php
        $conn= mysqli_connect('localhost','root','','project');
        if(!$conn){
            die("Connection failed: ".mysqli_connect_error());
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phoneno"];
            $message=$_POST["Message"];
            
            $query="INSERT into  QUERY (Name ,Email,PhoneNo,Message) VALUES ('$name','$email','$phone','$message')";
           if(mysqli_query($conn,$query)){
            echo "Query Submitted Successfully!";
            echo"<br>";
            echo"Information about the query will be send to your email";
            }
            else{
            echo "Not Submitted";
             }
        }
        ?>
</body>
</html>





  

