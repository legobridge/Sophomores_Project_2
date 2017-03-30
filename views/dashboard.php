<br>
<div id="welcome"> Welcome to OhElEx! </div>
<br>

<?php
    $num_values = sizeof($values);
    if ($num_values == 1)
    {
        echo "<div id=\"sorrynoitems\">Sorry, you have no items for sale</div>";
    }
    else
    {
        $table_header = "<table id=\"myitems\">\n\t<thead>\n\t\t<tr>\n\t\t\t<th>No.</th>\n\t\t\t<th>Picture</th>\n\t\t\t<th>Item Name</th>\n\t\t\t<th>Item Description</th>\n\t\t\t<th>Price</th>\n\t\t\t<th>Date Added</th>\n\t\t </tr>\n\t</thead>\n<tbody>\n";
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
            $date = $values[$count - 1]["date"];
            $table_row = "\t<tr>\n\t<td>" . $count . "</td>\n\t<td><img src='$img_target'></td>\n\t<td>" . $name . "</td>\n\t<td>" . $description . "</td>\n\t<td>" . $price . "</td>\n\t<td>" . $date . "</td>\n</tr>\n";
            echo $table_row;
            $count++;
        }
        $table_footer = "</tbody>\n</table>\n";
        echo $table_footer;
    }
?>
