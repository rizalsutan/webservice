<?php echo $this->session->flashdata('hasil');?>
<table>
    <tr><th>&nbsp; NIP &nbsp;</th><th>&nbsp; &nbsp; NAMA &nbsp; &nbsp;</th><th>&nbsp; KODE MK &nbsp;</th><th></th></tr>
    <?php
    foreach ($dosen as $m){
        echo "
			  <tr>
              <td align=center>$m->nip</td>
              <td align=center>$m->nama</td>
              <td align=center>$m->kdmk</td>
              <td>".anchor('dosen/edit/'.$m->nip,'Edit')."
                  ".anchor('dosen/delete/'.$m->nip,'Delete')."</td>
              </tr>"
			 ;
    }
    ?>
</table>
<a href="http://localhost/rest_client/index.php/dosen/create"> <br>  Tambah Data</a>
<a href="http://localhost/rest_client/"> <br>  Home</a>