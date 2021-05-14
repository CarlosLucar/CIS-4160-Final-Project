<!--  DO NOT WRITE NEW CODE ON THIS PAGE  -->


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
    
    <link href="styles.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <title>Apple: Search</title>
  </head>
  <body>

    <nav>

        <div class="menu"> 

            <ul>
                <li><a href="index.php"><i class="fab fa-apple"></i></a></li>
                <li> <a href="mac.php" class="menu-item">Mac</a></li>
                <li> <a href="#" class="menu-item">iPad</a></li>
                <li> <a href="#" class="menu-item">iPhone</a></li>
                <li> <a href="#" class="menu-item">Watch</a></li>
                <li> <a href="#" class="menu-item">TV</a></li>
                <li> <a href="#" class="menu-item">Music</a></li>
                <li> <a href="#" class="menu-item">Support</a></li>
                <li> <a href="#" id="search"><i class="fas fa-search"></i></a></li>
                <li class="cart"> <a name="basket" href="cart.php" ><i class="fas fa-shopping-bag"></i><spam>0</spam></a></li>


            </ul>
            <div class="search-form">
                <form action="search.php" method="POST" name='submit-search'>
                    <input type="text" name="search" placeholder="Search apple.com">
                </form>
            </div>

            <a class="close"><i class="fa fa-times"></i></a>

        </div>
    </nav>

    <div class="shadow">
        </div>
        


    
        <div class="item-container">

        <?php
        
        if(isset($_POST['search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM itemstable WHERE Name LIKE '%$search%' OR  Color LIKE '%$search%' OR
            Image LIKE '%$search%' OR Memory LIKE '%$search%' OR Display LIKE '%$search%' OR Price LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);


            if($queryResult > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<div class=item-box'>
                            <h3> <img class='searchimg' src=images/".$row['Image']."> </h3>
                            <h3 class='pname'>".$row['Name']." </h3>
                            <p> iPhone 12 Pro. 5G. A14 Bionic. Ceramic Shield. LiDAR Scanner. 
                            Advanced Pro camera system. And 4K HDR recording with Dolby Vision.</p>
                            <a class='buy ".$row['id']."' href='items.php'> Buy </a> <hr>        
                        </div>";
                }
            } else{
                echo "Use the tabs above to see more results or try another search term.";
            }
        }
        
        ?>
        </div>

    


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

<script src="main.js"></script>
        
</body>
</html>