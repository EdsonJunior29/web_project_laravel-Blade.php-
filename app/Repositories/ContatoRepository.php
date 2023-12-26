<?php

namespace App\Repositories;

use App\Infra\ContatoInterface;
use App\Models\Contato;

class ContatoRepository implements ContatoInterface
{

    protected $contact;

    public function __construct() {
        $this->contact = new Contato();
    }

    public function save(string $name, string $phone, string $email, int $contact_type, string $message) : bool
    {
        $this->contact->fill([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'contact' => $contact_type,
            'message' => $message
        ]);

        return $this->contact->save();
    }
}