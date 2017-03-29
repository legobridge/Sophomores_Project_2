<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up Form</title>
  <link rel="stylesheet" href="../public/css/style.css">
    
</head>

<body>
  <div class="form">
      
     
      
      <div class="tab-content">
        <div id="signup" background-color:"white">   
          <h1>Sign Up for Free</h1>
          
          <form action="/" method="post" name="myForm" onsubmit="return validate(); required">
          
         
            <div class="field-wrap">
              
              <input autofocus name="email" placeholder="E-Mail*" type="email" required/>
            </div>
        
            <div class="field-wrap">
              
               <input name="name" placeholder="Name*" pattern="[a-zA-Z]{3,}" type="text" required/>
            </div>
         

          <div class="field-wrap">
           
            <input name="pass" id="password" placeholder="Password(min 4 char)*" minlength="4" type="password" required/>
          </div>
          
          <div class="field-wrap">
            
            <input name="confirmation" placeholder="Confirm Password(min 4 char)*" minlength="4" type="password" id="confirmed"required/>
          </div>
          
          <div class="field-wrap">
           
            <input name="college" placeholder="College Name*" type="text" required/>
          </div>
          
          <div class="gender">
          <input type="radio" name="gender" value="male" checked> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>  
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          <p id"message"></p>
          </form>
            <center>or <a href="../public/login.php">Log in</a> to an account</center>          
        </div>
        <div id="log">
         
        </div>
      </div><!-- tab-content -->
      
</div> <!-- /form -->


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../public/js/index.js"></script>

</body>
</html>
