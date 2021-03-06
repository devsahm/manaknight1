<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/product-show.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>price List</title>
  </head>
  <body>

  <?php include 'header.php';?>


  <br><br>
<div class="container">
<div class="card">
    <div class="container-fliud">
        <div class="wrapper row">
            <div class="preview col-md-6">
                
                <div class="preview-pic tab-content">
                    <div class="tab-pane active" id="pic-1"><img src="<?= $order['image'] ;?>" /></div>
                    
                </div>

                
            </div>
            <div class="details col-md-6" style="padding: 10;">
                <h3 class="product-title"><?php echo $order['title'] ;?></h3>
               
                </div>
                <p class="product-description"><?php echo $order['description'] ;?></p>
                <h4 class="price">current price: <span>$<?php echo $order['price'] ;?></span></h4>
              
                
                <div class="action">
                    <form action="/paywithstrip" method="post">
                        <input type="hidden" name="price" value="<?php echo $order['price']; ?>">
                        <input type="submit"  value="BUY NOW" name="submitToStrip" class="btn btn-info">
                    </form>
                 
                 
                </div>
            </div>
        </div>
    </div>
</div>
</div>

      



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>