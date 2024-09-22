<?= $this->extend('layout/template');  ?>

<?= $this->section('content');  ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">SPK Bantuan UMKM</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data UMKM</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data UMKM</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#tambahModal">Tambah Data UMKM</button>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama UMKM</th>
                            <th>Nama Pimpinan</th>
                            <th>Jalan</th>
                            <th>Desa</th>
                            <th>Kecamatan</th>
                            <th>Jenis Usaha</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>go</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Data UMKM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namaUMKM">Nama UMKM</label>
                        <input type="text" class="form-control" id="namaUMKM" placeholder="Masukkan Nama UMKM ">
                    </div>
                    <div class="form-group">
                        <label for="input">Nama Pimpinan</label>
                        <input type="text" class="form-control" id="namaPimpinan" placeholder="Masukkan Nama Pimpinan">
                    </div>
                    <div class="form-group">
                        <label for="jalan">Jalan</label>
                        <input type="text" class="form-control" id="jalan" placeholder="Masukkan Jalan">
                    </div>
                    <div class="form-group">
                        <label for="desa">Desa</label>
                        <input type="text" class="form-control" id="desa" placeholder="Masukkan Desa">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" placeholder="Masukkan Kecamatan">
                    </div>
                    <div class="form-group">
                        <label>Jenis Usaha</label>
                        <select class="form-control" id="jenisUsaha">
                            <option value="Mikro">Mikro</option>
                            <option value="Makro">Makro</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection();  ?>