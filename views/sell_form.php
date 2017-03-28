<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link rel="stylesheet" href="../public/css/style.css">    
</head>
<body>
 <div class="form">
       <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
      </ul>
      <div class="tab-content">
        <div id="sign" style="display:inline">   
          <h1>Sign Up for Free</h1>
          
          <form action="sell.php" method="post" name="myForm" onsubmit="return validateForm();">
          
           <div>
            <select name="category">
            <option selected disabled hidden>Select Category</option>
            <option value="books">Books</option>
            <option value="clothing">Clothing</option>
            <option value="electronics">Electronics</option>
            <option value="furniture">Furniture</option>
            <option value="sports">Sports</option>
            <option value="vehicles">Vehicles</option>
            <option value="others">Others</option>
           </select>
           </div>
          
           <div class="field-wrap">
    
              <input autofocus name="name" placeholder="Item Title (Min. length 4 characters)" type="text"/>
            </div>
          

          <div class="field-wrap">
           
           <input name="contact" placeholder="Contact Info" type="text"/>
          </div>
          
          <div class="field-wrap">
            
            <input name="price" placeholder="Your Price (in Rs.)" type="text"/>
          </div>
          
          <div class="field-wrap">
           <textarea name="description" form="myform">Item Description (Max. length 200 characters)</textarea>
          </div>
          
          <div class="gender">
           <input type="radio" name="donate" value="yes" checked> I want to donate<br>
            <input type="radio" name="donate" value="no"> I want to sell<br>
          </div>
          <div class="field-wrap">
          <input name="picture" placeholder="Your Image" type="file"/>          
          </div>
          <button type="submit" class="button button-block"/>Post Advertisement</button>
          
          </form>

        
     
      </div><!-- tab-content -->
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../public/js/index.js"></script>
</body>
</html>
