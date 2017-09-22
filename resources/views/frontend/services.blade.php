@extends('frontend.layouts.templet')
@section('navbar')
    @parent
@endsection

@section('header')

@endsection

@section('content')
    <!-- Services -->
    <div class="w3-container" style="padding:64px" id="services">
        <h2 class="w3-wide w3-center">SERVICES</h2>
        <div class="w3-row-padding w3-grayscale" style="margin-top:64px">

            @foreach ($results as $result)
                @php
                    $results = array_splice($results, 1);
                @endphp
                @if(!empty($result->title))
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2">
                            <div class="w3-container">
                                <h3>{{ $result->title }}</h3>
                                <ul>
                                    @foreach ($results as $result)
                                        @if (!empty($result->description))
                                            <li>{{ $result->description }}</li>
                                        @else
                                            @break
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


@endsection

@section('footer')
    @parent
@endsection
