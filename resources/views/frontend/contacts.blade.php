@extends('frontend.layouts.templet')
@section('navbar')
	@parent
@endsection

@section('header')
	
@endsection

@section('content')
	<!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact-us">
    <h2 class="w3-wide w3-center">CONTACT US</h2>
    <div class="w3-row w3-padding-4">
  
      <div class="w3-col m6 w3-large w3-margin-bottom w3-padding-16">

      @foreach($data as $item)
      <img src="images/{{ $item->image }}" alt="Teleyan Call Center In Armenia" style="width:100%">
        <i class="fa fa-map-marker" style="width:30px"></i>{{ $item->addres }}<br>
        <i class="fa fa-phone" style="width:30px"></i> <i class="flag-icon flag-icon-us flag-icon-squared "></i>{{ $item->phone1 }}<br>
        <i class="fa fa-phone" style="width:30px"></i> <i class="flag-icon flag-icon-ca flag-icon-squared "></i>{{ $item->phone2 }}<br>
        <i class="fa fa-phone" style="width:30px"></i> <i class="flag-icon flag-icon-am flag-icon-squared "></i>{{ $item->phone3 }}5<br>
        <i class="fa fa-envelope" style="width:30px"> </i>{{ $item->email }}<br>
      @endforeach
      </div>
      <div class="w3-col m6">
        <form class="w3-container"  method="post" name="myForm" id="myForm">
        {{ csrf_field() }}
    <div class="w3-section">
      <label>Name*</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Nname" id="Nname" >
    </div>
  <div class="w3-section">
      <label>Company Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="CName" id="CName">
    </div>
    <div class="w3-section">
      <label>Email*</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" id="Email" >
    </div>
  <div class="w3-section">
      <label>Phone*</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Phone" id="Phone" >
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" id="Message">
    </div>
         <button type="submit"   id="bttn" class="w3-button w3-block w3-black">SEND MESSAGE</button>
    <div class="w3-section w3-center" style="color:red;height:50px">
      <em id="load" style="display: block;color:black"></em><em id="res" style="color:green;"></em><em id="req"></em>
    </div>
    </form>
    </div>
  </div>
</div>
  
<!-- End Page Content -->

<!-- Google Maps -->
<div id="googleMap" style="width:100%;height:420px;"></div>
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(40.157813, 44.511859);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLLYhc_mCUpZWwSHp32YPuiRbIf09wVqo&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

@endsection

@section('footer')
	@parent
@endsection