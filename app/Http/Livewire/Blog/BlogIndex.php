<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Canvas\Post;
Use Canvas\Topic;
Use Canvas\Tag;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class BlogIndex extends Component
{
    use WithPagination;

    public $data, $search;

    protected $updatesQueryString = [
        'search' => ['except' => ''],
    ];

    public function render()
    {
        if ($this->search === null) {
            $posts = Post::published()->orderByDesc('published_at')->paginate(9);    
        }else{
            $posts = Post::where('title', 'like', '%' . $this->search . '%')->orderByDesc('published_at')->paginate(9);
        }

        
        $topics = Topic::orderByDesc('id')->withCount('posts')->get();
        $tags = Tag::orderByDesc('id')->get();
        return view('livewire.blog.blog-index', compact('posts','topics', 'tags'));
    }

}
