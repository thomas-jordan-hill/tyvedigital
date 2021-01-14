@extends('layouts.app')

@section('content')

    <div class="container container-global create-blog" id="create-blog">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <form method="POST" action="{{action('BlogController@store')}}" class="col-12" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="field">
                            <label class="label" for="title"><h5 class="m-0 alt-h5">Title</h5></label>

                            <div class="control">
                                <input class="form-control px-0 @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title')}}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                @endif    
                            </div>
                        </div>    

                        <div class="field">
                            <label class="label mt-3 mb-2" for="excerpt"><h5 class="m-0 alt-h5">Excerpt</h5></label>

                            <div class="control">
                                <input class="form-control px-0 @error('excerpt') is-invalid @enderror" name="excerpt" id="excerpt" value="{{ old('excerpt')}}">
                                @error('excerpt')
                                    <div class="invalid-feedback">{{ $errors->first('excerpt') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <label class="mt-3 mb-3" for="cover_image"><h5 class="m-0 alt-h5">Image upload</h5></label>
                            <input type="file" class="form-control-file" name="blog_cover_image[]" multiple>
                            @error('blog_cover_image')
                                <div class="invalid-feedback">{{ $errors->first('blog_cover_image') }}</div>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label mt-3 mb-2" for="body"><h5 class="m-0 alt-h5">Body</h5></label>

                            <div class="control">
                                <input class="form-control px-0 @error('body') is-invalid @enderror" name="body" id="body" value="{{ old('body')}}">
                                @error('body')
                                    <div class="invalid-feedback">{{ $errors->first('body') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="field mt-3 mb-0">
                            <div class="control">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>

                    </form>    
                </div>
            </div>
        </div>
    </div>

@endsection