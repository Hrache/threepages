<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactsModel;
use Illuminate\Support\Facades\Validator;

class Contacts extends Component
{
    protected $rules = [
        "subject" => "required|string|max:255",
        "email" => "required|email",
        "content" => "required|string"
    ];

    public function render()
    {
        return view('livewire.contacts')->extends('layouts.default', [
            'title' => __('contacts.title')
        ])->section('content');
    }

    public function send()
    {
        request()->validate($this->rules);

        $cm = new ContactsModel();
        $cm->fill(request()->all())->save();

        return back()->withSuccess(__('success.contact-sent'));
    }
}
