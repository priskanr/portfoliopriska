<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $total_user ?></h3>

              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo site_url('admin/user'); ?>" class="small-box-footer">Info Total selengkapnya  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $total_suara ?></h3>

              <p>Total Pemilh</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('admin/suara'); ?>" class="small-box-footer">Info Total Pemilih Selengkapnya  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>       
      </div>

<div class="row">
<div class="col-md-12">
<div class="alert alert-warning alert-dismissible">
                <h4><i class="icon fa fa-warning"></i> Perolehan Suara! </h4>
                <a href="<?php echo site_url('admin/dashboard'); ?>" class="btn btn-success" style="text-decoration: none;"><i class="fa fa-refresh"></i>  Refresh untuk melihat data perolehan suara baru</a>
              </div>
</div>
</div>






      <canvas id="myChart" height="85"></canvas>
  </section>    


  <script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Kandidat 1', 'Kandidat 2', 'Kandidat 3'],
        datasets: [{
            label: '# Hasil Suara',
            data: [
                <?php echo $kandidat1 ?>, 
                <?php echo $kandidat2 ?>,  
                <?php echo $kandidat3 ?>,
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
               
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>