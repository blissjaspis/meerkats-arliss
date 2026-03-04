<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public string $name = '';
    public string $email = '';
    public string $message = '';

    public function submitContact()
    {
        $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        session()->flash('success', 'Thank you for your message! We will get back to you soon.');

        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
