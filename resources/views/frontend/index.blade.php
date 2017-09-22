@extends('frontend.layouts.templet')
@section('navbar')
  @parent
@endsection

@section('header')
  <!-- Header -->
  <header class="w3-display-container w3-animate-opacity w3-wide bgimg" id="home">
   {{-- <img class="w3-image " src="images/welcom.png" alt="Welcome" style="width:100%;max-height:700px;">--}}
    <div class="w3-display-middle w3-margin-top w3-center">
      <!--  <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min">
      <b>T</b></span><span class="w3-hide-small w3-text-black">Call Center</span></h1>  -->
    </div>
  </header>
@endsection

@section('content')
<div class="w3-container" style="padding:0 64px 5px 64px" id="about-us">
  @foreach($array1 as $item)
  <h2 class="w3-wide w3-center">{{ $item->title }}</h2>
  <p class="w3-center"><em>We offer the Solution</em></p>
  <p>{{ $item->text }}</p>
  @endforeach
</div>
<!-- Team Section -->

<div class="w3-container" style="padding:0 64px 15px 64px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    @foreach($array2 as $item)
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card-2">
        <img src="images/{{$item->image}}" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>{{$item->title}}</h3>
          <p class="w3-opacity">{{$item->position}}</p>
          <p>{{$item->desc}}</p>
          {{--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>--}}
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection

@section('footer')
  @parent
@endsection