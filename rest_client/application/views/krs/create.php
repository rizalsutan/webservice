<?php echo form_open('krs/create');?>
<table>
    <tr><td>KODE</td><td><?php echo form_input('kode');?></td></tr>
    <tr><td>NIM</td><td><?php echo form_input('nim');?></td></tr>
    <tr><td>KODE MK</td><td><?php echo form_input('sks');?>  </td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('krs','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
