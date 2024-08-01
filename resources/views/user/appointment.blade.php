<div class="page-section appointment" id="appointment">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size: 2rem; font-weight: bold;">Make an Appointment</h1>


      <form class="main-form" action="{{url('appointment')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input name="name" type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input name="email" type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input name="date" type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">
            <option value="">Select Doctor</option>
            @foreach ($doctor as $doctors)
            
              <option value="{{$doctors->name}}">{{$doctors->name}} | Spaciality: {{$doctors->spaciality}}</option>
              
            @endforeach

            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input name="phone" type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-info mt-3 wow zoomIn" style="background-color: #17a2b8; color: #fff;">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->