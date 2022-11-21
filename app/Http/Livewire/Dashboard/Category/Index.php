<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Http\Livewire\Dashboard\OrderTrait;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
   
    use WithPagination;
    use OrderTrait;
    
    public $confirmingDeleteCategory;
    public $categoryToDelete;

    public function render()
    {
        $categories = Category::paginate(10);
        return view('Livewire.Dashboard.Category.Index', compact('categories'));
    }

    public function seletedCategoryToDelete(Category $category)
    {
        $this->confirmingDeleteCategory = true;
        $this->categoryToDelete = $category;
    }

    public function delete()
    {
        $this->emit("deleted");
        $this->confirmingDeleteCategory = false;
        $this->categoryToDelete->delete();
    }
}
