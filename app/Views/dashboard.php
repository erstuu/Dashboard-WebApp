<?= $this->extend('layout'); ?>

<?= $this->section('main-content'); ?>

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle mb-2">
                        Dashboard
                    </div>
                    <h2 class="page-title">
                        Data Mahasiswa
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                           data-bs-target="#modalTambah">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 5l0 14"/>
                                <path d="M5 12l14 0"/>
                            </svg>
                            Tambah Data
                        </a>
                        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                           data-bs-target="#modalTambah" aria-label="Create new report">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 5l0 14"/>
                                <path d="M5 12l14 0"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal modal-blur fade" id="modalTambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="mt-3" method="post" action="tambahData">
                    <div class="container-xl">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Biodata</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label required">NIM</label>
                                            <div>
                                                <input type="number" name="nim" class="form-control"
                                                       placeholder="Masukkan NIM" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Nama Lengkap</label>
                                            <div>
                                                <input type="text" name="nama" class="form-control"
                                                       placeholder="Masukkan Nama Lengkap" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Tempat Lahir</label>
                                            <div>
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                       placeholder="Masukkan Tempat Lahir" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Tanggal Lahir</label>
                                            <div>
                                                <input type="date" name="tgl_lahir" class="form-control"
                                                       placeholder="Masukkan Tanggal Lahir" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-label required">Jenis Kelamin</div>
                                            <div>
                                                <label class="form-check">
                                                    <input class="form-check-input" type="radio" name="jk"
                                                           value="Laki-laki" required>
                                                    <span class="form-check-label">Laki-laki</span>
                                                </label>
                                                <label class="form-check">
                                                    <input class="form-check-input" type="radio" name="jk"
                                                           value="Perempuan" required>
                                                    <span class="form-check-label">Perempuan</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Agama</label>
                                            <div>
                                                <select name="agama" class="form-select" required>
                                                    <option value="">Pilih Agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" required>Alamat</label>
                                            <textarea class="form-control" name="alamat" rows="5"
                                                      placeholder="Masukkan alamat lengkap" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">No Telepon</label>
                                            <div>
                                                <input type="number" name="no_telp" class="form-control"
                                                       placeholder="Masukkan No Telp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-primary ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 5l0 14"/>
                                <path d="M5 12l14 0"/>
                            </svg>
                            Tambah Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Lihat -->
    <div class="modal modal-blur fade" id="modalLihat" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Rincian Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="container-xl mt-3 mb-3">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Biodata</h3>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label">NIM</label>
                                        <div>
                                            <input id="profilNim" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <div>
                                            <input id="profilNama" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tempat Lahir</label>
                                        <div>
                                            <input id="profilTempatLahir" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <div>
                                            <input id="profilTglLahir" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-label">Jenis Kelamin</div>
                                        <div>
                                            <input id="profilJk" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Agama</label>
                                        <div>
                                            <input id="profilAgama" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <textarea id="profilAlamat" class="form-control" rows="5" readonly></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">No Telepon</label>
                                        <div>
                                            <input id="profilNoTelp" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-danger ms-auto" data-bs-dismiss="modal">
                        Tutup
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Event listener untuk tombol dengan kelas 'btn-detail'
            $('.btn-profil').on('click', function () {
                const nim = $(this).data('nim'); // Mendapatkan NIM dari atribut data-nim pada tombol

                // Menggunakan AJAX get request ke endpoint untuk mengambil data profil mahasiswa
                $.get('detailProfil/' + nim, function (response) {

                    // Mengisi data profil di dalam modal berdasarkan response JSON
                    $('#profilNim').val(response[0].nim);
                    $('#profilNama').val(response[0].nama);
                    $('#profilTempatLahir').val(response[0].tempat_lahir);
                    $('#profilTglLahir').val(response[0].tgl_lahir);
                    $('#profilJk').val(response[0].jk);
                    $('#profilAgama').val(response[0].agama);
                    $('#profilAlamat').val(response[0].alamat);
                    $('#profilNoTelp').val(response[0].no_telp);

                    // Menampilkan modal
                    $('#modalLihat').modal('show');
                });
            });
        });
    </script>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Diri Mahasiswa</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="tableBio" class="table display nowrap ">
                                    <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">NIM</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Tempat Tanggal Lahir</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody id="table-body">
                                    <?php
                                    $no = 1;
                                    foreach ($dataDiri as $row): ?>
                                        <tr>
                                            <td class="text-center"><?= $no ?></td>
                                            <td class="text-center"><?= esc($row['nim']) ?></td>
                                            <td class="text-center"><?= esc($row['nama']) ?></td>
                                            <td class="text-center"><?= (new DateTime(esc($row['tahun_masuk'])))->format('d-m-Y'); ?></td>
                                            <td class="text-center"><?= esc($row['email']) ?></td>
                                            <td class="text-center"><?= esc($row['jenis_kelamin']) ?></td>
                                            <td class="text-center">
                        <span data-bs-toggle="modal" data-bs-target="#modalLihat">
                          <a href="#" class="btn btn-primary btn-icon btn-detail"
                             data-nim="<?= esc($row['nim']) ?>"
                             data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Lihat">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24"
                                 height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                              <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                            </svg>
                          </a>
                        </span>

                                                <span data-bs-toggle="modal"
                                                      data-bs-target="#modal-hapus-<?= esc($row['nim']) ?>">
                          <a href="#" class="btn btn-danger btn-icon"
                             data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Hapus">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                                 width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M4 7l16 0"></path>
                              <path d="M10 11l0 6"></path>
                              <path d="M14 11l0 6"></path>
                              <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                              <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                            </svg>
                          </a>
                        </span>
                                            </td>
                                        </tr>

                                        <?php
                                        $no++;
                                    endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>