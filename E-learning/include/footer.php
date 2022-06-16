
<!--start footer section-->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy;2020 || Designed By Anuj kumar sahu || <a href="#"data-toggle= "modal" data-target="#adminLoginModalCenter"> Admin Login</a></small>
</footer>
<!--End footer section-->
<!---Start Student Registration model-->



<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledbd="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <!---Start Student Registration model-->
      <div class="modal-body">
    
      <?php include 'studentregistration.php';?>
  
   </div>
      <div class="modal-footer">
        <span id="successMsg"> </span>
      <button type="submit" class="btn btn-primary" onclick="addstureg()" id="signup">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!---End Student Registration model--->
<!--Start Login model-->
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledbd="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!---Start Login Form--->
      <div class="modal-body">
      <form idf="stulogin "action="" method="post" autocomplete="on">
      
  <div class="form-group">
    <i class="fas fa-envelope"></i>
    <label for="stulogemail" class="pl-2 font-weight-bold">Email </label>
    <input type="email" class="form-control" id="stulogEmail1" name="stulogemail" placeholder="Email">
    <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i>
    <label for="stuLogpass">Password</label>
    <input type="password" class="form-control" id=stulogpass name="stuLogpass">
  </div>
  
  </form>
  <!--End Student Login Form-->
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary"id="stuLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>



<!--End Login model-->
<!--Start Admin login model-->
<!--Start Login model-->




<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledbd="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!---Start Login Form--->
      <div class="modal-body">
      <form idf="adminlogin "action="" method="post" autocomplete="on">
      
  <div class="form-group">
    <i class="fas fa-envelope"></i>
    <label for="adminlogemail" class="pl-2 font-weight-bold">Email </label>
    <input type="email" class="form-control" id="adminlogEmail1" name="admilogemail" placeholder="Email">
    <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i>
    <label for="adminLogpass">Password</label>
    <input type="password" class="form-control" id=adminlogpass name="stuLogpass">
  </div>
  
  </form>
  <!--End admin Login Form-->
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary"id="adminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>



<!--End Login model-->



<!--End Admin login model-->
<!---Student ajax call javascript--->

<script src="js/ajax_request.js" rel="text/javascript">
</script>


<!--End ajax call javascript-->
</body>

</html>