<?php
include 'include/header.php';

?>
<!-- start video background-->    
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent ">
    <video playsinline autoplay muted Loop>
      <source src ="video/banvid.mp4"></source>
  </video> 
  <div class="vid-overlay"></div>
  </div>
  <div class="vid-content">
   <h1 class="my-content"> Welcome to iSchool</h1>
   <small class="my-content">Learn and Implement</small></br>
   <a href="#" class="btn btn-danger my-content" data-toggle= "modal" data-target="#stuRegModalCenter">Get started</a>
   <!-- Button trigger modal -->

  </div>
</div>
<!--end video background-->
<!-- Start text banner-->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
  </div>
  <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i>Expert instructor</h5>
  </div>
  <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
  </div>
  <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee*</h5>
  </div>
  
</div>
</div>
<!-- End text banner-->

<!--Start Most Popular Course-->
<div class="container mt-5">
  <h1 class="text-center">Popular Courses</h1>
  <!--Start Most Popular Course 1st Card Check-->
<div class="card-deck mt-4">

<div class="card">
<img src="images/guitter.jpg" class="card-img-top" alt="Guiter"/>
<div class="card-body"> 
<h5 class="card-tittle">Learn Guiter eassy way</h5>
<p class="card-text">Lorem ipsum dolor sit amet consecteter adipicising elit, Facilite, nemo.</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small><span class="font-wight-bloder">&#8377 200</span></p>
  <a class="btn btn-primary text-white font-weight-bloder float-right" href="course-details.php">Enroll</a>

  </div>
</div>


<div class="card">
<img src="images/guitter.jpg" class="card-img-top" alt="Guiter"/>
<div class="card-body"> 
<h5 class="card-tittle">Learn Guiter eassy way</h5>
<p class="card-text">Lorem ipsum dolor sit amet consecteter adipicising elit, Facilite, nemo.</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small><span class="font-wight-bloder">&#8377 200</span></p>
  <a class="btn btn-primary text-white font-weight-bloder float-right" href="#">Enroll</a>
</div>
</div>

<div class="card">
<img src="images/guitter.jpg" class="card-img-top" alt="Guiter"/>
<div class="card-body"> 
<h5 class="card-tittle">Learn Guiter eassy way</h5>
<p class="card-text">Lorem ipsum dolor sit amet consecteter adipicising elit, Facilite, nemo.</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small><span class="font-wight-bloder">&#8377 200</span></p>
  <a class="btn btn-primary text-white font-weight-bloder float-right" href="#">Enroll</a>
</div>
</div>
</a>
</div>

  <!--End Most Popular Course 1st Card Check-->
  <!--Start Most Popular Course 2nd Card Check-->
  <div class="card-deck mt-4">
<a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;" >
<div class="card">
<img src="images/python.png" class="card-img-top" alt="Python"/>
<div class="card-body"> 
<h5 class="card-tittle">Python</h5>
<p class="card-text">Lorem ipsum dolor sit amet consecteter adipicising elit, Facilite, nemo.</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price:<small><del>&#8377 3000</del></small><span class="font-wight-bloder">&#8377 400</span></p><a class="btn btn-primary text-white font-weight-bloder float-right" href="#">Enroll</a>

</div>
</div>
</a>
<a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;" >
<div class="card">
<img src="images/python.png" class="card-img-top" alt="Python"/>
<div class="card-body"> 
<h5 class="card-tittle">Python</h5>
<p class="card-text">Lorem ipsum dolor sit amet consecteter adipicising elit, Facilite, nemo.</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price:<small><del>&#8377 3000</del></small><span class="font-wight-bloder">&#8377 400</span></p><a class="btn btn-primary text-white font-weight-bloder float-right" href="#">Enroll</a>

</div>
</div>
</a>
<a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;" >
<div class="card">
<img src="images/python.png" class="card-img-top" alt="Python"/>
<div class="card-body"> 
<h5 class="card-tittle">Python</h5>
<p class="card-text">Lorem ipsum dolor sit amet consecteter adipicising elit, Facilite, nemo.</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price:<small><del>&#8377 3000</del></small><span class="font-wight-bloder">&#8377 400</span></p>
  <a class="btn btn-primary text-white font-weight-bloder float-right" href="#">Enroll</a>

</div>
</div>
</a>

</div>
  <!--End Most Popular Course 2nd Card Check-->
<div class="text-center m-2">
  <a class="btn btn-danger btn-sm">View All Course</a>
</div>
</div>
<!--End Most Popular courses-->
<!---Start contact-us--->
<?php include 'include/contact-us.php'?>
<!--End contact-us-->
<!-- Start  Student Testimonial-->

       

<!--End Student testimonial-->
<!--start social fallow-->
<div class="container-fluid bg-danger">
<div class="row text-white text-center p-1">
<div class="col-sm">
  <a class="text-white anuj" href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
</div>
<div class="col-sm">
  <a class="text-white anuj" href="#"><i class="fab fa-twitter"></i>Twitter</a>
</div>
<div class="col-sm">
  <a class="text-white anuj" href="#"><i class="fab fa-whatsapp"></i>Whatsapp</a>
</div>
<div class="col-sm">
  <a class="text-white anuj" href="#"><i class="fab fa-instagram"></i>Instagram</a>
</div>

</div>
</div>



<!--end social side fallow-->
<!--Start about section-->
<div class="container-fluid p-4" style="background-color: #E9ECEF;">
<div class="container" style="background-color:E9ECEF;">
<div class="row text-center">
  <div class="col-sm">
    <h2>About us</h2>
    <p>iSchool provides universal access to the world's best education, partnaring with top universites and organisation and offer course online.</p>
  </div>
  <div class="col-sm">
    <h5>Category</h5>
    <a class="text-dark" href="#">Web Development</a><br/>
    <a class="text-dark" href="#">Web designing</a><br/>
    <a class="text-dark" href="#">Android App Development</a><br/>
    <a class="text-dark" href="#">Ios Development</a><br/>
    <a class="text-dark" href="#"> Data Analysis</a><br/>
  </div>
  <div class="col-sm">
    <h5>Contact-Us</h5>
    <p>iSchool Pvt Ltd.<br/>Near Bantahara Kanpur Road<br/>Lucknow<br/>Ph:-9795677890</p>

  </div>
</div>
</div>
</div>
<!--end about section-->
<!--Start footer-->
<?php
include 'include/footer.php';
?>
<!--End footer-->