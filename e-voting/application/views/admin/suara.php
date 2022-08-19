<section class="content">
<div class="box">
            <div class="box-header">
            <?php echo $this->session->flashdata('message'); ?>
            <h3 class="box-title"><?php echo $title ?></h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama User</th>
                  <th>Nama Kandidat</th>
                  <th>Created</th>
                 
                </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($rows as $row) :
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row->nama_user ?></td>
                            <td><?php echo $row->nama_kandidat ?></td>
                            <td><?php echo $row->created ?></td>
                            <td>
                                 <a href="<?php echo site_url('admin/suara/hapus/' . $row->id_suara); ?>" class="btn btn-smal btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus Suara ini?!')"><i class="fa fa-trash-o"></i>Hapus</a>
                                
                            </td> 
                            </tr>
                            <?php endforeach; ?>
               </tbody> 
               </table> 
               </div> 
               </div> 
               </section> 


  </section>    
