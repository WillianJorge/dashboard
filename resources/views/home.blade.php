  @extends('layouts.app')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Totems
              <!-- <small>it all starts here</small> -->
          </h1>
          <!-- <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Examples</a></li>
              <li class="active">Blank page</li>
          </ol>  -->
      </section>

      <!-- Main content -->
      <section class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon" id="boxTotem1"><i class="fa fa-question" id="iconTotem1"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Totem 1</span>
                      <span class="info-box-text" id="totem1"></span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon" id="boxTotem2"><i class="fa fa-question" id="iconTotem2"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Totem 2</span>
                      <span class="info-box-text" id="totem2"></span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon " id="boxTotem3"><i class="fa fa-question" id="iconTotem3"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Totem 3</span>
                      <span class="info-box-text" id="totem3"></span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          </div>
      </section>
      <!-- /.content -->
  </div>

  <script>
      $(function() {
          $.get('http://127.0.0.1:8000/ping', function(data) {

              var totem1 = data.Totem1 == 0 ? 'ligado' : 'desligado';
              var totem2 = data.Totem2 == 0 ? 'ligado' : 'desligado';
              var totem3 = data.Totem3 == 0 ? 'ligado' : 'desligado';

              //   muda a classe de acordo com o estado do totem
              if (data.Totem1 == 0) {
                  //   ligado
                  $('#totem1').text(totem1);
                  $('#boxTotem1').removeClass();
                  $('#boxTotem1').addClass('info-box-icon bg-green');
                  $('#iconTotem1').removeClass();
                  $('#iconTotem1').addClass('fa fa-check');
              } else {
                  //   desligado
                  $('#totem1').text(totem1);
                  $('#boxTotem1').removeClass();
                  $('#boxTotem1').addClass('info-box-icon bg-red');
                  $('#iconTotem1').removeClass();
                  $('#iconTotem1').addClass('fa fa-exclamation');
              }

              //   muda a classe de acordo com o estado do totem
              if (data.Totem2 == 0) {
                  //   ligado
                  $('#totem2').text(totem2);
                  $('#boxTotem2').removeClass();
                  $('#boxTotem2').addClass('info-box-icon bg-green');
                  $('#iconTotem2').removeClass();
                  $('#iconTotem2').addClass('fa fa-check');
              } else {
                  //   desligado
                  $('#totem2').text(totem2);
                  $('#boxTotem2').removeClass();
                  $('#boxTotem2').addClass('info-box-icon bg-red');
                  $('#iconTotem2').removeClass();
                  $('#iconTotem2').addClass('fa fa-exclamation');
              }

              //   muda a classe de acordo com o estado do totem
              if (data.Totem3 == 0) {
                  //   ligado
                  $('#totem3').text(totem3);
                  $('#boxTotem3').removeClass();
                  $('#boxTotem3').addClass('info-box-icon bg-green');
                  $('#iconTotem3').removeClass();
                  $('#iconTotem3').addClass('fa fa-check');
              } else {
                  //   desligado
                  $('#totem3').text(totem3);
                  $('#boxTotem3').removeClass();
                  $('#boxTotem3').addClass('info-box-icon bg-red');
                  $('#iconTotem3').removeClass();
                  $('#iconTotem3').addClass('fa fa-exclamation');

              }
          });

      });
  </script>
  @endsection 