<?php echo form_open('makul/edit');?>
<?php echo form_hidden('kdmk',$makul[0]->kdmk);?>
 
<table>
    <tr><td>kdmk</td><td><?php echo form_input('',$makul[0]->kdmk,"disabled");?></td></tr>
    <tr><td>Nama</td><td><?php echo form_input('nama',$makul[0]->nama);?></td></tr>
    <tr><td>SKS</td><td><?php echo form_input('sks',$makul[0]->sks);?>  </td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('makul','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>