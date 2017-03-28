<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Selling Form</title>
  <link rel="stylesheet" href="../public/css/style.css">    
</head>
<body>
 <div class="form">
       <ul class="tab-group">
      </ul>
      <div class="tab-content">
        <div id="sign" style="display:inline">   
          <center><h1>Login Form</h1></center>
          
          <form action="sell.php" method="post" name="myForm" onsubmit="return validateForm();">
           <div class="field-wrap">
              <input autofocus name="email" placeholder="E-Mail" type="text"/>
            </div>
          <div class="field-wrap">
           
           <input name="pass" placeholder="Password" type="password"/>
          </div>
          <button type="submit" class="button button-block"/>Login</button>
          
          </form>

        
     
      </div><!-- tab-content -->
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../public/js/index.js"></script>
</body>
</html>
<div>
    or <a href="../public/register.php">register</a> for an account
</div>
