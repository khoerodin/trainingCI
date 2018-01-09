<h1>ADD ARTICLE</h1>
<hr>
<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo validation_errors(); ?></div>
<?php echo form_open("article/add"); ?>
    <table cellpadding="8">
    <tr>
        <td>TITLE</td>
        <td><input type="text" name="input_title" value="<?php echo set_value('input_title'); ?>"></td>
    </tr>
    <tr>
        <td>CATEGORY</td>
        <td><input type="text" name="input_category" value="<?php echo set_value('input_category'); ?>"></td>
    </tr>
    <tr>
        <td>CONTENT</td>
        <td><textarea name="input_content"><?php echo set_value('input_content'); ?></textarea></td>
    </tr>
    </table>
    
    <hr>
    <input type="submit" name="submit" value="SAVE">
    <a href="<?php echo base_url('article'); ?>"><input type="button" value="CANCAL"></a>
<?php echo form_close(); ?>