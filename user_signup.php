<head>
  <style>
  .modal-header, .signup_header, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 25px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  </style>
</head>
<body>
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="user_signup_Modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:25px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="signup_header">SignUp</h4>
        </div>
        <div class="modal-body" style="padding:30px 40px;">
         <form action="" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user_name" class="form-control" placeholder="your name">
            </div>
            <div class="form-group">
                <label>Email Id</label>
                <input type="email" name="user_email" class="form-control" placeholder="demo@gmail.com">
            </div>
             <div class="form-group">
                <label>Phone no</label>
                <input type="number" name="user_phoneno" class="form-control" placeholder="phone no">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="user_pass" class="form-control" placeholder="password">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Signup</button>
            </div>
            <?php include("user_signup_code.php"); ?> 
        </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Already have an account? <a data-toggle="modal" data-target="#user_signin_Modal" data-dismiss="modal">Click here</a></p>

        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#user_signup_Modal").modal();
  });
});
</script>

</body>
