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
                    <form action="<?php echo base_url();?>Lokasi/edit" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idlokasi" value="<?php echo $lokasi->idlokasi;?>" />
                   <div class="form-group row"> 
                     <label class="col-sm-2 col-form-label">Nama  *
                     </label>
                            <div class="col-sm-12">
                            <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" 
                            type="text"  placeholder="Nama " name="nama"  value="<?php echo $lokasi->nama ?>" >
                            <div class="invalid-feedback">
									<?php echo form_error('nama') ?>
							</div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Latitude</label>
                            <div class="col-sm-12">
                            <textarea class="form-control" name="latitude"><?php echo $lokasi->latitude ?></textarea>
                            <div class="invalid-feedback">
                                    <?php echo form_error('latitude') ?>
                            </div>
                            </div>
                    </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Longitude</label>
                            <div class="col-sm-12">
                            <textarea class="form-control" name="longitude"><?php echo $lokasi->longitude ?></textarea>
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
                            <input type="hidden" name="old_icon" value="<?php echo $lokasi->icon ?>">
                            <div class="invalid-feedback">
									<?php echo form_error('icon') ?>
							</div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-12">
                            <textarea class="form-control" name="keterangan"><?php echo $lokasi->keterangan ?></textarea>
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