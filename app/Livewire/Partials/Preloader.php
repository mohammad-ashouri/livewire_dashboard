<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Preloader extends Component
{
    /**
     * Preloader loaded status
     * @var bool
     */
    public bool $loaded = false;

    /**
     * Preloader hiding counter
     * @var int
     */
    public int $counter = 800;

    /**
     * Listeners
     * @var string[]
     */
    protected $listeners = [
        'triggerPreloader',
        'hidePreloader' => 'hidePreloader',
    ];

    /**
     * Triggers preloader when dispatched
     * @return void
     */
    public function triggerPreloader(): void
    {
        $this->loaded = true;
        $this->dispatch('start-preloader-timeout', ['counter' => $this->counter]);
    }

    /**
     * Hides preloader when dispatched
     * @return void
     */
    public function hidePreloader(): void
    {
        $this->loaded = false;
        $this->dispatch('preloaderFinished');
    }

}
