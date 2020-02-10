<?php
    $this->load->view('template/header');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Tambah Data Obat
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Form Data Obat</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <div class=row>
            <div class=col-md-12></div>
            <div class=container>
              <div class='box box-primary' style=width:94%;>
                <div class='box-header with-border'>
                <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Tambah Data Obat Masuk</h3>
                </div>

                  <!-- ALLERT FORM -->
                <div class=container>

                  <?php foreach ($obat as $row) { ?>

                  <?php  } ?>


                <form action="<?=base_url().'admin/updateObat/'.$row->id_obat;;?>" role="form" method="post">
                <?php if(validation_errors()){ ?>
                  <div class="alert alert-warning alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
                  </div>
                  <?php } ?>
                  <!-- /ALLERT FORM -->

                  <div class=box-body>
                    <div class=form-group>
                    <div class=col-md-2>
                      <label for="nama obat">Nama Obat</label>
                      </div>
                      <div class=col-md-6>
                        <input type="text"  value="<?php echo $row->nama_obat; ?>" required class=form-control name=nama_obat>
                      </div>
                    </div>
                  </div>



                  <div class=box-body>
                    <div class=form-group>
                    <div class=col-md-2>
                      <label for="nama obat" >Kode Obat</label>
                      </div>
                      <div class=col-md-6>
                        <input type="text" value="<?php echo $row->kode_obat; ?>" required class=form-control name=kode_obat>
                      </div>
                    </div>
                  </div>

                  <div class=box-body>
                    <div class=form-group>
                    <div class=col-md-2>
                      <label for="kategori obat" >Kategori Obat </label>
                      </div>
                      <div class=col-md-4>
                        <select name="kategori_obat" class=form-control id="">
                            <option value="Obat generik">Obat generik</option>
                            <option value="Obat tradisional">Obat tradisional</option>
                            <option value="Menengah">Menengah</option>
                            <option value="Adenosin">Adenosin</option>
                            <option value="Hansaplast">Hansaplast</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class=box-body>
                    <div class=form-group>
                    <div class=col-md-2>
                      <label for="produsen obat" >Produsen Obat</label>
                      </div>
                      <div class=col-md-6>
                        <input type="text" value="<?php echo $row->produsen; ?>" required class=form-control name=produsen_obat>
                      </div>
                    </div>
                  </div>

                  <div class=box-body>
                    <div class=form-group>
                    <div class=col-md-2>
                      <label for="distributor obat" >Distributor Obat</label>
                      </div>
                      <div class=col-md-6>
                        <input type="text" value="<?php echo $row->distributor; ?>" required class=form-control name=distributor_obat>
                      </div>
                    </div>
                  </div>

                  <div class=box-body>
                    <div class=form-group>
                    <div class=col-md-2>
                      <label for="satuan obat" >Satuan Obat</label>
                      </div>
                      <div class=col-md-6>
                        <input type="text" value="<?php echo $row->satuan; ?>" required class=form-control name=satuan_obat>
                      </div>
                    </div>
                  </div>

                  <div class=box-body>
                    <div class=form-group>
                    <div class=col-md-2>
                      <label for="harga beli obat" >Harga Beli Obat</label>
                      </div>
                      <div class=col-md-6>
                        <input type="number" value="<?php echo $row->harga_beli; ?>" required class=form-control name=harga_beli>
                      </div>
                    </div>
                  </div>

                  <div class=box-body>
                    <div class=form-group>
                    <div class=col-md-2>
                      <label for="Harga obat" >Harga Obat</label>
                      </div>
                      <div class=col-md-6>
                        <input type="number" value="<?php echo $row->harga; ?>" required  class=form-control name=harga>
                      </div>
                    </div>
                  </div>

                  <div class=box-body>
                    <div class=form-group>
                    <div class=col-md-2>
                      <label for="stok obat" >Stok Obat</label>
                      </div>
                      <div class=col-md-6>
                        <input type="number" value="<?php echo $row->stok; ?>" required  class=form-control name=stok>
                      </div>
                    </div>
                  </div>

                  <div class=box-body>
                    <div class=form-group>
                    <div class=col-md-2>
                      <label for="distributor masuk" >Tanggal Masuk</label>
                      </div>
                      <div class=col-md-2>
                        <input type="date" value="<?php echo $row->tgl_masuk; ?>" required class=form-control name=tanggal_masuk>
                      </div>

                      <div class=col-md-2>
                      <label for="distributor masuk" >Tanggal Expired</label>
                      </div>
                      <div class=col-md-2>
                        <input type="date" value="<?php echo $row->expired; ?>" required class=form-control name=tanggal_expired>
                      </div>
                    </div>
                  </div>


                  <div class="box-footer" style="width:93%;">
                <a type="button" class="btn btn-default" style="width:10%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                <button type="submit" style="width:20%;margin-left:689px;" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Update</button>&nbsp;&nbsp;&nbsp;
              </div>
                </form>
                </div>
              </div>
            </div>
       </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    $this->load->view('template/footer');
    ?>
