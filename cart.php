
<!-- connection to database-->
<?php

include 'dbh.php';

?>


<!doctype html>
<html lang="en">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <!-- link to CSS file -->

    <!-- link to external library for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- link for jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>


    <link href="styles.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- page title -->
    <title>Apple: Home </title>
  </head>



  <body>
<!-- This is where the navigation bar starts: No editing needed unless working on shopping cart feature -->
    <nav>

        <div class="menu"> 

            <ul>
                <li><a href="index.php"><i class="fab fa-apple"></i></a></li>
                <li> <a href="#" class="menu-item">Mac</a></li>
                <li> <a href="#" class="menu-item">iPad</a></li>
                <li> <a href="#" class="menu-item">iPhone</a></li>
                <li> <a href="#" class="menu-item">Watch</a></li>
                <li> <a href="#" class="menu-item">TV</a></li>
                <li> <a href="#" class="menu-item">Music</a></li>
                <li> <a href="#" class="menu-item">Support</a></li>
                <li> <a href="#" id="search"><i class="fas fa-search"></i></a></li>
                <li class="cart"> <a name="basket" href="#" ><i class="fas fa-shopping-bag"></i><spam>0</spam></a></li>



            </ul>

            <!-- search bar -->
            <div class="search-form">
                <form action="search.php" method="POST" name="submit-search">
                    <input type="text" name="search" placeholder="Search apple.com">
                </form>
            </div>

            <a class="close"><i class="fa fa-times"></i></a>

        </div>
    </nav>

    <!--  Navigation bar ending -->


    <!-- shadow effect for search bar -->
    <div class="shadow">
        </div>

    

    <!-- main body section -->
    <main>
    <div class="content">
        <div class="products-container">
            <div class="product-header">
            
            <h5 class="product-title"> PRODUCT </h5>
            <h5 class="price"> PRICE </h5>
            <h5 class="quantity"> QUANTITY </h5>
            <h5 class="total"> TOTAL </h5>
            </div>
            <div class="products"></div>
        
        </div>
</div>

    </main>

    <!-- main body section ending -->










    <!-- Dont delete anything below here :), feel free to write your script down below -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
 

    <script type="text/javascript">
    
        $(document).ready(function(){
            $('#search').click(function(){
                $('.menu-item').addClass('hide-item')
                $('.search-form').addClass('active')
                $('.close').addClass('active')
                $('#search').hide()
                $('main').addClass('active')
                $('.shadow').addClass('active')
                
            })
            $('.close').click(function(){
                $('.menu-item').removeClass('hide-item')
                $('.search-form').removeClass('active')
                $('.close').removeClass('active')
                $('#search').show()
                $('main').removeClass('active')
                $('.shadow').removeClass('active')
            })
        })
    
    </script>


        <!-- You can start new script from here   -->




        <!-- to here  -->
        <script src="main.js"></script>
    </body>
</html>