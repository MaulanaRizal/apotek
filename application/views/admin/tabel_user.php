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
              <h3 class="box-title"><i class="fa fa-table" aria-hidden="true"></i> Data AKses User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>
<?php foreach ($user as $data) {

} ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pegawai</th>
                  <th>NIP</th>
                  <th>Jabatan</th>
                  <th>Jenis Kelamin</th>
                  <th>Status</th>
                  <th>Username</th>
                  <?php if($data->jabatan == 'administrator') {
                    echo "
                    <th>Aksi</th>
                    ";
                  }?>

                  <!-- <th></th> -->
                </tr>
                </thead>
                <tbody>

                  <?php
                  $number=0;
                  foreach ($user as $data):
                  $number++;?>
                    <tr>

                <td><?php echo $number; ?></td>
                  <td><?php echo $data->nama_user; ?></td>
                <td><?php echo $data->nip; ?></td>
                <td><?php echo $data->jabatan; ?></td>
                <td><?php echo $data->jenis_kelamin ?></td>
                <td><?php echo $data->status ?></td>
                <td><?php echo $data->username; ?></td>
                <td><?php  ?></td>

              </tr>
              <?php endforeach; ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Pegawai</th>
                  <th>NIP</th>
                  <th>Jabatan</th>
                  <th>Jenis Kelamin</th>
                  <th>Status</th>
                  <th>Username</th>
                  <?php if($data->jabatan == 'administrator') {
                    echo "
                    <th>Aksi</th>
                    ";
                  }?>
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
