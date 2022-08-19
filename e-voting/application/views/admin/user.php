<section class="content">
<div class="box">
            <div class="box-header">
            <?php echo $this->session->flashdata('message'); ?>
            <a href="<?php echo site_url('admin/User/tambah'); ?>" class="btn bg-olive"><i class="fa fa-plus-circle"></i> Tambah User</a>               
            
         </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Kelas</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>level</th>
                  <th>Aksi</th>
                  
                </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($rows as $row) :
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row->nama_kelas ?></td>
                            <td><?php echo $row->nama_user ?></td>
                            <td><?php echo $row->email ?></td>
                            <td>
                                <?php if ($row->status == 1) { ?>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-check"></i> Sudah Memilih</button>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i> Belum Memilih</button>
                                    <?php } ?>
                                   
                            </td>
                            <td><?php echo $row->level ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/user/edit/' . $row->id_user); ?>" class="btn btn-smal btn-info"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                <a onclick="return confirm('Apakah anda yakin ingin menghapus User?!')" href="<?php echo site_url('admin/user/hapus/' . $row->id_user); ?>" class="btn btn-smal btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                             
                            </td> 
                            </tr>
                            <?php endforeach; ?>
               </tbody> 
               </table> 
               </div> 
               </div> 
               </section> 


  </section>    
