<?php

namespace App\Http\Livewire\Post;

use App\Models\Post_m;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.post.index', [
            'posts' => Post_m::latest()->paginate(5)
        ]);
    }
}