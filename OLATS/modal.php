<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="lost.css">

<body>


        <div class="ones" id="modal">
            
            <span class="close" onclick="closeModal()">&times</span>
            <h1>Order product</h1>
          
            
            <form action="SUBMIT.PHP" method="post">
                <img src="images/banana.png.png" alt="" id="cards"><br>
                <H3 id="modals"></H3>

                <label for="customerName">Customer Name:</label><br>
                <input type="text" name="customerName"><br>

                <label for="customerContact">Contact information:</label><br>
                <input type="text" name="customerContact"><br>



                <label for="">Buy Option:</label><br>
               
                <select name="byOption" id="byOption" onchange="calculated()">

                    <option  value="ProductPiece">Per Piece</option>
            <option  value=" ProductKilo">Per kilo</option>








            
        </select><BR>


        <label for="customerQuantity">QUANTITY:</label><br>
        <input type="text" name="quantity" id="quantity" value="1" onchange="calculated()">

    
            
            <h3> $<span id="totalPrice"></span></h3>

            <input type="hidden" name="ProductId" id="ProductId">
            <input type="hidden" name="price-per-kilo" id="price-per-kilo">
            <input type="hidden" name="price-per-piece" id="price-per-piece">
            














            <button>Submit Order</button>
        </div>
    </div>
         
        </form>
    </div>
</body>
</html>