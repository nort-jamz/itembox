

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php if($is_admin == true): ?>

        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $total_products ?></h3>

                <p>Total Artículos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('products/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $total_paid_orders ?></h3>

                <p>Total Trazas</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url('orders/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $total_users; ?></h3>

                <p>Total Técnicos</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
              <a href="<?php echo base_url('users/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $total_stores ?></h3>

                <p>Total Part Numbers</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-home"></i>
              </div>
              <a href="<?php echo base_url('stores/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      <?php endif; ?>
      
      <div class="row">
    <!-- Left col -->
    <section class="col-lg-6 connectedSortable ui-sortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class=""> </i> Bienvenido</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <p class="text-center">
                            <strong>1 Abr, 2018 - 30 Jul, 2018</strong>
                        </p> -->

                        
<!-- Bootstrap CSS -->
<div class="container-fluid">
		
    <!-- Carousel container -->
    <div id="my-pics" class="carousel slide" data-ride="carousel" style="width:100%;margin:auto;">
    
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <li data-target="#my-pics" data-slide-to="0" class="active"></li>
    <li data-target="#my-pics" data-slide-to="1"></li>
    <li data-target="#my-pics" data-slide-to="2"></li>
    </ol>
    
    <!-- Content -->
    <div class="carousel-inner" role="listbox">
    
    <!-- Slide 1 -->
    <div class="item active">
    <img src="slide2.jpg" alt="Image">
    </div>
    
    <!-- Slide 2 -->
    <div class="item">
    <img src="slide3.jpg" alt="Image">
    </div>
    
    <!-- Slide 3 -->
    <div class="item">
    <img src="slide2.jpg" alt="Image">
    </div>
    
    </div>
    
    <!-- Previous/Next controls -->
    <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    
    </div>
    
    </div>
        
    <!-- jQuery library -->
    
    
    <!-- Initialize Bootstrap functionality -->
    <script>
    // Initialize tooltip component
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    
    // Initialize popover component
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    </script>
                        <!-- /.chart-responsive -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer text-center">
<small>Bienvenido al centro de control de equipamiento de AhorraMas</small>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.Left col -->


</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    }); 
  </script>
