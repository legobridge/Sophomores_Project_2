 <div class="form">
       <ul class="tab-group">
        
      </ul>
      <div class="tab-content">
        <div id="sign" style="display:inline">   
          <h1>Sell Your Product</h1>
          
          <form action="sell.php" method="post" name="myForm" onsubmit="return validateForm(); required">
          
           <div>
            <select name="category" id="category">
            <option selected disabled hidden value="">Select Category</option>
            <option value="books">Books</option>
            <option value="clothing">Clothing</option>
            <option value="electronics">Electronics</option>
            <option value="furniture">Furniture</option>
            <option value="sports">Sports</option>
            <option value="vehicles">Vehicles</option>
            <option value="others">Others</option>
           </select>
           </div>
           <br>
           <div class="field-wrap">
    
              <input autofocus name="name" placeholder="Item Title (Min. length 4 characters)" type="text" minlength="4" required/>
            </div>
          

          <div class="field-wrap">
           
           <input name="contact" placeholder="Contact Info" type="text" required/>
          </div>
          
          <div class="field-wrap">
            
            <input name="price" placeholder="Your Price (in Rs.)" type="number" required/>
          </div>
          
          <div class="field-wrap">
           <textarea name="description" form="myform" placeholder="Item Description (Max. length 200 characters)" maxlength="10"></textarea>
          </div>
          
          <div class="gender">
           <input type="radio" name="donate" value="yes" checked> I want to donate<br>
            <input type="radio" name="donate" value="no"> I want to sell<br>
          </div>
          <div class="field-wrap">
          <input name="picture" placeholder="Your Image" class="button button-block" id ="picturebutton"type="file"/>          
          </div>
          <button type="submit" class="button button-block"/>Post Advertisement</button>
          
          </form>

        
     
      </div><!-- tab-content -->
</div> <!-- /form -->
