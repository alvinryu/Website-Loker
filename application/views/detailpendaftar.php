<div class="well well-lg">
  <div class="container">
    <br>
    <br>
    <h2>Detail Pencari Kerja</h2>
    <span>Detail untuk <b><?php echo $pendaftar->nama; ?></b>.</span>
  </div>
</div>
<div class="container">
  <table class="well table table-bordered">
    <tr>
      <td width="200">Nama</td>
      <td width="1">:</td>
      <td>
        <?php echo $pendaftar->nama; ?>
      </td>
    </tr>
    <tr>
      <td>Email</td>
      <td width="1">:</td>
      <td>
        <?php echo $pendaftar->email; ?>
      </td>
    </tr>
    <tr>
      <td>Pekerjaan yang dicari</td>
      <td width="1">:</td>
      <td>
       <?php echo $pendaftar->pekerjaan; ?>
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td width="1">:</td>
      <td>
        <?php echo $pendaftar->alamat; ?>
      </td>
    </tr>
    <tr>
      <td>
        Resume/Bio
      </td>
      <td width="1">:</td>
      <td>
        <?php echo $pendaftar->resume; ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
        <a href="mailto:<?php echo $pendaftar->email; ?>" class="btn btn-danger">
        <i class="glyphicon glyphicon-envelope"></i>
        Kirim Email</a>
      </td>
    </tr>
  </table>
</div>
