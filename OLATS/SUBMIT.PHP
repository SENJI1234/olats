<?php


//SEVER,USER,PASS,DATABASE//



$server = "localhost";
$user = "root";
$password = "";
$database = "angielo_customer";


//create connection




$conn = mysqli_connect($server,$user,$password,$database);




if(!$conn){
    die("connection failed". mysqli_connect_error() );
}






// we will create a function that will submit database
// customerName customerContact  customerOption customerQuantity

if($_SERVER["REQUEST_METHOD"] == 'POST'){
   
    $customerName =  $_POST['customerName'];
    $customerContact =  $_POST['customerContact'];
    $customerQuantity =  $_POST['customerQuantity'];
    $customerOption =  $_POST['customerOption'];
    

 
   $query = "INSERT INTO `order_list`(`customer_name`, `contact`, `quantity`, `buy_option`) 
   VALUES ('$customerName','$customerContact','$customerQuantity','$customerOption');";




 


 if(mysqli_query($conn,$query)){

    echo "your order is submitted";
 }else{
    echo "Error:".$query. "<br>" .mysqli_error($conn);
 }






}



?>