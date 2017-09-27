<!DOCTYPE html>
<html>
<title>Teleyan | Call Center in Armenia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/call-center-in-armenia-teleyan.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/flag-icon.css">
<link rel="stylesheet" href="css/flag-icon.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<!-- <script type="text/javascript" src="js/tawk.js"></script> -->
<script type="text/javascript" src="js/jscript.js"></script>
<style type="text/css">

  .bgimg{
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    min-height: 600px;
  }

</style>
<body>

@section('navbar')
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="{{route('home')}}" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="{{route('about')}}" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
    <a href="{{route('services')}}" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SERVICES</a>
    <a href="{{route('contacts')}}" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT US</a>
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#about-us" class="w3-bar-item w3-button w3-padding-large">ABOUT US</a>
  <a href="#services" class="w3-bar-item w3-button w3-padding-large">SERVICES</a>
  <a href="#contact-us" class="w3-bar-item w3-button w3-padding-large">CONTACT US</a>
</div>
@show

@yield('header')


@yield('content')

@section('footer')
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <!-- <a href="#home" class="w3-btn w3-padding w3-light-grey w3-hover-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a> -->
  <div class="w3-xlarge w3-section">
    {{--@foreach($arr as $item)
      <a href="{{ $item->facebook }}" target="_blank"><i class="fa fa-facebook-official w3-hover-text-indigo"></i></a>
      <a href="{{ $item->google }}"><i class="fa fa-google-plus-square w3-hover-text-red"></i></a>
      <a href="{{ $item->linkedin }}" target="_blank"><i class="fa fa-linkedin w3-hover-text-indigo"></i></a>
    @endforeach--}}
  </div>
  <p>&copy; {{date('Y')}} Company, Inc. | Powered by <a href="http://www.teleyan.com" title="Teleyan" target="_blank" class="w3-hover-text-red" style="text-decoration:none;">Teleyan</a></p>
</footer>
@show

</body>
</html>

