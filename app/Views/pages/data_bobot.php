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
                        <li class="breadcrumb-item active">Data Bobot</li>
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
                    <h3 class="card-title">Data Bobot</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#tambahModal">Tambah Data Bobot</button>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Nilai Kriteria</th>
                                <th>Tipe Kriteria</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($dataBobot as $bobot) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $bobot['kode_kriteria'] ?></td>
                                    <td><?= $bobot['nama_kriteria'] ?></td>
                                    <td><?= $bobot['nilai_kriteria'] ?></td>
                                    <td><?= $bobot['tipe_kriteria'] ?></td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal">Edit</button>
                                        <button class="btn btn-danger">Hapus</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Data Bobot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="namaKriteria">Nama Kriteria</label>
                            <input type="text" class="form-control" id="namaKriteria" placeholder="Masukkan Nama Kriteria" required>
                        </div>
                        <div class="form-group">
                            <label for="input">Nilai Kriteria</label>
                            <input type="number" class="form-control" id="namaPimpinan" placeholder="Masukkan Nilai Kriteria" required>
                        </div>
                        <div class="form-group">
                            <label>Tipe Kriteria</label>
                            <select class="form-control" id="TipeKriteria" required>
                                <option value="Benefit">Benefit</option>
                                <option value="Cost">Cost</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Data -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Bobot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="namaKriteria">Nama Kriteria</label>
                            <input type="text" class="form-control" id="namaKriteria" placeholder="Masukkan Nama Kriteria" required>
                        </div>
                        <div class="form-group">
                            <label for="input">Nilai Kriteria</label>
                            <input type="number" class="form-control" id="namaPimpinan" placeholder="Masukkan Nilai Kriteria" required>
                        </div>
                        <div class="form-group">
                            <label>Tipe Kriteria</label>
                            <select class="form-control" id="TipeKriteria" required>
                                <option value="Benefit">Benefit</option>
                                <option value="Cost">Cost</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?= $this->endSection();  ?>