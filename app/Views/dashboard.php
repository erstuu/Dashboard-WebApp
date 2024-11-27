<?= $this->extend('layout'); ?>

<?= $this->section('main-content'); ?>

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle mb-2">
                        Kicau Mania
                    </div>
                    <h2 class="page-title">
                        Dashboard
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
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="mt-3" method="post" action="savePeserta">
                    <div class="container-xl">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Biodata Peserta</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label required">Nama Pemiliki</label>
                                            <div>
                                                <input type="text" name="nama_pemilik" class="form-control"
                                                       placeholder="Masukkan nama pemilik" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Nomor Telepon</label>
                                            <div>
                                                <input type="number" name="nomor_telepon" class="form-control"
                                                       placeholder="Masukkan nomor telepon" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Alamat</label>
                                            <div>
                                                <input type="text" name="alamat" class="form-control"
                                                       placeholder="Masukkan alamat" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Tanggal Daftar</label>
                                            <div>
                                                <input type="date" name="tanggal_daftar" class="form-control"
                                                       placeholder="Masukkan tanggal daftar" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Nama Burung</label>
                                            <div>
                                                <input type="text" name="nama_burung" class="form-control"
                                                       placeholder="Masukkan nama burung" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Jenis Burung</label>
                                            <div>
                                                <input type="text" name="jenis_burung" class="form-control"
                                                       placeholder="Masukkan jenis burung" required>
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
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
                                    <h3 class="card-title">Deskripsi Data Peserta Perlombaan Kicau Mania</h3>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div>
                                            <label class="form-label">Nama Pemilik
                                                <input id="namaPemilik" name="nama_pemilik" class="form-control"
                                                       readonly>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div>
                                            <label class="form-label">Nomor Telepon
                                                <input id="nomorTelepon" name="nomor_telepon" class="form-control"
                                                       readonly>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Alamat
                                            <input id="alamat" name="alamat" class="form-control" rows="5" readonly>
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <div>
                                            <label class="form-label">Tanggal Daftar
                                                <input id="tanggalDaftar" name="tanggal_daftar" class="form-control"
                                                       readonly>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div>
                                            <label class="form-label">Nama Burung
                                                <input id="namaBurung" name="nama_burung" class="form-control"
                                                       readonly>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div>
                                            <label class="form-label">Jenis Burung
                                                <input id="jenisBurung" name="jenis_burung" class="form-control"
                                                       readonly>
                                            </label>
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

    <!-- Modal Error -->
    <div class="modal" id="modalError" tabindex="-1">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 9v2m0 4v.01"/>
                        <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"/>
                    </svg>
                    <h3>Invalid Data</h3>
                    <div class="text-secondary">Please check your input and try again.</div>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                    Cancel
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Event listener untuk tombol dengan kelas 'btn-detail'
            $('.btn-detail').on('click', function () {
                const id = $(this).data('id'); // Mendapatkan id dari atribut data-nim pada tombol

                // Menggunakan AJAX get request ke endpoint untuk mengambil data profil mahasiswa
                $.get('detailPeserta/' + id, function (response) {

                    // Mengisi data profil di dalam modal berdasarkan response JSON
                    $('#namaPemilik').val(response[0].nama_pemilik);
                    $('#nomorTelepon').val(response[0].nomor_telepon);
                    $('#alamat').val(response[0].alamat);
                    $('#tanggalDaftar').val(response[0].tanggal_daftar);
                    $('#namaBurung').val(response[0].nama_burung);
                    $('#jenisBurung').val(response[0].jenis_burung);

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
                            <h3 class="card-title">Data Peserta Perlombaan Kicau Mania</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="tableBio" class="table display nowrap ">
                                    <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Pemilik</th>
                                        <th class="text-center">Nomor Telepon</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Tanggal Daftar</th>
                                        <th class="text-center">Nama Burung</th>
                                        <th class="text-center">Jenis Burung</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody id="table-body">
                                    <?php
                                    $no = 1;
                                    foreach ($arrayPeserta as $row): ?>
                                        <tr>
                                            <td class="text-center"><?= $no ?></td>
                                            <td class="text-center"><?= esc($row['nama_pemilik']) ?></td>
                                            <td class="text-center"><?= esc($row['nomor_telepon']) ?></td>
                                            <td class="text-center"><?= esc($row['alamat']) ?></td>
                                            <td class="text-center"><?= (new DateTime(esc($row['tanggal_daftar'])))->format('d-m-Y') ?></td>
                                            <td class="text-center"><?= esc($row['nama_burung']) ?></td>
                                            <td class="text-center"><?= esc($row['jenis_burung']) ?></td>
                                            <td class="text-center">
                                                <span data-bs-toggle="modal" data-bs-target="#modalLihat">
                                                  <a href="#" class="btn btn-primary btn-icon btn-detail"
                                                     data-id="<?= esc($row['id_peserta']) ?>"
                                                     data-bs-toggle="tooltip"
                                                     data-bs-placement="bottom"
                                                     data-bs-title="Lihat">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="icon icon-tabler icon-tabler-eye" width="24"
                                                         height="24" viewBox="0 0 24 24" stroke-width="2"
                                                         stroke="currentColor" fill="none"
                                                         stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                      <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                      <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                                    </svg>
                                                  </a>
                                                </span>

                                                <span data-bs-toggle="modal"
                                                      data-bs-target="#modal-hapus-<?= esc($row['id_peserta']) ?>">
                                                  <a href="#" class="btn btn-danger btn-icon"
                                                     data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                     data-bs-title="Hapus">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="icon icon-tabler icon-tabler-trash"
                                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                         stroke="currentColor"
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