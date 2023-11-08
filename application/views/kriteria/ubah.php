<?php $this->load->view('template/header'); ?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Ubah Data Kriteria</h3>
    </div>
    <form class="form-horizontal" action="<?php echo site_url('kriteria/ubah/' . $id_kriteria); ?>" method="post">
        <input name="id" type="hidden" value="<?php echo $kode_kriteria; ?>">
        <div class="box-body">

            <?php echo validation_errors('<div class="alert bg-danger" role="alert">', '</div>'); ?>

            <div class="form-group">
                <label for="kode_kriteria" class="col-sm-2 control-label">Kode Kriteria</label>
                <div class="col-sm-4">
                    <input name="kode_kriteria" id="kode_kriteria" class="form-control" required type="text" value="<?php echo set_value('kode_kriteria', $kode_kriteria); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="nama_kriteria" class="col-sm-2 control-label">Nama Kriteria</label>
                <div class="col-sm-4">
                    <input name="nama_kriteria" id="nama_kriteria" class="form-control" required type="text" value="<?php echo set_value('nama_kriteria', $nama_kriteria); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="bobot" class="col-sm-2 control-label">Bobot</label>
                <div class="col-sm-4">
                    <input name="bobot" id="bobot" required type="number" class="form-control" value="<?php echo set_value('bobot', $bobot); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="tipe" class="col-sm-2 control-label">Tipe</label>
                <div class="col-sm-4">
                    <select class="form-control" name="tipe" id="tipe" required>
                        <option value="">Pilih...</option>
                        <option value="cost" <?php echo set_select('tipe', 'cost', ($tipe == 'cost' ? TRUE : FALSE)); ?>>cost</option>
                        <option value="benefit" <?php echo set_select('tipe', 'benefit', ($tipe == 'benefit' ? TRUE : FALSE)); ?>>benefit</option>
                        <option value="kota" <?php echo set_select('tipe', 'kota', ($tipe == 'kota' ? TRUE : FALSE)); ?>>kota</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="text-center col-sm-6">
                <button type="submit" name="save" class="btn btn-success">Simpan</button>
                <a href="<?php echo site_url('kriteria'); ?>" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
</div>