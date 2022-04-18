<div class="page-heading">
    <h3><?= $title ?></h3>
</div>
<?= $this->session->flashdata('message');  ?>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-6 col-md-6">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldPaper"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">New Message</h6>
                                    <h6 class="font-extrabold mb-0"><?= $new_messages ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-md-6">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldTime-Circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Visitor</h6>
                                    <h6 class="font-extrabold mb-0"><?= $visitor ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card p-4 shadow">
                        <h1 class="h3 mb-4 text-gray-800">Pesan</h1>
                        <table id="tablePendaftar" class="table dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr align="center">
                                    <th hidden="true">No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Waktu</th>
                                    <th>Dibaca</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($messages as $a) : ?>
                                    <?php $no = 1; ?>
                                    <tr align="center">
                                        <td hidden="true"><?= $no++ ?></td>
                                        <td><?= $a->name ?></td>
                                        <td><?= $a->email ?></td>
                                        <td><?= $a->message ?></td>
                                        <td><?= $a->created_at ?></td>
                                        <td>
                                            <?php if ($a->is_read == 0) : ?>
                                                <a href="" class="badge bg-warning">Belum</a>
                                            <?php else : ?>
                                                <span class="badge bg-success">Sudah</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card shadow">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="<?= base_url('vendor/portfolio/dist/img/' . $user->avatar) ?>">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">Hi, <?= $user->username ?></h5>
                            <h6 class="text-muted mb-0">Welcome Back !</h6>
                        </div>
                        <div class="ms-3 name">
                            <button data-bs-toggle="modal" data-bs-target="#logoutModal" class="btn btn-sm btn-danger p-2"><i class="fa fa-sign-out-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>