<h1>Article</h1>
<hr>
<a href='<?php echo base_url("article/add"); ?>'>ADD ARTICLE</a><br>
<a href='<?php echo base_url("category/add"); ?>'>ADD CATEGORY</a><br>
<table border="1" cellpadding="7" width="600">
    <tr>
    <th>ID</th>
    <th>TITLE</th>
    <th>CATEGORY</th>
    <th>CONTENT</th>
    <th>ACTION</th>
    </tr>
    <?php
        if(!empty($articles)){

            foreach($articles as $article){
                echo "<tr>
                <td>".$article->id."</td>
                <td>".$article->title."</td>
                <td>".$article->category_id."</td>
                <td>".$article->content."</td>
                <td><a href='".base_url("article/edit/".$article->id)."'>EDIT</a> | <a href='".base_url("article/delete/".$article->id)."'>DELETE</a></td>
                </tr>";
            }

        }else{
            echo "<tr><td align='center' colspan='5'>NO DATA FOUND</td></tr>";
        }
    ?>
</table>