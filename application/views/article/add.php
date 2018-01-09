<h1>ADD ARTICLE</h1>
<hr>
<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo validation_errors(); ?></div>
<?php echo form_open("article/add"); ?>
    <table cellpadding="8">
    <tr>
        <td>TITLE</td>
        <td><input type="text" name="input_title"></td>
    </tr>
    <tr>
        <td>CATEGORY</td>
        <td>
            <select name="input_category">
                <?php
                    if(!empty($categories)){
                        foreach($categories as $category){
                            echo "<option value='". $category->id ."' >" . $category->title . "</option>";
                        }
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>CONTENT</td>
        <td><textarea name="input_content"></textarea></td>
    </tr>
    </table>
    
    <hr>
    <input type="submit" name="submit" value="SAVE">
    <a href="<?php echo base_url('article'); ?>"><input type="button" value="CANCAL"></a>
<?php echo form_close(); ?>