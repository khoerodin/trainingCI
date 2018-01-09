<h1>EDIT ARTICLE</h1>
<hr>
<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo validation_errors(); ?></div>
<?php echo form_open("article/edit/".$article->id); ?>
    <table cellpadding="8">
    <tr>
        <td>TITLE</td>
        <td><input type="text" name="input_title" value="<?php echo $article->title; ?>"></td>
    </tr>
    <tr>
        <td>CATEGORY</td>
        <td>
            <select name="input_category">
                <?php
                    if(!empty($categories)){
                        foreach($categories as $category){
                            if ($category->id == $article->category_id) {
                                echo "<option selected value='". $category->id ."' >" . $category->title . "</option>";
                            } else {
                                echo "<option value='". $category->id ."' >" . $category->title . "</option>";
                            }                        
                        }
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>CONTENT</td>
        <td><textarea name="input_content"><?php echo $article->content; ?></textarea></td>
    </tr>
    </table>
    
    <hr>
    <input type="submit" name="submit" value="UPDATE">
    <a href="<?php echo base_url('article'); ?>"><input type="button" value="CANCEL"></a>
<?php echo form_close(); ?>