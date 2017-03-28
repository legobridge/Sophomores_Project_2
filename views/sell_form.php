<form id="sell_form" action="sell.php" method="post" enctype="multipart/form-data">
    <fieldset>
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
        <div>
            <input name="name" placeholder="Item Title (Min. length 4 characters)" type="text"/>
        </div>
        <div>
            <input name="description" placeholder="Item Description (Max. length 200 characters)" type="text"/>
        </div>
        <div>
            <input name="contact" placeholder="Contact Info" type="text"/>
        </div>
        <div>
            <input type="radio" name="donate" value="yes" checked> I want to donate<br>
            <input type="radio" name="donate" value="no"> I want to sell<br>
        </div>
        <div>
            <input name="price" placeholder="Your Price (in Rs.)" type="text"/>
        </div>
        <div>
            <input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
        </div>
        <div>Upload Image: 
            <input name="picture" placeholder="Your Image" type="file"/>
        </div>
        <div>
            <button type="submit">
               Post Advertisement
            </button>
        </div>
    </fieldset>
</form>
