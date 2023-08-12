<?php 
$fullname = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["msg"];
if (empty($fullname))
{
    echo "Name is empty";
}
else if (empty($phone))
{
    echo "Phone number is empty";
}
else if (empty($email))
{
    echo "Email is empty";
}
else if (empty($subject))
{
    echo "Subject is empty";
}
else if (empty($message))
{
    echo "Message is empty";
}
else
{
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y h:i:s');
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) 
    {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
    {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }
    else
    {  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "techsolv_db";
    $conn = new mysqli($servername,$username, $password,$dbname);
    $sql="INSERT INTO contact_form VALUES('$fullname','$phone','$email','$subject','$message','$date','$ip')";
    if ($conn->query($sql) === TRUE)
    {
        echo "Your response has been recorded successfully"."<br>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $to="test@techsolvitservice.com";
    $from = "From:".$email." \r\n";
    $flag= mail($to,$subject,$message,$from);
    if( $flag == true ) 
    {
        echo "Email sent successfully...";
    }
    else 
    {
        echo "Email could not be sent...";
    }
}
?>