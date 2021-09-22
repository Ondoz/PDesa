@extends('layouts.frontend')
@section('content')

   <!-- START Hero Section -->
   <section class="hero-section">
        <div class="hero-shape">
            <img src="assets/images/hero/hero-shape.png" alt="Hero Shape Image" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content">
                        <h1>{!!setting('site.title-web')!!}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Hero Section -->
     <!-- START Service Section -->
     <section class="service-section pt-20 rpt-90 rpb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="service-item">
                        <div class="serv-iconimg">
                            <img src="assets/images/service/serv-icon1.png" alt="Service Icon" />
                        </div>
                        <div class="serv-content">
                            <h5><a href="servicedetails.html">{!!setting('jumlah-penduduk.jumlah_penduduk')!!}<br /> JUMLAH PENDUDUK</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service-item">
                        <div class="serv-iconimg">
                            <img src="assets/images/service/serv-icon2.png" alt="Service Icon" />
                        </div>
                        <div class="serv-content">
                            <h5><a href="servicedetails.html">{!!setting('jumlah-penduduk.jumlah_penduduk_laki_laki')!!}<br />LAKI - LAKI</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service-item">
                        <div class="serv-iconimg">
                            <img src="assets/images/service/serv-icon3.png" alt="Service Icon" />
                        </div>
                        <div class="serv-content">
                            <h5><a href="servicedetails.html">{!!setting('jumlah-penduduk.jumlah_penduduk_perempuan')!!}<br />PEREMPUAN</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Service Section -->

    <!-- START Choose Us Section -->
    <section class="chooseus-section pt-20 rpt-100 rpb-95">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="chooseus-left-content">
                        <div class="experience-years">
                            <h5>{!!setting('general.nama')!!}</h5>
                            <h6>Lurah Sendangadi</h6>
                        </div>
                        <div class="chooseus-img">
                            <img src="assets/images/chooseus/chooseus-img.jpg" alt="Choose Us Image" />
                        </div>
                        <div class="experience-content">
                            <blockquote>{!!setting('general.description') !!}</blockquote>
                            <div class="quotation-icon">
                                @if (setting('general.image_lurah') == null)
                                    <img src="assets/images/chooseus/quotation-icon.png" alt="Quotation" />
                                @else
                                    <img src="{!!setting('general.image_lurah')!!}" alt="Quotation" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chooseus-right-content">
                        <div class="section-title">
                            <h2>VISI KALUARAHAN</h2>
                        </div>
                        <blockquote>{{setting('visi-dan-misi.visi')}}</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Choose Us Section -->

    <!-- START Blog Section -->
    <section class="blog-section pt-30 rpt-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <span>Update Berita</span>
                        <h2>Kalurahan Sendangadi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-6">
                        <div class="blog-item">
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
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <a href="{{route('blog.index')}}" class="btn theme-btn">Selengkapnya<i class="icofont-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Blog Section -->

@endsection

