<div class="container">
            <div class="row">
                <div class="col-12">
                <?php if ($this->session->flashdata('massage')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('massage'); ?>
                </div>
                <?php endif; ?>
                <div class="card">
                  <div class="card-status bg-blue"></div>
                  <div class="card-header">
                    <h3 class="card-title">Pemetaan Lokasi </h3>
                  </div>
                  <div class="card-body">
                  <div class="o-hidden">
                    <form action="<?php echo base_url();?>Lokasi/add" method="post" enctype="multipart/form-data">
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Lokasi *</label>
                            <div class="col-sm-12">
                            <input class="form-control <?php echo form_error('nama_lokasi') ? 'is-invalid':'' ?>" 
                            type="text"  placeholder="Nama Lokasi" name="nama_lokasi"  >
                            <div class="invalid-feedback">
                                    <?php echo form_error('nama_lokasi') ?>
                            </div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Latitude *</label>
                            <div class="col-sm-12">
                            <input class="form-control <?php echo form_error('latitude') ? 'is-invalid':'' ?>" 
                            type="text"  placeholder="Latitude" name="latitude"  >
                            <div class="invalid-feedback">
                                    <?php echo form_error('latitude') ?>
                            </div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Longitude *</label>
                            <div class="col-sm-12">
                            <input class="form-control <?php echo form_error('longitude') ? 'is-invalid':'' ?>" 
                            type="text"  placeholder="Longitude" name="longitude"  >
                            <div class="invalid-feedback">
                                    <?php echo form_error('longitude') ?>
                            </div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Icon * </label>
                            <div class="col-sm-12">
                            <!-- <input type="file" name="icon"> -->
                            <input type="file" class="<?php echo form_error('icon') ? 'is-invalid':'' ?>" name="icon">
                            <div class="invalid-feedback">
                                    <?php echo form_error('icon') ?>
                            </div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-12">
                            <textarea class="form-control" name="keterangan"></textarea>
                            <div class="invalid-feedback">
                                    <?php echo form_error('keterangan') ?>
                            </div>
                            </div>
                    </div>
                    <div class="form-group row">
                            <div class="col-sm-12">
                            <input type="submit" class="btn btn-block btn-azure" value="Simpan">
                           <a href="<?php echo base_url();?>Lokasi" class="btn btn-block btn-cyan">Kembali</a> 
                            </div>
                    </div>
                    </form>
                    <div class="card-footer small text-muted">
                        * Required fields
                    </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>