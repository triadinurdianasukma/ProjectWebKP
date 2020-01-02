<!DOCTYPE html>
<html>

<title>Upload Gambar</title>


<?php 
	echo $error;
	echo form_open_multipart("$scriptaksi");
	echo form_label("Pilih gambar untuk diupload : ");
	echo form_upload("userfile");
	echo "<br>";
	echo form_submit("btnSimpan","$aksi");
 ?>



<!--
<form action="<?php echo base_url('uploadgambar/showform'); ?>" method="post" enctype="multipart/form-data">
                                    <table>
                                        <tr>
                                            <td>Title</td>
                                            <td>:</td>
                                            <td><input type="text" name="title"></td>
                                        </tr>
                                        <tr>
                                            <td>FileImage</td>
                                            <td>:</td>
                                            <td><input type="file" name="product_pic"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" value="Upload Image....."></td>
                                        </tr>
                                    </table>
                                </form>

-->
 </html>