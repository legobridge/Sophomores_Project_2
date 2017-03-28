<form id="registration_form" action="../public/register.php" method="post">
    <fieldset>
        <div>
            <input autofocus name="email" placeholder="E-Mail" type="text"/>
        </div>
        <div>
            <input name="name" placeholder="Name" type="text"/>
        </div>
        <div>
            <input name="pass" placeholder="Password" type="password"/>
        </div>
         <div>
            <input name="confirmation" placeholder="Confirm Password" type="password"/>
        </div>
        <div>
            <input name="college" placeholder="College Name" type="text"/>
        </div>
        <div>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
        </div>
        <div>
            <button type="submit">
               Register 
            </button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="../public/login.php">log in</a> to an account
</div>
