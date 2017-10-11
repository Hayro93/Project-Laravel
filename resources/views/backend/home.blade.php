@extends('backend.layouts.app')

@section('content')
<div class="w3-container">
    <div class="w3-row">
        <div class="w3-col m1" style="display: list-item;"></div>
            <div class="w3-col m10 edit-form">
                    @foreach($array1 as $item)
                        <form action="{{ action('Admin\Core@home') }}" enctype="multipart/form-data"  method="POST">
                            {{ csrf_field() }}
                            <ul>
                                <li style="width: 48%">
                                    <label>Home Image </label><i class="fa fa-pencil-square-o" style="font-size:10px;color:black;margin-left: 5px"></i>
                                    <img src="../images/{{ $item->image }}" class="w3-image" >
                                    <input type="file" name="image" id="image" class="input-file w3-border w3-border-blue" style="margin-top: 20px;width: 100%;padding: 5px;">
                                </li>

                                <li style="width: 51%">
                                    <label>Title</label><i class="fa fa-pencil-square-o" style="font-size:10px;color:black;margin-left: 5px"></i>
                                    <textarea class="w3-border w3-border-blue" type="text" name="title" style="width: 100%;" autofocus>{{ $item->title }}</textarea>
                                    <label>Description</label><i class="fa fa-pencil-square-o" style="font-size:10px;color:black;margin-left: 5px"></i>
                                    <textarea class="w3-border w3-border-blue" type="text" name="text" style="width: 100%;height: 225px" >{{ $item->text }}</textarea>
                                    <input type="submit" class="w3-button w3-border w3-border-blue" name="sub" value="Save" style="border-radius:5px;margin-top: 8px;width: 15%;float: right">
                                </li>
                            </ul>
                        </form>
                    @endforeach
            </div>
        <div class="w3-col m1"></div>
    </div>


                    {{--Edit Team Section--}}
    <div class="w3-row">
        <div class="w3-col m1" style="display: list-item;"></div>
            <div class="w3-col m10 edit-form">

                @php
                $i = 1;
                @endphp
                @foreach($array2 as $item)
                    @php

                        /*$id = $item->user_id;
                        $data  = User::find($id);
                        $user_name = $data->name;*/
                    @endphp
                    <form action="{{ action('Admin\Core@home') }}" enctype="multipart/form-data"  method="POST">
                        {{ csrf_field() }}
                        <div class="w3-col m3  w3-margin-bottom">
                            <div class="w3-card-2" style="padding-top: 15px;">
                                <div class="w3-container">
                                    <img src="../images/{{$item->image}}" alt="{{$item->title}}" style="width:100%">
                                        <input type="file" name="{{ 'image'.$i }}" id="{{ 'image'.$i }}" class="input-file w3-border w3-border-blue" style="margin-top: 20px;width: 100%;padding: 5px;">
                                        <label>Name </label><i class="fa fa-pencil-square-o" style="font-size:10px;color:black;margin-left: 5px"></i>
                                        <textarea class="w3-border w3-border-blue" type="text" name="{{ 'title'.$i }}" style="width: 100%;height: 40px;">{{$item->title}}</textarea>

                                        <label>Position</label><i class="fa fa-pencil-square-o" style="font-size:10px;color:black;margin-left: 5px"></i>
                                        <textarea class="w3-border w3-border-blue" type="text" name="{{ 'position'.$i }}" style="width: 100%;height: 40px;">{{$item->position}}</textarea>

                                        <label>Description </label><i class="fa fa-pencil-square-o" style="font-size:10px;color:black;margin-left: 5px"></i>
                                        <textarea class="w3-border w3-border-blue" type="text" name="{{ 'desc'.$i }}" style="width: 100%;height: 100px ">{{$item->desc}}</textarea>
                                        <div style=" margin-top: 8px; width: 100%; float: right;">
                                            <input type="submit" name="{{ 'sub'.$i }}" value="Save" class="w3-button w3-border w3-border-blue" style="border-radius: 5px;float:right">
                                        </div>
                                    <div style=" margin-top: 5px; width: 100%; float: right;">
                                        <p style="font-size: 9px;float: right;margin-bottom: 1px;">Last Editor <b>{{ $item->user_id }}</b></p>
                                    </div>
                                    <div style=" width: 100%; float: right;">
                                        <p style="font-size: 9px;float: right;">{{ $item->updated_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @php
                        $i++;

                    @endphp
                @endforeach
            </div>
        <div class="w3-col  m1" style=""></div>
    </div>

</div>
@endsection
