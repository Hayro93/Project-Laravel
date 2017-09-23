@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{ route('home') }}"> <h3 class="w3-wide w3-center">Edit "Home" Page</h3></a>
            <div class="w3-row w3-padding-32">
                <div class="w3-col m6 w3-padding-right">
                    <div class="edit-form">
                        <p>Home Image</p>
                        @foreach($array1 as $item)
                        <img src="../images/{{ $item->image }}" class="w3-image">
                            <form action="{{ route('admin/home') }}" method="post" enctype="multipart/form-data">
                            <input type="file" name="image" id="image" class="input-file" required><br>
                            <input type="submit" class=" w3-block input-sub" name="sub1" value="Submit">
                            </form>
                    </div>
                </div>
                <div class="w3-col m6">
                    <form action="{{ action('HomeController@index') }}" method="POST">
                        <p>Title</p>
                        <textarea type="text" name="title" style="width: 100%;" autofocus>{{ $item->title }}</textarea><br>
                        <p>Description</p>
                        <textarea type="text" name="text" style="width: 100%;height: 241px">{{ $item->text }}</textarea><br>
                        <input type="submit" class="w3-block input-sub" name="sub2" value="Submit">
                    </form>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
