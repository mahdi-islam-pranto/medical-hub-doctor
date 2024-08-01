
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">

        

        <h2 style="text-align: center;">Email Information Form</h2>
        <center>

        @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
          {{session()->get('message')}}
        </div>

        @endif


<form action="{{url('sendemail',$data->id)}}" method="POST" enctype="multipart/form-data" style="max-width: 800px; margin-left: 80;  padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">

@csrf
    
<label for="doctorName" style="display: block; margin-top: 10px;">Greeting</label>
    <input type="text" id="doctorName" name="greeting" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box; background-color: #fff; color: #000;" required="">

    <label for="contactNumber" style="display: block; margin-top: 10px;">Body</label>
    <input type="text" id="contactNumber" name="body" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box; background-color: #fff; color: #000;" required="">


    
    <label for="roomNumber" style="display: block; margin-top: 10px;">Action Text</label>
    <input type="text" id="roomNumber" name="actiontext" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box; background-color: #fff; color: #000;" required="">

    <label for="roomNumber" style="display: block; margin-top: 10px;">Action Url</label>
    <input type="text" id="roomNumber" name="actionurl" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box; background-color: #fff; color: #000;" required="">

    <label for="roomNumber" style="display: block; margin-top: 10px;">End Part</label>
    <input type="text" id="roomNumber" name="endpart" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box; background-color: #fff; color: #000;" required="">


    <input type="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;" required="">
</form>

</center>



    <!-- <div class="content-wrapper">
    <h5>Heloo Doctor</h5>
      
    </div> -->
    <!-- content-wrapper ends --></div>

        




        <!-- @include('admin.body') -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
