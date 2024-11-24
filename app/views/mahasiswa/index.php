<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Tambah Data
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Cari..." autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" id="button-addon2" type="submit" itemid="tombolCari" >Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3><?= $data['judul']; ?></h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs): ?>
                    <li class="list-group-item">
                        <?= $mhs['name'] ?>
                        <span class="badge badge-primary bg-primary text-white bg-body-primary"><a class="text-white"
                                href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a></span>
                        <span class="badge badge-warning bg-warning "><a class="text-black tampilModalUbah" type="button"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"  
                                data-id="<?= $mhs['id']; ?>"
                                >Ubah <?= $mhs['id']; ?></a></span>
                        <span class="badge badge-danger bg-danger text-white " onclick="return confirm('Yakin?')"><a
                                class="text-white"
                                href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>">Hapus</a></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="jurusan">
                            <option selected>Jurusan</option>
                            <option value="PPLG">PPLG</option>
                            <option value="PH">PH</option>
                            <option value="MPLB">MPLB</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>