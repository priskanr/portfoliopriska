<section class="content">
<div class="box">
        <div class="box-header">
            <?php echo $this->session->flashdata('message'); ?>
            <h3 class="box-title"><?php echo $title ?></h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">  
            <form action="<?php echo site_url('admin/user/simpan'); ?>" method="post">
            
            <a href="<?php echo site_url('admin/user'); ?>" class="btn bg-olive"><i class="fa fa-arrow-left"></i > Kembali</a>             
            <button type="submit" class="btn bg-navy"><i class="fa fa-save"></i> Simpan</button>
            

           
            <div class="col-md-10">
            <div class="form-group">
                 <label for="nama">Nama *</label>
                 <input type="nama" name="nama" id="nama" class="form-control" required>
                 </div>
             
             <div class="form-group">
                 <label for="email">Email *</label>
                 <input type="email" name="email" id="email" class="form-control" required>
                 </div>
             
                 <div class="form-group">
                 <label for="password">Password *</label>
                 <input type="password" name="password" id="password" class="form-control" required>
                 </div>    

                 <div class="form-group">
                 <label for="level">Level</label>
                 <select name="level" id="level" class="form-control">
                   <option value="admin">Admin</option>
                   <option value="siswa">Siswa</option>
                   </select>
                 </div>

                 <div class="form-group">
            <label for="id_kelas">Kelas </label>
            <select name="id_kelas" id="id_kelas" class="form-control">           
            <?php foreach($kelas as $kls) : ?>
                <option value="<?php echo $kls->id ?>"><?php echo $kls->nama ?></option>
              <?php endforeach; ?>
             </section>
             </div>

                

     </form>       
            </div> 
        </div> 
     
</section>    
