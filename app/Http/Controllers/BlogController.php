<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Canvas\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.blog');
    }

    public function show($slug)
    {
        $post = Post::with('tags', 'topic')->published()->get();
        $post = $post->firstWhere('slug', $slug);

        if (optional($post)->published) {
            $data = [
                'author' => $post->author,
                'post' => $post,
                'meta' => $post->meta,
            ];

            event(new \Canvas\Events\PostViewed($post));

            return view('blog.show', compact('data'));
        }else{
            abort(404);
        }
    }

    public function getPostsByTag(string $slug)
    {
        if (\Canvas\Tag::where('slug', $slug)->first()) {
            $data = [
                'posts' => Post::whereHas('tags', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })->published()->orderByDesc('published_at')->paginate(9),
                'slug' => $slug,
            ];

            $tag = \Canvas\Tag::where('slug', $slug)->first();
            return view('blog.tag', compact('data','tag'));
        } else {
            abort(404);
        }
    }

    public function getPostsByTopic(string $slug)
    {
        if (\Canvas\Topic::where('slug', $slug)->first()) {
            $data = [
                'posts' => Post::whereHas('topic', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })->published()->orderByDesc('published_at')->paginate(9),
                'slug' => $slug,
            ];

            $topic = \Canvas\Topic::where('slug', $slug)->first();
            return view('blog.topic', compact('data', 'topic'));
        } else {
            abort(404);
        }
    }

}
