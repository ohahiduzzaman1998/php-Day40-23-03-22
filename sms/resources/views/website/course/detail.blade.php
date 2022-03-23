@extends('master.front.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="col">
                <p class="text-center text-success">{{Session::get('message')}}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset($subject->image)}}" alt="" class="w-100"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{$subject->title}}</h1>
                        <p> Course Fee : {{$subject->fee}}</p>
                        <a href="{{route('enroll-now',['id'=>$subject->id])}}" class="btn btn-success w-25 mx-auto {{$check ==true ? 'disabled btn-danger':''}}">Enroll Now</a>
                        <hr/>
                        <h2>Trainer name :{{$subject->teacher->name}}</h2>
                        <img src="{{asset($subject->teacher->image)}}" alt="" height="200" width="200"/>
                        <ul>
                            <li><a href="">Trainer LinkedIn</a> </li>
                            <li><a href="">Trainer Facebook Link</a> </li>
                            <li><a href="">Trainer Twitter Link</a> </li>
                        </ul>
                        <hr/>
                        <div>{!! $subject->short_description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body rounded-0">
                        <h1>Course Module Detail</h1>
                        <hr/>
                        <div>{!! $subject->long_description !!}</div>
                        <hr/>
                        <a href="{{route('enroll-now',['id'=>$subject->id])}}" class="btn btn-success w-25 mx-auto {{$check ==true ? 'disabled btn-danger':''}}"> Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

