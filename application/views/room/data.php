<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data <?= $title ?></h4>
                    <div class="pull-right">
                        <a href="<?= site_url('room/add') ?>" class="btn btn-primary btn-flat">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Room</th>
                                        <th>Host key</th>
                                        <th>link</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($room as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data->name ?></td>
                                            <td><?= $data->host_key ?></td>
                                            <td><?= $data->link ?></td>
                                            <td>

                                                <a href="<?= base_url('user/edit/') . $data->id_room ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('user/delete/') . $data->id_room ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>