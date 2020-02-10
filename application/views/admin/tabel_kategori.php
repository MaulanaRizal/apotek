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

              <a href="<?=base_url('admin/tambah_kategori')?>" style="margin-bottom:10px;" type="button" class="btn btn-primary" name="tambah_data"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Kategori</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                  <!-- <th></th> -->
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($kategori->result() as $row ){?>
                    <tr>
                <td width=5%><?php echo $i; ?></td>

                <td><?php echo $row->kategori; ?></td>
                <td width=10%>
                    <a type="button" class="btn btn-info" href="<?php echo base_url().'admin/editKategori/'.$row->id_kategori ?>" name="btn_update" style="margin:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    &nbsp;&nbsp;
                    <a type="button" class="btn btn-danger btn-delete" href="<?php echo base_url().'admin/deleteKategori/'.$row->id_kategori; ?>" name="btn_delete" style="margin:auto;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
                </tr>
              <?php $i++;} ?>
                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                <th>Kategori</th>
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
  <!-- /.content-wrapper -->
  <?php
  $this->load->view('template/footer');
?>
