<?php 

$fruits = json_decode(file_get_contents('fruits.json'),true);

//var_dump($fruits)


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lows.css">
</head>
<body>


  <div class="navbar">
     
    <div class="two">
        
        <h2>Shop</h2>
    </div>
    <div class="three">
        
        <h2>Home</h2>
        <h2>About</h2>
        <h2>Contact</h2>
    </div>
  </div>
  
  
  <div class="one" >
      <?php foreach ($fruits as $fruit):?>
      <div class="hi">

        <H1><?=$fruit ['name'];?> </H1>
      
        <img src="images/<?=$fruit ['img'];?>" alt="" id="card">
           
       
        <H3  ><?=$fruit ['price'];?> </H3>
        <button onclick="openModal(this)"
        data-name="<?=$fruit ['name'];?>";
        data-img="images/<?=$fruit ['img'];?>";
        data-price-per-kilo="<?=$fruit ['price_per_kilo'];?>";
        data-price-per-piece="<?=$fruit ['price_per_piece'];?>";
      data-productId="<?=$fruit ['id'];?>";
        
        
        
        
    
        
        
        >Order now</button>
        
        
    </div>


    <?php endforeach?>

    <?php include('modal.php');?>
</div>


   
</body>
</html>

<script>
    function openModal(button){
        const cards = document.getElementById('cards');
        const modal = document.getElementById('modal');
        const Product = button.getAttribute('data-name');
        const ProductKilo = button.getAttribute('data-price-per-kilo');
        const ProductPiece = button.getAttribute('data-price-per-piece');
        const ProductId = button.getAttribute('data-productId');
        const image = button.getAttribute('data-img');


        document.getElementById('cards').src = image;
        document.getElementById('modals').innerText = Product;

        document.getElementById('ProductId').value = ProductId;
        document.getElementById('price-per-kilo').value = ProductKilo;
        document.getElementById('price-per-piece').value = ProductPiece;

        
        
        calculated();
       
        
        
        
        modal.style.display = "grid";
       
    }
    
    function calculated(){
        const quantity = parseInt(document.getElementById('quantity').value);
        
        const byOption =document.getElementById('byOption').value;

   

 let unitPrice;


    if(byOption === "ProductPiece"){
        unitPrice = document.getElementById('price-per-piece').value;

    }else{
        unitPrice = document.getElementById('price-per-kilo').value;
        
    }















    
    const totalPrice = unitPrice * quantity;

    document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
 }
 function closeModal(){
        const modal = document.getElementById('modal');

        modal.style.display = "none";
    };
        


</script>