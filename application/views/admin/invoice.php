<?php foreach ($transaksi as $data): ?>

<?php endforeach; ?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
  margin-left:auto;
  margin-right:auto;
}
</style>
<div  align=center>
<h2>UPT PUSKESMAS DINOYO <br>
  PUSKESMAS KABUPATEN MALANG</h2>
<label>Jl. M.T.Haryono IX/13 telp : 0341 - 572640</label>
<hr width=60%>
<h3>Laporan Transaksi Obat</h3>
<table>
<tr>
  <th>No</th>
  <th>Lokasi</th>
  <th>Nama Obat</th>
  <th>Kode Obat</th>
  <th>Kategori</th>
  <th>Produsen</th>
  <th>Distributor</th>
  <th>Harga</th>
  <th>Tanggal Keluar</th>
  <th>Jumlah</th>

  <!-- <th></th> -->
</tr>

  <?php
  $number=0;
  foreach ($transaksi as $data):
    $number++;
    ?>
    <tr>

<td><?php echo $number ?></td>
  <td><?php echo $data->lokasi; ?></td>
<td><?php echo $data->nama; ?></td>
<td><?php echo $data->kodeObat; ?></td>
<td><?php echo $data->kategori; ?></td>
<td><?php echo $data->produsen ?></td>
<td><?php echo $data->distributor ?></td>
<td><?php echo $data->harga; ?></td>
<td><?php echo $data->tanggal; ?></td>
<td><?php echo $data->jumlah; ?></td>
</tr>
<?php endforeach; ?>

</table>
</div>
