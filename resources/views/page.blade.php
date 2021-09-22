@extends('layouts.frontend')
@section('content')

 <!-- START Page Banner -->
 <section class="page-banner" style="" >
    <div class="container">
        <div class="banner-content text-center">
            <h2>{!!$page->title!!}</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END Page Banner -->

<!-- START Project Details Content -->
<section class="project-details-content pt-120 rpt-100 pb-70">
    <div class="container">
        <div class="project-details-content-inner">

            {!!$page->body!!}
        </div>
    </div>
</section>
<!-- END Project Details Content -->
{{-- {{$page}} --}}
@endsection
