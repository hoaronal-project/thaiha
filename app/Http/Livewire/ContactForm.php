<?php

namespace App\Http\Livewire;

use App\Models\ContactMessage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ContactForm extends Component
{
    public $state = [];

    public function createContactMessage()
    {
        $this->resetErrorBag();

        Validator::make($this->state, [
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['nullable', 'string', 'email'],
        ])->validateWithBag('createContactMessage');

        ContactMessage::create([
            'name' => $this->state['name'],
            'phone' => $this->state['phone'],
            'email' => $this->state['email'] ?? null,
            'address' => $this->state['address'] ?? null,
            'content' => $this->state['content'] ?? null,
        ]);

        return redirect('/');
    }

    public function render()
    {
        return view('contact-form');
    }
}
