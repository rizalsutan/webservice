<?php echo $this->session->flashdata('hasil');?>
<table>
    <tr><th>&nbsp; NIM &nbsp;</th><th>&nbsp; &nbsp; NAMA &nbsp; &nbsp;</th><th>&nbsp; PROGRAM STUDI &nbsp;</th><th></th></tr>
    <?php
    foreach ($mahasiswa as $m){
        echo "
			  <tr>
              <td align=center>$m->nim</td>
              <td align=center>$m->nama</td>
              <td align=center>$m->prodi</td>
              <td>".anchor('mahasiswa/edit/'.$m->nim,'Edit')."
                  ".anchor('mahasiswa/delete/'.$m->nim,'Delete')."</td>
              </tr>"
			 ;
    }
    ?>
</table>
<a href="http://localhost/rest_client/index.php/mahasiswa/create"> <br>  Tambah Data</a>
<a href="http://localhost/rest_client/"> <br>  Home</a>