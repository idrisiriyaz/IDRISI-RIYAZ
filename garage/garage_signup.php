<?php ?>
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
  <div class="modal fade" id="garage_signup_Modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:25px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="signup_header">Garage SignUp</h4>
        </div>
        <div class="modal-body" style="padding:30px 40px;">
         <form action="" method="post">
            <div class="form-group">
                <label>Garage Name</label>
                <input type="text" name="garage_name" class="form-control" placeholder="your garage name" required>
            </div>
            <div class="form-group">
                <label>Garage Email Id</label>
                <input type="email" name="garage_email" class="form-control" placeholder="demo@gmail.com" required>
            </div>
             <div class="form-group">
                <label>Garage Phone no.</label>
                <input type="number"  name="garage_phoneno" class="form-control" placeholder="phone no" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="garage_pass" class="form-control" placeholder="password" required>
            </div>
            <div class="form-group">
                <label>Garage Area Location</label>
                <select name="locations[]" required>
                
                  <?php
                  
                    include('DBconfig.php');

                    $qr= "SELECT location FROM location";
                    $res = $conn->query($qr);

                    foreach($res as $r)
                    {
                      echo "<option value = ".$r['location'].">".$r['location']."</option>";
                    }

                  ?>

                </select>
            </div>
            <div class="form-group">
                <label>Garage Address</label>
                <textarea name="garage_add"  cols="30" rows="5" required></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="garage_sign_up">Signup</button>
            </div>
            <?php include("garage_signup_code.php"); ?> 
        </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Already have an account? <a data-toggle="modal" data-target="#garage_signin_Modal" data-dismiss="modal">Click here</a></p>

        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#garage_signup_Modal").modal();
  });
});
</script>

</body>
