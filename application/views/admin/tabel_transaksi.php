<?php
  $this->load->view('template/header');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Barang Keluar
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Tables</li>
        <li class="active"><a href="<?=base_url('admin/tabel_barangkeluar')?>">Tabel Barang Keluar</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-table" aria-hidden="true"></i> Stok Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <a href="<?=base_url('admin/tabel_obat')?>" style="margin-bottom:10px;" type="button" class="btn btn-primary" name="tambah_data"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Transaksi Obat</a>
              <a href="<?=base_url('admin/pdf')?>" style="margin-bottom:10px;" type="button" class="btn btn-danger" name="laporan_data"><i class="fa fa-file-text" aria-hidden="true"></i>Cetak Invoice</a>
              <a href="#" class="btn btn-success" style="margin-bottom:10px;" data-toggle="modal"  data-target="#modal-default"><i class="fa fa-file-text" aria-hidden="true"></i>Cetak Invoice</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
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
                </thead>
                <tbody>

                  <?php
                  $number=0;
                  foreach ($transaksi as $data):
                  $number++;?>
                    <tr>

                <td><?php echo $number; ?></td>
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

                </tbody>
                <tfoot>
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
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Cetak Laporan</h4>
      </div>
      <div class="modal-body">
        <p>Pilih Bulan Transaksi </p>
        <div class="form-group">
                  <select class="form-control">
                    <option value="0">Semua Bulan</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>

                  </select>
                </div>
      </div>
      <div class="modal-footer">


        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

  <!-- /.content-wrapper -->
  <?php
  $this->load->view('template/footer');
?>
