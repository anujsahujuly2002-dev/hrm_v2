<?php
include 'include/header.php'
?>
<!--Start banner-->
<?php include 'include/course-banner.php';?>
<!--End banner-->
<!--Start main content-->
<div class="container mt-5">
    <div class="row">
        <div class ="col-md-4">
            <img src="images/guitter.jpg" class="card-mg-top" alt="Guitter" style="width: 100%;"/>
        </div>
        <div class="col-md-8"> 
            <div class="card-body">
            
                <h5 class="card-title">Course Name:Learn Guiter </h5>
                <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam dignissimos expedita explicabo repudiandae nobis fugiat. Mollitia, velit aut, nobis, blanditiis eos possimus fuga laboriosam quas sapiente laudantium deleniti ducimus</p>
                <p class="card-text">Duration:10Days</p>
                <form action="" method="post">
                    <p class="card-=text d-inline">Price<small><del>&#8377 2000</del></small><span class="font-weight-bloder">&#8377 200</span></p>
                </form>
                <button type="submit" class="btn btn-primary text-white font-weight-bloder float-right" name="buy">Buy Now</button>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Lesson No</th>
                            <th scope="col"> Lesson Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                        <th scope="row">1</th>
                        <th>Introduction</th>

                    </tbody>
                </table>
            </div>
        </div>
</div>
<!--End main content-->
<?php include 'include/footer.php';?>