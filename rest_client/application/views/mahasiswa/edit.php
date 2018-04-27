<?php echo form_open('mahasiswa/edit');?>
<?php echo form_hidden('nama',$mahasiswa[0]->nama);?>
 
<table>
    <tr><td>NAMA</td><td><?php echo form_input('',$mahasiswa[0]->nama,"disabled");?></td></tr>
    <tr><td>MATA KULIAH</td><td><?php echo form_input('makul',$mahasiswa[0]->makul);?></td></tr>
    <tr><td>DOSEN</td><td><?php echo form_input('dosen',$mahasiswa[0]->dosen);?>  </td></tr>
    <tr><td>KRS</td><td><?php echo form_input('krs',$mahasiswa[0]->krs);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>