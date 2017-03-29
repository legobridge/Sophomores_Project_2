<div class="form">      
      <div class="tab-content">
        <div id="signup" background-color:"white">   
          <h1>Sign Up for Free</h1>
          
          <form action="../public/register.php" method="post" name="myForm" onsubmit="return validate(); required">
          
         
            <div class="field-wrap">
              
              <input autofocus name="email" placeholder="E-Mail*" type="email" required/>
            </div>
        
            <div class="field-wrap">
              
               <input name="name" placeholder="Name*" pattern="[a-z A-Z]{3,}" type="text" required/>
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
          
          <input type="radio" name="gender" value="male" checked> I am Male
          <input type="radio" name="gender" value="female"> I am Female  
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          <p id"message"></p>
          </form>
        </div>
        <div id="log">
        </div>
      </div><!-- tab-content -->
</div> <!-- /form -->
<div>
    or <a href="../public/login.php">login</a> to an account
</div>
