<?php

namespace App\Http\Livewire\Inline;

use Livewire\Component;

class Messages extends Component
{
    public function render()
    {
        return <<<'blade'
            <section id="messages" class="container">
                @if(isset($errors) && count($errors) > 0)
                    @foreach($errors->all() as $error)
                    <article class="alert alert-danger">
                        {{ $error }}
                    </article>
                    @endforeach
                @endif

                @if (session()->has('success'))
                    <article class="alert alert-success">
                        {{ session('success') }}
                    </article>
                @endif

                @if (session()->has('error'))
                    <article class="alert alert-danger">
                        {{ session('error') }}
                    </article>
                @endif
            </section>
        blade;
    }
}
