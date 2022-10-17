<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Room</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('room/prosesAdd'); ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama room</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Masukkan nama room" value="<?= set_value('name'); ?>" autocomplete="off">
                                        <?= form_error('name', '<span class="text-danger small">', '</span>'); ?>
                                        <div class="form-control-position">
                                            <i class="feather icon-pen"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Link</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="link" class="form-control" name="link" placeholder="Masukkan link room" value="<?= set_value('link'); ?>"  autocomplete="off">
                                        <?= form_error('link', '<span class="text-danger small">', '</span>'); ?>
                                        <div class="form-control-position">
                                            <i class="feather icon-pen"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Host key</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="hostkey" class="form-control" name="hostkey" placeholder="Masukkan hoskey room" value="<?= set_value('hostkey'); ?>"  autocomplete="off" >
                                        <?= form_error('hostkey', '<span class="text-danger small">', '</span>'); ?>
                                        <div class="form-control-position">
                                            <i class="feather icon-pencil"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>