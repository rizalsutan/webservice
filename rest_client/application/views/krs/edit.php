<?php echo form_open('krs/edit');?>
<?php echo form_hidden('kode',$krs[0]->kode);?>
 
<table>
    <tr><td>KODE</td><td><?php echo form_input('',$krs[0]->kode,"disabled");?></td></tr>
    <tr><td>NIM</td><td><?php echo form_input('nim',$krs[0]->nim);?></td></tr>
    <tr><td>KODE MK</td><td><?php echo form_input('sks',$krs[0]->sks);?>  </td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('krs','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>