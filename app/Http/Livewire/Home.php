<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TextsModel;
use App\Models\ImagesModel;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'texts' => TextsModel::all(),
            'images' => ImagesModel::all()
        ])->extends('layouts.default', [
            'title' => __('home.website_title')
        ])->section('content');
    }
}
