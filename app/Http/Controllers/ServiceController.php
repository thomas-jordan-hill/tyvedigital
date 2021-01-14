<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index (){

        $pagetitle = 'Services';

        return view('services.index', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function show(Blog $blog)
    {

        $pagetitle = "Blog";
        $pagenavbg = 'background-grey';
        $pagesections = Blogsection::get();

        return view('blog.show', [
            'pagetitle' => $pagetitle,
            'pagesections'=> $pagesections,
            'pagenavbg' => $pagenavbg,
            'blog' => $blog,
            ]);
    }

    public function create(Blog $blog) 
    {
        $pagetitle = 'Blog <small class="alt-small">| Create</small>';
        $pagenavbg = 'background-grey';
        $pagesections = Blogsection::get();

        return view('blog.create', [
            'pagetitle' => $pagetitle,
            'pagenavbg' => $pagenavbg,
            'pagesections'=> $pagesections,
            'blog' => $blog,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:blogs|max:255',
            'blog_cover_image' => 'required',
            'blog_cover_image.*' => 'image|mimes:jpeg,png,jpg,svg,gif|max:1999',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('blog_cover_image'))
        {
            foreach($request->file('blog_cover_image') as $image)
            {
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $image->storeAs('public/blog_cover_images', $fileNameToStore);
                $data[] = $fileNameToStore;
            }
        }
        else 
        { 
            $fileNameToStore = '/storage/blog_cover_images/2020-may-2nd-homepage-latestwork-1-min.jpg';
        }

        $blog = new Blog();
        $blog->title = request('title');
        $blog->slug = Str::slug($blog->title, '-');
        $blog->excerpt = request('excerpt');
        $blog->body = request('body');
        $blog->user_id = auth()->user()->id;
        $blog->blog_cover_image = json_encode($data);
        $blog->save();

        return redirect('/blog')->withInput();
    }

    public function edit(Blog $blog)
    {
        $pagetitle = 'Blog <small class="alt-small">| Edit</small>';
        $pagenavbg = 'background-grey';
        $pagesections = Blogsection::get();

        return view('blog.edit', [
            'blog' => $blog,
            'pagetitle' => $pagetitle,
            'pagenavbg' => $pagenavbg,
            'pagesections'=> $pagesections
        ]);
    }

    public function update(Blog $blog, Request $request) 
    {
        $request->validate([
            'title' => 'unique:blogs,title,' . $blog->id,
            'blog_cover_image.*' => 'image|mimes:jpeg,png,jpg,svg,gif|max:1999',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('blog_cover_image'))
        {
            foreach($request->file('blog_cover_image') as $image)
            {
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $image->storeAs('public/blog_cover_images', $fileNameToStore);
                $data[] = $fileNameToStore;
            }
        }
        else 
        { 
            $fileNameToStore = '/storage/cover_images/2020-may-2nd-homepage-latestwork-1-min.jpg';
        }

        $blog->title = request('title');
        $blog->slug = Str::slug($blog->title, '-');
        $blog->excerpt = request('excerpt');
        $blog->body = request('body');
        $blog->user_id = auth()->user()->id;
        if(isset($data)){
            $blog->blog_cover_image = json_encode($data);
        }
        $blog->save();

        return redirect(route('blog.show', $blog));
    }
}
