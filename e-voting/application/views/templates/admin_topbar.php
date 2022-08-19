<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>9</b>TIK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BIMA SAKTI </b>- SMEA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/img/alistia.jpg'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/img/alistia.jpg'); ?>" class="img-circle" alt="User Image">

                <p>
                <?php echo $this->session->userdata('nama'); ?> - Web Developer
                  <small>Admin Pilketos SMEA 2022/2023</small>
                    <!-- Profile Image -->
          <div class="box box-warning">
            <div class="box-body box-profile">      
             <ul class="list-group">
                <li class="list-group-item">
                  <b>Alistia</b>
                </li>
                <li class="list-group-item">
                  <b>XI Rekayasa Perangkat Lunak 1</b>
                </li>
                <li class="list-group-item">
                  <b>Project Mentor's</b>
                </li>
              </ul>

              <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-primary btn-block">Logout</a>
            </div>
                </p>
              </li>         
          </li>
        </ul>
      </div>
    </nav>
  </header>