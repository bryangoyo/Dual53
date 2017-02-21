<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class empresaApiTest extends TestCase
{
    use MakeempresaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateempresa()
    {
        $empresa = $this->fakeempresaData();
        $this->json('POST', '/api/v1/empresas', $empresa);

        $this->assertApiResponse($empresa);
    }

    /**
     * @test
     */
    public function testReadempresa()
    {
        $empresa = $this->makeempresa();
        $this->json('GET', '/api/v1/empresas/'.$empresa->id);

        $this->assertApiResponse($empresa->toArray());
    }

    /**
     * @test
     */
    public function testUpdateempresa()
    {
        $empresa = $this->makeempresa();
        $editedempresa = $this->fakeempresaData();

        $this->json('PUT', '/api/v1/empresas/'.$empresa->id, $editedempresa);

        $this->assertApiResponse($editedempresa);
    }

    /**
     * @test
     */
    public function testDeleteempresa()
    {
        $empresa = $this->makeempresa();
        $this->json('DELETE', '/api/v1/empresas/'.$empresa->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/empresas/'.$empresa->id);

        $this->assertResponseStatus(404);
    }
}
