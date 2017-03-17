<form action="sell.php" method="post">
    <fieldset>
        <div>
            <input autofocus name="name" placeholder="Item Title (Min. length 4 characters)" type="text"/>
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
            <button type="submit">
               Post Advertisement
            </button>
        </div>
    </fieldset>
</form>
