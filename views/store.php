
<div id="navcol">
    <nav>
        <div id="navigation">
            <ul>
                <a href="../public/store.php?category=books"><li>Books</li></a>
                <a href="../public/store.php?category=clothing"><li>Clothing</li></a>
                <a href="../public/store.php?category=electronics"><li>Electronics</li></a>
                <a href="../public/store.php?category=furniture"><li>Furniture</li></a>
                <a href="../public/store.php?category=sports"><li>Sports</li></a>
                <a href="../public/store.php?category=vehicles"><li>Vehicles</li></a>
                <a href="../public/store.php?category=all"><li>All Items</li></a>
            </ul>
        </div>
    </nav>
</div>
<?php 
   // dump($values);
?>

<div id="storetitle">
    <?php 
       $store_title = "<div id=\"storetitle\">" . $values["title"] . "</div>";
       echo $store_title;
    ?>
</div>

<?php
    $num_values = sizeof($values);
    if ($num_values == 1)
    {
        echo "<div id=\"sorrynoitems\">Sorry, there are no items for sale.</div>";
    }
    else
    {
        $table_header = "<table id=\"storeitems\">\n\t<thead>\n\t\t<tr>\n\t\t\t<th>No.</th>\n\t\t\t<th>Picture</th>\n\t\t\t<th>Item Name</th>\n\t\t\t<th>Item Description</th>\n\t\t\t<th>Price</th>\n\t\t\t<th>College</th>\n\t\t\t<th>Date Added</th>\n\t\t\t<th>Contact</th>\n\t\t</tr>\n\t</thead>\n<tbody>\n";
        echo $table_header;
        $count = 1;
        while ($count < $num_values)
        {
            $name = $values[$count - 1]["name"];
            $store_id = $values[$count - 1]["id"];
            $img_target = "../models/img/" . $store_id;
            if (!file_exists($img_target))
            {
                $img_target = "../models/img/default.jpg";
            }
            $description = $values[$count - 1]["description"];
            $price = $values[$count - 1]["price"];
            $college = $values[$count - 1]["college"];
            $date = $values[$count - 1]["date"];
            $contact = $values[$count - 1]["contact"];
            $table_row = "\t<tr>\n\t<td>" . $count . "</td>\n\t<td><img class='itemimage' src='$img_target'></td>\n\t<td>" . $name . "</td>\n\t<td>" . $description . "</td>\n\t<td>" . $price . "</td>\n\t<td>" . $college . "</td>\n\t<td>" . $date . "</td>\n\t<td>" . $contact . "</td>\n</tr>";
            echo $table_row;
            $count++;
        }
        $table_footer = "\t</tbody>\n</table>\n";
        echo $table_footer;
    }
?>

<!-- End Content -->

<footer>
	<div class="wrapper">
		<div id="footer-info">
			<p>Copyright 2017 OhElEx.</p>
			<p><a href="#">Terms of Service</a> I <a href="#">Privacy</a></p>
		</div>
		<div id="footer-links">
			<ul>
				<li><h5>Company</h5></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Meet The Team</a></li>
				<li><a href="#">What We Do</a></li>
				<li><a href="#">Careers</a></li>
			</ul>
			
		</div>
		<div class="clear"></div>
	</div>
</footer>
<div class="footer" id="footer">
    <center>
        <a href="#top"><button id="back">Back to Top</button></a>
    </center>
</div>

