<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ArticleCard extends Component
{
    public function render()
    {
        return view('livewire.article-card', ['products'=> Product::all()]);
    }
}
