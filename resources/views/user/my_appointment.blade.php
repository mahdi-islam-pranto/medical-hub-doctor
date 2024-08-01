<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="">

  <title>Apppointments</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <style>
    table {
        
        align-content: center;
      width: 70%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #05B4F1;
      color: white;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
  </style>

  


</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
  

  

  </header>


  @include('user.navbar')


<div align="center" style="padding: 70px;">
  <table>
    <thead>
      <tr>
        <th>Doctor Name</th>
        <th>Date</th>
        <th>Message</th>
        <th>Status</th>
        <th>Cancel</th>
      </tr>
    </thead>
    <tbody>

        @foreach($appoint as $appoints)

      <tr>
        <td>{{$appoints->doctor}}</td>
        <td>{{$appoints->date}}</td>
        <td>{{$appoints->message}}</td>
        <td>{{$appoints->status}}</td>
        <td><a style="background-color: red;" onclick="return confirm('Are you sure to Cancel this Appointment?')" class="btn btn-cancel" href="{{url('cancel_appoint',$appoints->id)}}" >Cancel</a></td>
      </tr>

      @endforeach
      
      <!-- Add more rows as needed -->
    </tbody>
  </table>
  </div>

  


  

  
  @include('user.footer')

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>