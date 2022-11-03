<?php

namespace App\Http\Livewire;

use App\Models\ContactMessage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class FooterNewsletterForm extends Component
{
    public $state = [
        'categories' => [],
    ];

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
            'content' => implode(', ', $this->state['categories'] ?? []),
        ]);

        return redirect('/');
    }

    public function render()
    {
        return view('footer-newsletter-form');
    }
}
