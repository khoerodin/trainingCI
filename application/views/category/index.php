<h1>Category</h1>
<hr>
<a href='<?php echo base_url("category/add"); ?>'>ADD</a><br><br>
<table border="1" cellpadding="7" width="600">
    <tr>
    <th>ID</th>
    <th>TITLE</th>
    <th>ACTION</th>
    </tr>
    <?php
        if(!empty($categories)){

            foreach($categories as $category){
                echo "<tr>
                <td>".$category->id."</td>
                <td>".$category->title."</td>
                <td><a href='".base_url("category/edit/".$category->id)."'>EDIT</a> | <a href='".base_url("category/delete/".$category->id)."'>DELETE</a></td>
                </tr>";
            }

        }else{
            echo "<tr><td align='center' colspan='76'>NO DATA FOUND</td></tr>";
        }
    ?>
</table>