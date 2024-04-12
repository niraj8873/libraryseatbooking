<?php session_start(); 
    $title='Library Seat Booking System';
    include './includes/top.php';
?>
<style>
    .myImg{
        height: 30vh;
    }
    .carousel{
        height: 90vh;
    }
    .cimg{
        height: 90vh;
    }
</style>
    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./includes/asset/images/1.jpg" class="d-block w-100 cimg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./includes/asset/images/2.jpg" class="d-block w-100 cimg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./includes/asset/images/3.jpg" class="d-block w-100 cimg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./includes/asset/images/4.jpg" class="d-block w-100 cimg" alt="...">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Carousel End-->

    <!--Main-->
    <div class="container  my-4">
        <div class="card-group">
            <?php 
                include 'Database/connection.php';
                $sql = 'SELECT * FROM `libraries`';
                $result = $conn->query($sql);
                $count = 0;
                while($row=$result->fetch_assoc()){
                    if($count % 3 == 0){
                        echo'</div>';
                        echo'<div class="card-group">';
                    }
                    
                    echo"
                    <div class='card m-2'>
                        <img src='./uploads/".$row['image']."' class='card-img-top img-thumbnail myImg' alt='...'>
                        <div class='card-body'>
                                <center><h5 class='card-title'><b>".$row["library_name"]."</b></h5>
                                <b><p class='card-text'>".$row["location"]."</p></b>
                                <p class='card-text'><small class='text-body-secondary'>".$row["about"]."</small></p>
                                <a href='./library.php?lib_id=".$row["id"]."'><button type='button' class='btn btn-primary'>Visit: ".$row["library_name"]."</button></a></center>
                        </div>
                    </div>
                    ";
                    
                    $count = $count + 1;
                }
            ?>  
        </div>
    </div>
    <!--Main end-->
<?php
    include './includes/bottom.php';
?>