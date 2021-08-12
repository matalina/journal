<?php

namespace Tests\Unit\RapidLogging;

use PHPUnit\Framework\TestCase;
use App\Http\Requests\RapidLogging\BulletStoreRequest;

class BulletStoreRequestTest extends TestCase
{
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new BulletStoreRequest();
    }

    public function testRules()
    {
        $this->assertEquals([
        'type_id' => ['required','integer','exists:types,id'],
                'content' => ['required','string'],
                'date' => ['required','date'],
                'signifier' => ['nullable','integer','exists:types,id'],
            ],
            $this->subject->rules()
        );
    }

    public function testAuthorize()
    {
        $this->assertTrue($this->subject->authorize());
    }
}
