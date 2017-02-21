<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateofertaRequest;
use App\Http\Requests\UpdateofertaRequest;
use App\Repositories\ofertaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ofertaController extends AppBaseController
{
    /** @var  ofertaRepository */
    private $ofertaRepository;

    public function __construct(ofertaRepository $ofertaRepo)
    {
        $this->ofertaRepository = $ofertaRepo;
    }

    /**
     * Display a listing of the oferta.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ofertaRepository->pushCriteria(new RequestCriteria($request));
        $ofertas = $this->ofertaRepository->all();

        return view('ofertas.index')
            ->with('ofertas', $ofertas);
    }

    /**
     * Show the form for creating a new oferta.
     *
     * @return Response
     */
    public function create()
    {
        return view('ofertas.create');
    }

    /**
     * Store a newly created oferta in storage.
     *
     * @param CreateofertaRequest $request
     *
     * @return Response
     */
    public function store(CreateofertaRequest $request)
    {
        $input = $request->all();

        $oferta = $this->ofertaRepository->create($input);

        Flash::success('Oferta saved successfully.');

        return redirect(route('ofertas.index'));
    }

    /**
     * Display the specified oferta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $oferta = $this->ofertaRepository->findWithoutFail($id);

        if (empty($oferta)) {
            Flash::error('Oferta not found');

            return redirect(route('ofertas.index'));
        }

        return view('ofertas.show')->with('oferta', $oferta);
    }

    /**
     * Show the form for editing the specified oferta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $oferta = $this->ofertaRepository->findWithoutFail($id);

        if (empty($oferta)) {
            Flash::error('Oferta not found');

            return redirect(route('ofertas.index'));
        }

        return view('ofertas.edit')->with('oferta', $oferta);
    }

    /**
     * Update the specified oferta in storage.
     *
     * @param  int              $id
     * @param UpdateofertaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateofertaRequest $request)
    {
        $oferta = $this->ofertaRepository->findWithoutFail($id);

        if (empty($oferta)) {
            Flash::error('Oferta not found');

            return redirect(route('ofertas.index'));
        }

        $oferta = $this->ofertaRepository->update($request->all(), $id);

        Flash::success('Oferta updated successfully.');

        return redirect(route('ofertas.index'));
    }

    /**
     * Remove the specified oferta from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $oferta = $this->ofertaRepository->findWithoutFail($id);

        if (empty($oferta)) {
            Flash::error('Oferta not found');

            return redirect(route('ofertas.index'));
        }

        $this->ofertaRepository->delete($id);

        Flash::success('Oferta deleted successfully.');

        return redirect(route('ofertas.index'));
    }
}
