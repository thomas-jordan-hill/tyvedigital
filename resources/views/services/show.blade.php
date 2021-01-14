@extends('layouts.app')

@section ('content')
    
    @guest
    @else
    <div class="container container-global" id="blog-{{$blog->slug}}">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="/blog">
                    <p class="light blue m-0 p-0">Back to Blog</p>
                </a>    
            </div>
        </div>
    </div>
    <div class="container container-global">
        <div class="row">
            <div class="col-12">
                <div class="background-lightgrey radius-15 p-4 mb-5">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h2 class="alt-h2">Blog tools</h2>
                        </div>
                        <div class="col-12 text-right">
                            <a href='/blog/create'> 
                                <div class="mb-3 mr-3 d-inline-block">
                                    <button class='btn btn-primary ml-auto'>Create a new blog</button>
                                </div>    
                            </a>
                            <a href='/blog/{{$blog->slug}}/edit'> 
                                <div class="mb-3 d-inline-block">
                                    <button class='btn btn-tertiary ml-auto'>Edit this blog</button>
                                </div>    
                            </a>
                        </div>
                    </div>
                </div>    
            </div>    
        </div>
    </div>
    @endguest

    <div class="container container-global" id="blog-{{$blog->slug}}">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-9 m-auto text-left">
                        <div class="row">
                            <div class="col-12">
                                <h1>{{$blog->title}}</h1>
                                <p class="grey"><small>Written by</small> {{$blog->user->name}} <small>on {{$blog->created_at->format('jS M Y, H:i')}}</small></p>
                                <p class="mt-4 mb-4">{{$blog->excerpt}}</p>
                                <p class="grey m-0 p-0"><small class="line-height-1">{{ $blog->user_name }}</small></p>
                                <img class="w-100 radius-15" src="{{ url('/storage/blog_cover_images/'.json_decode($blog->blog_cover_image)[0]) }}" alt="">
                                <p class="p my-3">{!!$blog->body!!}</p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection