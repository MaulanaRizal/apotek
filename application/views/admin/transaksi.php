<?php
  $this->load->view('template/header');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Barang Keluar
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('admin/tabel_barangmasuk')?>">Tables</a></li>
        <li class="active">Tambah Barang Keluar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="container">
            <!-- general form elements -->
          <div class="box box-primary" style="width:94%;">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Tambah Barang Keluar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
              <?php foreach($obat as $d){ ?>

                            <?php } ?>
            <form action="<?=base_url().'admin/inputTransaksi/'.$d->id_obat?>" role="form" method="post">

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
             </div>
            <?php } ?>

              <div class="box-body">
                <div class="form-group">

                  <label for="id_transaksi" style="margin-left:220px;display:inline;">Nama Obat</label>
                  <input type="text" name="nama_obat" style="margin-left:84px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->nama_obat?>">
                </div>
                <div class="form-group">
                  <label for="kategori" style="margin-left:220px;display:inline;">Kategori Obat</label>
                  <input type="text" name="kategori" style="margin-left:68px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->kategori?>">
                </div>
                <div class="form-group">
                  <label for="kategori" style="margin-left:220px;display:inline;">Harga Obat</label>
                  <input type="text" name="harga" style="margin-left:84px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?php echo $d->harga_beli; ?>">
                </div>
                <div class="form-group">
                  <label for="kategori" style="margin-left:220px;display:inline;">Stock Obat</label>
                  <input type="text" name="stok" style="margin-left:86px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?php echo $d->stok; ?>">
                </div>
                <div class="form-group">
                  <label for="kategori" style="margin-left:220px;display:inline;">Kode Obat</label>
                  <input type="text" name="kode_obat" style="margin-left:90px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?php echo $d->kode_obat; ?>">
                </div>


                <div class="row">
                  <div class="container">

                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="Lokasi">Lokasi</label>
                      <select class="form-control" name="lokasi">
                        <option value="Pustu 1">Pustu 1</option>
                        <option value="Pustu 2">Pustu 2</option>
                        <option value="Pustu 3">Pustu 3</option>
                        <option value="Pustu 4">Pustu 4</option>
                      </select>
                    </div>

                    <div class="col-sm-4">
                      <label for="tanggal">Tanggal</label>
                      <input type="date" class="form-control" required name="tanggal" value="">
                    </div>

                    <div class="col-sm-6">
                      <label for="jumlah">Jumlah</label>
                      <input type="number" required style="width:20%"class="form-control" max=<?=$d->stok?> name="jumlah" value="">
                    </div>
                  </div>
                </div>
              </div>

                <br>

              <!-- /.box-body -->

              <div class="box-footer" style="width:93%;">
                <a type="button" class="btn btn-default" style="width:10%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                <button type="submit" style="width:20%;margin-left:689px;" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>&nbsp;&nbsp;&nbsp;
              </div>
            </form>
          </div>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->

          <!-- /.box -->


          <!-- /.box -->

          <!-- Input addon -->

          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!-- <div class="col-md-6">
          <!-- Horizontal Form -->

          <!-- /.box -->
          <!-- general form elements disabled -->

          <!-- /.box -->

        </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  $this->load->view('template/footer');
?>
