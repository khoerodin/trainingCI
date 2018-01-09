<h1>Article</h1>
<hr>
<a href='<?php echo base_url("article/add"); ?>'>ADD</a><br><br>
<table border="1" cellpadding="7" width="600">
    <tr>
    <th>ID</th>
    <th>TITLE</th>
    <th>CATEGORY</th>
    <th>CONTENT</th>
    <th colspan="2">ACTION</th>
    </tr>
    <?php
        if(!empty($articles)){

            foreach($articles as $article){
                echo "<tr>
                <td>".$article->id."</td>
                <td>".$article->title."</td>
                <td>".$article->category."</td>
                <td>".$article->content."</td>
                <td><a href='".base_url("article/edit/".$data->id)."'>EDIT</a></td>
                <td><a href='".base_url("article/delete/".$data->id)."'>DELETE</a></td>
                </tr>";
            }

        }else{
            echo "<tr><td align='center' colspan='76'>NO DATA FOUND</td></tr>";
        }
    ?>
</table>