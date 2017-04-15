  <div class="form">
        <center><h2>Password Change</h2></center>
        <form id="change_pwd" action="/changepwd.php" method="post">
              <div class="field-wrap">
                <label>
                  <span class="req" name="pass">*</span>
                </label>
                <input name="pass" placeholder="   Password" type="password" minlength="4" required/>
              </div>
              
              <div class="field-wrap">
                <label>
                  <span class="req" name="cpass">*</span>
                </label>
                <input name="confirmation" placeholder="   Confirm Password" type="password" minlength="4" required/>
              </div>   
              <button type="submit" class="button button-block"/>Change Password</button>
          </form>
    </div>
