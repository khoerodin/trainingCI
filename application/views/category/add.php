<h1>ADD CATEGORY</h1>
<hr>
<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo validation_errors(); ?></div>
<?php echo form_open("category/add"); ?>
    <table cellpadding="8">
    <tr>
        <td>TITLE</td>
        <td><input type="text" name="input_title" value="<?php echo set_value('input_title'); ?>"></td>
    </tr>
    </table>
    
    <hr>
    <input type="submit" name="submit" value="SAVE">
    <a href="<?php echo base_url('category'); ?>"><input type="button" value="CANCAL"></a>
<?php echo form_close(); ?>