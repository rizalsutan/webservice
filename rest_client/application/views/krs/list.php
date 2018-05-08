<?php echo $this->session->flashdata('hasil');?>
<table>
    <tr><th>&nbsp; KODE &nbsp;</th><th>&nbsp; &nbsp; NIM &nbsp; &nbsp;</th><th>&nbsp; SKS &nbsp;</th><th></th></tr>
    <?php
    foreach ($krs as $m){
        echo "
			  <tr>
              <td align=center>$m->kode</td>
              <td align=center>$m->nim</td>
              <td align=center>$m->sks</td>
              <td>".anchor('krs/edit/'.$m->kode,'Edit')."
                  ".anchor('krs/delete/'.$m->kode,'Delete')."</td>
              </tr>"
			 ;
    }
    ?>
</table>
<a href="http://localhost/rest_client/index.php/krs/create"> <br>  Tambah Data <br></a>
<a href="http://localhost/rest_client/"> <br>  Home</a>
<a href="http://localhost/rest_client/index.php/mahasiswa">Daftar Mahasiswa</a>
<a href="http://localhost/rest_client/index.php/dosen">  Daftar Dosen</a>
<a href="http://localhost/rest_client/index.php/makul">  Daftar Mata Kuliah</a>
