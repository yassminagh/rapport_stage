<?php

namespace App\Http\Livewire\Admin\Author;

use Livewire\Component;
use App\Models\Author;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $status, $author_id;

    public function rules()
    {
        return[
            'name'=> 'required|string',
            'status'=> 'nullable'
        ];
    }

    public function resetInput()
    {
        $this->name=null;
        $this->status=null;
        $this->author_id=null;
    }

    public function storeAuthor()
    {
        $validatedData = $this->validate();
        Author::create([
            'name' => $this->name,
            'status' => $this->status == true ? '1':'0',
        ]);
        session()->flash('message','Author Added Successfully');
        $this->dispatchBrowserEvent('close.modal');
        $this->resetInput();
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    public function editAuthor(int $author_id)
    {
        $this->author_id = $author_id;
        $author = Author::findOrFail($author_id);
        $this->name = $author->name;
        $this->status = $author->status;
    }

    public function updateAuthor()
    {
        $validatedData = $this->validate();
        Author::findOrFail($this->author_id)->update([
            'name' => $this->name,
            'status' => $this->status == true ? '1':'0',
        ]);
        session()->flash('message','Author Updated Successfully');
        $this->dispatchBrowserEvent('close.modal');
        $this->resetInput();
    }

    public function deleteAuthor($author_id)
    {
        $this->author_id = $author_id;
    }

    public function destroyAuthor()
    {
        Author::findOrFail($this->author_id)->delete();
        session()->flash('message','Author Deleted Successfully');
        $this->dispatchBrowserEvent('close.modal');
        $this->resetInput();
    }

    public function render()
    {
        $authors = Author::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.author.index', ['authors' => $authors])
                    ->extends('layouts.admin')
                    ->section('content');
    }
}
