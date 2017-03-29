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
          
          <form action="sell.php" method="post" name="myForm">
           <div class="field-wrap">
              <input autofocus name="email" placeholder="E-Mail" type="email" required/>
            </div>
          <div class="field-wrap">
           
           <input name="pass" placeholder="Password" type="password" minlength="4" required/>
          </div>
          <button type="submit" class="button button-block"/>Login</button>
          
          </form>

        
     
      </div><!-- tab-content -->
</div> <!-- /form -->
</body>
</html>
<div>
    or <a href="../public/register.php">register</a> for an account
</div>
