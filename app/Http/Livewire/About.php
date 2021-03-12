<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TextsModel;
use App\Models\ImagesModel;

class About extends Component
{
    public $data;

    public function render()
    {
        $this->data = collect([
            'image' => ImagesModel::find(1)->first(),
            'text' => TextsModel::find(3)->first()
        ]);

        return view('livewire.about')->extends('layouts.default', [
            'title' => __('about.title')
        ])->section('content');
    }
}
