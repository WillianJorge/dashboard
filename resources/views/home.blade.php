  @extends('layouts.app')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Blank page
              <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Examples</a></li>
              <li class="active">Blank page</li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">

          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon bg-orange"><i class="ion ion-ios-gear-outline"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Totem 1</span>
                      <span class="info-box-text"></span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="ion ion-ios-gear-outline"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Totem 2</span>
                      <span class="info-box-text"></span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Totem 3</span>
                      <span class="info-box-text"></span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->

      </section>
      <!-- /.content -->
  </div>

  <script>
      $(function() {
          $.get('http://127.0.0.1:8000/ping', function(data) {

            

            console.log(data.Totem1);

          },'xml');

      });
  </script>
  @endsection 