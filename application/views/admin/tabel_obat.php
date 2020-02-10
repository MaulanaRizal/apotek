<?php
  $this->load->view('template/header');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Barang Masuk
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Tables</li>
        <li class="active"><a href="<?=base_url('admin/tabel_barangmasuk')?>">Tabel Barang Masuk</li>
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

              <?php if($this->session->flashdata('msg_berhasil_keluar')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil_keluar');?>
               </div>
              <?php } ?>

              <a href="<?=base_url('admin/form_obat')?>" style="margin-bottom:10px;" type="button" class="btn btn-primary" name="tambah_data"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data Obat</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Obat</th>
                  <th>Kode Obat</th>
                  <th>Informasi</th>
                  <th width=5%>Satuan</th>
                  <th>Harga Beli</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Masuk</th>
                  <th>Expired</th>
                  <th width=5%>Aksi</th>
                </tr>
                </thead>
                <tbody>
            <?php $number = 1;
            foreach ($obat as $data) { ?>
                <tr>
                  <td><?php echo $number; ?></td>
                  <td><?php echo $data->nama_obat; ?><br>
                    <?php if ($data->stok<=10) {
                      // code...
                      echo "<span class='badge bg-red'>Stok Obat Kritis</span>";
                    }elseif ($data->stok >10&&$data->stok<=50) {
                      // code...
                      echo "<span class='badge bg-yellow'>Stok Obat Hampir Habis</span>";
                    }else{
                      echo "<span class='badge bg-blue'>Stok Obat Banyak</span>";
                    } ?>
                  </td>
                  <td><?php echo $data->kode_obat ?></td>
                  <td>
                  Kategori Obat : <br>
                  <strong><?php echo $data->kategori; ?></strong> <br>
                  Produsen      : <br>
                  <strong><?php echo $data->produsen; ?></strong> <br>
                  Distributor   : <br>
                  <strong><?php echo $data->distributor; ?></strong> <br>
                  </td>
                  <td><?php echo $data->satuan; ?></td>
                  <td>Rp  <?php echo $data->harga_beli; ?>,00</td>
                  <td>Rp <?php echo $data->harga; ?>,00</td>
                  <td><?php echo $data->stok; ?></td>
                  <td><?php echo $data->tgl_masuk; ?></td>
                  <td><?php echo $data->expired; ?></td>
                  <td>
                  <a type="button" class="btn btn-info" href="<?php echo base_url().'admin/editObat/'.$data->id_obat; ?>" name="btn_update" style="margin:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <br>
                  <br>
                  <a type="button" class="btn btn-danger btn-delete" href="<?php echo base_url().'admin/deleteObat/'.$data->id_obat; ?>" name="btn_delete" style="margin:auto;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  <br><br>
                  <a type="button" class="btn btn-success btn-barangkeluar" href="<?php echo base_url().'admin/transaksi/'.$data->id_obat ?>" name="btn_barangkeluar" style="margin:auto;"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                  </td>
                </tr>
          <?php $number++;
        } ?>
                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                  <th>Nama Obat</th>
                  <th>Informasi</th>
                  <th>Satuan</th>
                  <th>Harga Beli</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Masuk</th>
                  <th>Expired</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>



          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  $this->load->view('template/footer');
?>
