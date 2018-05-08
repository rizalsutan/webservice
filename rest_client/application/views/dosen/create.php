<?php echo form_open('dosen/create');?>
<table>
    <tr><td>NIP</td><td><?php echo form_input('nip');?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama');?></td></tr>
    <tr><td>KODE MK</td><td><?php echo form_input('kdmk');?>  </td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('dosen','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
