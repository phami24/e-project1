<?php
include "/xampp/htdocs/e-project1/Config/head.php";
?>
<?php
include "/xampp/htdocs/e-project1/Config/conn.php";
$sql = 'SELECT * FROM post WHERE post_category_id = 4 AND status =1;';

$result = mysqli_query($conn, $sql);
?>
<style>
    .ct {
        background-color: #f8f1ea;

    }
</style>
<div class="ct">
    <!---------- Slide ------------------------->
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner" style="font-size: 2vw">
            <div class="carousel-item active" style="position: relative; font-weight: bold">
                <img src="../img/Banner1.jpg" class="d-block w-100" alt="Banner" />
                <div style="color: #115b15">
                    <p class="banner">
                        Waking up in a place far away, surrounded by only trees and birds
                        Feel the spirit of refreshment, extremely comfortable.
                    </p>
                </div>
            </div>
            <div class="carousel-item" style="position: relative; font-weight: bold">
                <img src="../img/Banner2.jpg" class="d-block w-100 img-fluid" alt="Banner" />
                <div style="color: #f8fbf8">
                    <p class="banner">
                        I love nature this scenery where only nature can help
                        people become relaxed and forget all worries and troubles.
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-------------------------------->

    <div class="container mt-5 mb-5">
        <!-- <div class="container-fluid text-bg-dark mb-5 bg_img ">
            <div class="pt-5 pb-4">
                <p class=" font-monospace text-success h4 text-end">Người trồng cây là những người biết yêu thương người khác.</p>
                <p class=" font-monospace text-success h4">Những chuyến đi về thiên nhiên là cách tái tạo năng lượng và giúp bạn khám phá những điều tuyệt vời trong tự nhiên.</p>
            </div>
        </div> -->
        <div class="sec-title centered">
            <h1 class="text-success">Accessory<h1>
        </div>
        <div class="row mb-2 ">
            <!-- Start PHP code -->
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($post = mysqli_fetch_assoc($result)) {

            ?>
                    <div class="col-sm-6 col-md-4 mb-3">
                        <a href="../../Front-End/View/ChiTietBaiViet.php?id=<?php echo $post['post_id'] ?>" class="card-link nav-link">
                            <div class="card col">
                                <img style="min-height: 250px; max-height:250px" src="../../Admin/img/<?php echo $post['post_img']; ?>" alt="img" class="card-img-top">
                                <div class="card-body text">
                                    <h4 class="card-title " style="min-height: 100px; max-height:100px"><?php echo $post['title'] ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
            <!-- End PHP code -->
        </div>
    </div>

</div>


<?php include "/xampp/htdocs/e-project1/Config/footer.php" ?>