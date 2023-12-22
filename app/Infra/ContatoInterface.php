<?php

namespace App\Infra;

interface ContatoInterface
{
    public function save(string $name, string $phone, string $email, int $contact_type, string $message);
}