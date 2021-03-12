<?php

namespace App\Http\Livewire\Inline;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return <<<'blade'
            <nav class="navbar navbar-expand-lg navbar-light grd-light-1">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <strong>{{ __('home.website_title') }}</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">
                                    {{ __('default.home') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link">
                                    {{ __('default.about') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contacts') }}" class="nav-link">
                                    {{ __('default.contacts') }}
                                </a>
                            </li>
                        @if (Route::has('login'))
                            @auth
                            @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">
                                    {{ __('default.login') }}
                                </a>
                            </li>

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">
                                    {{ __('default.register') }}
                                </a>
                            </li>
                            @endif
                            @endauth    
                        @endif
                        </ul>
                    </div>
                </div>
            </nav>
        blade;
    }
}
