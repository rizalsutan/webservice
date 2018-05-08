<?php echo form_open('makul/create');?>
<table>
    <tr><td>KODE MAKUL</td><td><?php echo form_input('kdmk');?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama');?></td></tr>
    <tr><td>SKS</td><td><?php echo form_input('sks');?>  </td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('makul','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
