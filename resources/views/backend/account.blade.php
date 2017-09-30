@extends('backend.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="w3-wide w3-center" style="text-transform: capitalize;">{{ Auth::user()->name }}</h3>
                <div class="w3-row w3-padding-32">
                    <div class="w3-col m6 w3-padding-right">

                    </div>
                    <div class="w3-col m6">


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection