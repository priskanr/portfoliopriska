<section class="sec1" id="sec1">

<div class="container">
   <div class="row">   
      <div class="col-md-6">
          <h2 class="display-4 text-primary mt-5 h2-sec1">Welcome to <br>e-voting</br> <b>PILKETOS</b> SMEA</h2>
          <p class="text-secondary p-sec1">Silahkan gunakan hak suara kalian untuk menentukan<br><b>KETUA</b> dan <b>WAKIL KETUA</b> Osis BIMA SAKTI 2022/2023</p> 
          <div class="a-sec1">
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">Login Disini</a>
          <a href="#sec2" class="btn btn-secondary">Buat Akun?</a>
      </div>
      </div>
      <div class="col-md-6">
         <img src="<?php echo base_url('assets/img/smk.png'); ?>" class="img-fluid">
   </div>  
   </div>
</div>   
</section>
   
<section class="sec2" id="sec2">
<div class="container">
   <div class="row">   

      <div class="col-md-6">
         <img src="<?php echo base_url('assets/img/smeaosis.png'); ?>" class="img-fluid img-sec2">
      </div>

<div class="col-md-6">
   <h2 class="text-primary h2-sec2">Belum punya akun?</h2>
   <p class="text-secondary p-sec2">Silahkan daftarkan dulu diri anda pada form dibawah ini, jika sudah silahkan <b>LOGIN</b> lalu pilih menu voting.</p>

<form action="<?php echo site_url('auth/registrasi'); ?>" method="post">
   <div class="form-group">
      <label for="nama" class="text-secondary">Nama *</label>
      <input type="text" name="nama" id="nama" class="form-control" value="<?php echo set_value('nama') ?>">
      <?php echo form_error('nama', '<span class="text-danger small pl-3">', '</span>'); ?>
   </div>
   <div class="form-group">
      <label for="email" class="text-secondary">E-mail *</label>
      <input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email') ?>">
      <?php echo form_error('email', '<span class="text-danger small pl-3">', '</span>'); ?>
   </div>
   <div class="form-group">
      <label for="password" class="text-secondary">Password *</label>
      <input type="password" name="password" id="password" class="form-control">
      <?php echo form_error('password', '<span class="text-danger small pl-3">', '</span>'); ?>
   </div>
   <div class="form-group">
      <label for="id_kelas" class="text-secondary">Kelas *</label>
      <select name="id_kelas" id="id_kelas" class="form-control">
         <?php foreach ($kelas as $kls) : ?>
            <option value="<?php echo $kls->id ?>"><?php echo $kls->nama ?></option>
            <?php endforeach; ?>
         </select>   
   </div>
   <button type="submit" class="btn btn-primary">Registrasi Akun</button>
   </form>
</div>
</div>
</div>
</div>
</section>



<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="exampleModalLabel">Form Login</h5>        
        </button>
      </div>
      <div class="modal-body">
       <form action="<?php echo site_url('auth/login'); ?>" method="post">
        <div class="form-group">   
        <form action="/action_page.php">
          <label class="text-secondary" for="email1">E-mail *</label>
          <input type="email" name="email1" id="email1" class="form-control" required>
         </div>

        <div class="form-group">   
        <form action="/action_page.php">
          <label class="text-secondary" for="password1">Password *</label>
          <input type="password" name="password1" id="password1" class="form-control" required>
         </div>
         
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
