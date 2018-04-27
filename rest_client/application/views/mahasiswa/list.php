<?php echo $this->session->flashdata('hasil');?>
<table>
    <tr><th>&nbsp; NAMA &nbsp;</th><th>&nbsp; &nbsp; MATA KULIAH &nbsp; &nbsp;</th><th>&nbsp; DOSEN &nbsp;</th><th>&nbsp; KRS &nbsp;</th><th></th></tr>
    <?php
    foreach ($mahasiswa as $m){
        echo "
			  <tr>
              <td align=center>$m->nama</td>
              <td align=center>$m->makul</td>
              <td align=center>$m->dosen</td>
              <td align=center>$m->krs</td>
              <td>".anchor('mahasiswa/edit/'.$m->nama,'Edit')."
                  ".anchor('mahasiswa/delete/'.$m->nama,'Delete')."</td>
              </tr>"
			 ;
    }
    ?>
</table>
<a href="http://localhost/rest_client/index.php/mahasiswa/create"> <br>  Tambah Data</a>