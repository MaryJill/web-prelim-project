@extends('layouts.app')



@section('content')

<section class="container card">


    <div class="row">
        <div class="col-sm">
            <img src="{{asset('image/m4.png')}}" alt="">
        </div>
        <div class="col-sm">
            <img src="{{asset('image/m5.png')}}" alt="">
        </div>
        <div class="col-sm">
            <img src="{{asset('image/m6.png')}}" alt="">
        </div>
    </div>
        
</section>
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Services</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('services.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('services.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

