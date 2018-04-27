<?php echo form_open('mahasiswa/create');?>
<table>
    <tr><td>NAMA</td><td><?php echo form_input('nama');?></td></tr>
    <tr><td>MATA KULIAH</td><td><?php echo form_input('makul');?></td></tr>
    <tr><td>DOSEN</td><td><?php echo form_input('dosen');?>  </td></tr>
    <tr><td>KRS</td><td><?php echo form_input('krs');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>