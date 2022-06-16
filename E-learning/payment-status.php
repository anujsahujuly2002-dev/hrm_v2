<?php
include "include/header.php";
?>
<?=include 'include/course-banner.php';?>
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group row">
        <label class="offset-sm-3 col-form-label">Order Id:</label>
        <div>
        <input type="text" class="form-control mx-3">
        </div>
        <div>
        <input type="submit" class="btn btn-primary mx-4" value="View">
        </div>
       </div>
    </form> 
</div>
<!--Start contact us-->

<?php 
include ("include/contact-us.php");
?>

<!--End contact us-->
<?php
include 'include/footer.php';
?>