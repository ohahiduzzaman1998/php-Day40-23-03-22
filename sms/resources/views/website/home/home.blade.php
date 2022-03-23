@extends('master.front.master')

@section('body')
    <section class="notice-section py-5">
        <div class="container">
            <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card card-body">
                            <h2 class="card-title text-center">Notice Title Hoes Here</h2>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad commodi deleniti deserunt et ex ipsum magnam magni maxime non odit quaerat quibusdam, quod reprehenderit saepe sit veniam veritatis voluptatum!</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad commodi deleniti deserunt et ex ipsum magnam magni maxime non odit quaerat quibusdam, quod reprehenderit saepe sit veniam veritatis voluptatum!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body text-center" >
                            <h3 class="card-title">Notice Title Hoes Here</h3>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad commodi deleniti deserunt et ex ipsum magnam magni maxime non odit quaerat quibusdam, quod reprehenderit saepe sit veniam veritatis voluptatum!</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad commodi deleniti deserunt et ex ipsum magnam magni maxime non odit quaerat quibusdam, quod reprehenderit saepe sit veniam veritatis voluptatum!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body">
                            <h3 class="card-title text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad commodi deleniti deserunt et ex ipsum magnam magni maxime non odit quaerat quibusdam, quod reprehenderit saepe sit veniam veritatis voluptatum!</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad commodi deleniti deserunt et ex ipsum magnam magni maxime non odit quaerat quibusdam, quod reprehenderit saepe sit veniam veritatis voluptatum!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($subjects as $subject)
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src=" {{asset($subject->image)}}" class="img-fluid h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>{{$subject->title}}</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            {{$subject->teacher->name}}
                                        </figcaption>
                                    </figure>
                                    <div>{!! $subject->short_description !!}</div>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail',['id'=> $subject->id])}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" placeholder="Enter your Email Here" class="form-control"/>
                            </div>
                            <div class="col-3">
                                <input type="submit" class="btn btn-outline-success w-100" value="Subscribe Now"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
