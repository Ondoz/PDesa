@extends('layouts.frontend')
@section('content')

  <!-- START Blog Details Content -->
  <section class="blog-details py-120 rpy-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="sidebar-widget search-box">
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search here..." required="">
                                <button type="submit"><i class="icofont-search-1"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget blog-catagory">
                        <h4>Update Berita</h4>
                        <div class="course-module">
                            @foreach ($posts as $item)
                            <div class="posting-date">
                                <p><i class="icofont-calendar"></i>{{ date("d F Y", strtotime($item->created_at))}}</p>
                            </div>
                            <h6><a href="{{route('blog_details', $post->slug)}}">{{$item->title}}</a></h6>
                            <p>{{ Str::limit($item->excerpt, 50)}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-details-content">
                    <div class="blog-details-image">
                        <img src="{{asset('storage/'. $post->image)}}" alt="Blog Details Image One" />
                        <div class="blog-publish-date">
                            <span>{{ date("d M Y", strtotime($post->created_at))}}</span>
                        </div>
                    </div>
                    <h3>{{$post->title}}</h3>
                    {!!$post->body!!}
                    <div class="tags">
                        <ul>
                            <li>Tags: </li>
                            <li><a href="#">Medical,</a></li>
                            <li><a href="#"> Doctors,</a></li>
                            <li><a href="#">Theraphi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Blog Details Content --

@endsection
