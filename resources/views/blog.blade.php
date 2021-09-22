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
                        <h4>Blog Catagory</h4>
                        <div class="course-module">
                            <ul>
                                <li>
                                    <a href="servicedetails.html"><i class="icofont-double-right"></i> Web Design <span>32</span></a>
                                </li>
                                <li>
                                    <a href="servicedetails.html"><i class="icofont-double-right"></i> Web Development <span>22</span></a>
                                </li>
                                <li>
                                    <a href="servicedetails.html"><i class="icofont-double-right"></i> Graphic Design <span>25</span></a>
                                </li>
                                <li>
                                    <a href="servicedetails.html"><i class="icofont-double-right"></i> Online Marketing <span>38</span></a>
                                </li>
                                <li>
                                    <a href="servicedetails.html"><i class="icofont-double-right"></i> App Development <span>26</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-12">
                            <div class="blog-item" style="margin-bottom: 20px !important">
                                <div class="blog-image" style="background-image: url({{asset('storage/'. $post->image)}})"></div>
                                <div class="blog-content">
                                    <span class="date">{{ date("d F Y", strtotime($post->created_at))}}</span>
                                    <h5><a href="{{route('blog.details', $post->slug)}}">{{$post->title}}</a></h5>
                                    <p>{{$post->excerpt}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Blog Details Content -->

@endsection
