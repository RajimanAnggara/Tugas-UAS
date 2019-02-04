<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-status bg-blue"></div>
                    <div class="card-header">
                        <h3 class="card-title">Pemetaan Lokasi </h3>  
                    </div>
                    <a href="<?php echo base_url();?>Lokasi/add" class="btn btn-square btn-primary">Add Data</a>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr> 
                                    <th> No</th>
                                    <th> Nama</th>
                                    <th> Latitude</th>
                                    <th> Longitude</th>
                                    <th> Icon</th>
                                    <th> Keterangan</th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no=1; 
                                foreach ($data_lokasi as $lokasi) { ?>
                                <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $lokasi->nama;?></td>
                                    <td><img src="<?php echo base_url('assets/upload/icon/'.$lokasi->icon);?>" width="34px" alt="Icon Lokasi"></td>
                                    <td><?php echo $lokasi->keterangan;?></td>
                                    <td><a href="<?php echo site_url('lokasi/edit/'.$lokasi->idlokasi) ?>" class="btn btn-sm btn-blue"><i class="fe fe-edit"></i> </a> 
                                        <a onclick="deleteConfirm('<?php echo site_url('lokasi/delete/'.$lokasi->idlokasi)?>')" href="#!" class="btn btn-sm btn-danger"><i class="fe fe-trash"></i></a> 
                                    </td>
                                </tr>
                            <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


