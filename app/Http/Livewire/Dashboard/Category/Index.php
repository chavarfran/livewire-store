<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Http\Livewire\Dashboard\OrderTrait;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
   
    use WithPagination;

    public function render()
    {
        $categories = Category::paginate(10);
        return view('Livewire.Dashboard.Category.Index', compact('categories'));
    }

    public function delete(Category $category)
    {
        $this->emit("deleted");
        $category->delete();
    }

}
