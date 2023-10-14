<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHomeSlideComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $sub_title;
    public $offer;
    public $link;
    public $status;
    public $image;

    public function addSlide(){
        $this->validate([
            'title' => 'required',
            'sub_title' => 'required', 
            'offer' => 'required',
            'link' => 'required',
            'status' => 'required', 
            'image' => 'required'
        ]);

        $slide = new HomeSlider();
        $slide->title = $this->title;
        $slide->sub_title = $this->sub_title;
        $slide->offer = $this->offer;
        $slide->link = $this->link;
        $slide->status = $this->status;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('slider',$imageName);
        $slide->image = $imageName;
        $slide->save();
        session()->flash('message','Slide has been added!');
    }


    public function render()
    {
        return view('livewire.admin.admin-add-home-slide-component');
    }
}
