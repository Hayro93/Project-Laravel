@extends('frontend.layouts.templet')
@section('navbar')
	@parent
@endsection

@section('header')
	
@endsection

@section('content')
	<!-- About Section -->
<div class="w3-container" style="padding:64px" id="about-us">
  <h2 class="w3-wide w3-center">ABOUT US</h2>
    @foreach($array1 as $item)
  <p class="w3-center"><em>{{$item->title}}</em></p>
  <p>{{$item->description}}</p>
    @endforeach
</div>
    <!-- Promo Section "Statistics" -->
    <div class="w3-container w3-row-padding w3-center w3-light-grey w3-padding-64">
      @foreach($array2 as $promo)
      <div class="w3-third">
        <span class="w3-xxlarge">{{ $promo->title }}</span>
        <br>{{ $promo->desc }}
      </div>
      @endforeach
      <!--  <div class="w3-quarter">
          <span class="w3-xxlarge">150+</span>
          <br>Meetings
        </div> -->
    </div>
@endsection

@section('footer')
	@parent
@endsection