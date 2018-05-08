<?php echo $this->session->flashdata('hasil');?>
<table>
    <tr><th>&nbsp; KODE MK &nbsp;</th><th>&nbsp; &nbsp; NAMA &nbsp; &nbsp;</th><th>&nbsp; SKS &nbsp;</th><th></th></tr>
    <?php
    foreach ($makul as $m){
        echo "
			  <tr>
              <td align=center>$m->kdmk</td>
              <td align=center>$m->nama</td>
              <td align=center>$m->sks</td>
              <td>".anchor('makul/edit/'.$m->kdmk,'Edit')."
                  ".anchor('makul/delete/'.$m->kdmk,'Delete')."</td>
              </tr>"
			 ;
    }
    ?>
</table>
<a href="http://localhost/rest_client/index.php/makul/create"> <br>  Tambah Data</a>
<a href="http://localhost/rest_client/"> <br>  Home</a>