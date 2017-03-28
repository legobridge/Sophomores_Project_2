<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Change your Password</title>
  <link rel="stylesheet" href="../public/css/style.css">
    
</head>

<body>
  <div class="form">
          <center><h2>Password Change</h2></center>
    <form id="change_pwd" action="../public/changepwd.php" method="post">
          <div class="field-wrap">
            <label>
              <span class="req" name="pass">*</span>
            </label>
            <input name="pass" placeholder="Password" type="password"/>
          </div>
          
          <div class="field-wrap">
            <label>
              <span class="req" name="cpass">*</span>
            </label>
            <input name="confirmation" placeholder="Confirm Password" type="password"/>
          </div>   
          <button type="submit" class="button button-block"/>Change Password</button>
      </form>
    </div> 
 </body>
 </html>    
