<?php

use App\Models\empresa;
use App\Repositories\empresaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class empresaRepositoryTest extends TestCase
{
    use MakeempresaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var empresaRepository
     */
    protected $empresaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->empresaRepo = App::make(empresaRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateempresa()
    {
        $empresa = $this->fakeempresaData();
        $createdempresa = $this->empresaRepo->create($empresa);
        $createdempresa = $createdempresa->toArray();
        $this->assertArrayHasKey('id', $createdempresa);
        $this->assertNotNull($createdempresa['id'], 'Created empresa must have id specified');
        $this->assertNotNull(empresa::find($createdempresa['id']), 'empresa with given id must be in DB');
        $this->assertModelData($empresa, $createdempresa);
    }

    /**
     * @test read
     */
    public function testReadempresa()
    {
        $empresa = $this->makeempresa();
        $dbempresa = $this->empresaRepo->find($empresa->id);
        $dbempresa = $dbempresa->toArray();
        $this->assertModelData($empresa->toArray(), $dbempresa);
    }

    /**
     * @test update
     */
    public function testUpdateempresa()
    {
        $empresa = $this->makeempresa();
        $fakeempresa = $this->fakeempresaData();
        $updatedempresa = $this->empresaRepo->update($fakeempresa, $empresa->id);
        $this->assertModelData($fakeempresa, $updatedempresa->toArray());
        $dbempresa = $this->empresaRepo->find($empresa->id);
        $this->assertModelData($fakeempresa, $dbempresa->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteempresa()
    {
        $empresa = $this->makeempresa();
        $resp = $this->empresaRepo->delete($empresa->id);
        $this->assertTrue($resp);
        $this->assertNull(empresa::find($empresa->id), 'empresa should not exist in DB');
    }
}
