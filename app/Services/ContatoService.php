<?php

namespace App\Services;

use App\Exceptions\ContatoException;
use App\Repositories\ContatoRepository;

class ContatoService
{
    protected $contact;

    public function __construct(ContatoRepository $repository) {
        $this->contact = $repository;
    }

    public function saveContact(string $name, string $phone, string $email, int $contact_type, string $message) : bool
    {
        try {
           $saved =  $this->contact->save($name, $phone, $email, $contact_type, $message);
        } catch (\Throwable $th) {
            throw new ContatoException($th->getMessage(), 500);
        }

        return $saved;
    }
}