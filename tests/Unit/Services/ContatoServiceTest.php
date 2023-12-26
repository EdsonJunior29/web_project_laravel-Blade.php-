<?php

namespace Tests\Unit;

use App\Exceptions\ContatoException;
use App\Repositories\ContatoRepository;
use App\Services\ContatoService;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class ContatoServiceTest extends TestCase
{

    /** @test */
    public function throwContatoExceptionWhenSavedContact(): void
    {
        $mockRepository = $this->createMock(ContatoRepository::class);
        $this->expectException(ContatoException::class);

        $mockRepository->expects($this->once())->method('save')
            ->willThrowException(new ContatoException());

        $name = 'Edson Junior';
        $phone = '61 8889717411';
        $email = 'rteste@teste.com';
        $contact_type = 2;
        $message = 'Test ';

        $saved = new ContatoService($mockRepository);

        $saved->saveContact($name, $phone, $email, $contact_type, $message);
    }

     /** @test */
     public function savedContact(): void
     {
        $mockRepository = $this->createMock(ContatoRepository::class);
        $mockRepository->expects($this->once())
            ->method('save')
            ->with(
                $this->equalTo('Edson'),
                $this->equalTo('61 8889717411'),
                $this->equalTo('rteste@teste.com'),
                $this->equalTo(2),
                $this->equalTo('Test')
            ) 
            ->willReturn(true);
 
         $saved = new ContatoService( $mockRepository);
 
        $contatoSaved =  $saved->saveContact('Edson', '61 8889717411', 'rteste@teste.com', 2, 'Test');

        assertTrue($contatoSaved);
    }
}