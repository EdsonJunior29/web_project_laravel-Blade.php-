<?php

namespace App\Services;

use App\Exceptions\ContatoException;
use App\Repositories\ContatoRepository;

class ContatoService
{
    protected $contact;

    public function __construct() {
        $this->contact = new ContatoRepository();
    }

    public function saveContact(string $name, string $phone, string $email, int $contact_type, string $message)
    {
        try {
            $this->contact->save($name, $phone, $email, $contact_type, $message);
        } catch (\Throwable $th) {
            throw new ContatoException('Erro saved contact', 500);
        }
        
    }
}