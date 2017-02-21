<?php

use Faker\Factory as Faker;
use App\Models\empresa;
use App\Repositories\empresaRepository;

trait MakeempresaTrait
{
    /**
     * Create fake instance of empresa and save it in database
     *
     * @param array $empresaFields
     * @return empresa
     */
    public function makeempresa($empresaFields = [])
    {
        /** @var empresaRepository $empresaRepo */
        $empresaRepo = App::make(empresaRepository::class);
        $theme = $this->fakeempresaData($empresaFields);
        return $empresaRepo->create($theme);
    }

    /**
     * Get fake instance of empresa
     *
     * @param array $empresaFields
     * @return empresa
     */
    public function fakeempresa($empresaFields = [])
    {
        return new empresa($this->fakeempresaData($empresaFields));
    }

    /**
     * Get fake data of empresa
     *
     * @param array $postFields
     * @return array
     */
    public function fakeempresaData($empresaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'direccion' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $empresaFields);
    }
}
