<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateofertaAlumnoRequest;
use App\Http\Requests\UpdateofertaAlumnoRequest;
use App\Repositories\ofertaAlumnoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ofertaAlumnoController extends AppBaseController
{
    /** @var  ofertaAlumnoRepository */
    private $ofertaAlumnoRepository;

    public function __construct(ofertaAlumnoRepository $ofertaAlumnoRepo)
    {
        $this->ofertaAlumnoRepository = $ofertaAlumnoRepo;
    }

    /**
     * Display a listing of the ofertaAlumno.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ofertaAlumnoRepository->pushCriteria(new RequestCriteria($request));
        $ofertaAlumnos = $this->ofertaAlumnoRepository->all();

        return view('oferta_alumnos.index')
            ->with('ofertaAlumnos', $ofertaAlumnos);
    }

    /**
     * Show the form for creating a new ofertaAlumno.
     *
     * @return Response
     */
    public function create()
    {
        return view('oferta_alumnos.create');
    }

    /**
     * Store a newly created ofertaAlumno in storage.
     *
     * @param CreateofertaAlumnoRequest $request
     *
     * @return Response
     */
    public function store(CreateofertaAlumnoRequest $request)
    {
        $input = $request->all();

        $ofertaAlumno = $this->ofertaAlumnoRepository->create($input);

        Flash::success('Oferta Alumno saved successfully.');

        return redirect(route('ofertaAlumnos.index'));
    }

    /**
     * Display the specified ofertaAlumno.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ofertaAlumno = $this->ofertaAlumnoRepository->findWithoutFail($id);

        if (empty($ofertaAlumno)) {
            Flash::error('Oferta Alumno not found');

            return redirect(route('ofertaAlumnos.index'));
        }

        return view('oferta_alumnos.show')->with('ofertaAlumno', $ofertaAlumno);
    }

    /**
     * Show the form for editing the specified ofertaAlumno.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ofertaAlumno = $this->ofertaAlumnoRepository->findWithoutFail($id);

        if (empty($ofertaAlumno)) {
            Flash::error('Oferta Alumno not found');

            return redirect(route('ofertaAlumnos.index'));
        }

        return view('oferta_alumnos.edit')->with('ofertaAlumno', $ofertaAlumno);
    }

    /**
     * Update the specified ofertaAlumno in storage.
     *
     * @param  int              $id
     * @param UpdateofertaAlumnoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateofertaAlumnoRequest $request)
    {
        $ofertaAlumno = $this->ofertaAlumnoRepository->findWithoutFail($id);

        if (empty($ofertaAlumno)) {
            Flash::error('Oferta Alumno not found');

            return redirect(route('ofertaAlumnos.index'));
        }

        $ofertaAlumno = $this->ofertaAlumnoRepository->update($request->all(), $id);

        Flash::success('Oferta Alumno updated successfully.');

        return redirect(route('ofertaAlumnos.index'));
    }

    /**
     * Remove the specified ofertaAlumno from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ofertaAlumno = $this->ofertaAlumnoRepository->findWithoutFail($id);

        if (empty($ofertaAlumno)) {
            Flash::error('Oferta Alumno not found');

            return redirect(route('ofertaAlumnos.index'));
        }

        $this->ofertaAlumnoRepository->delete($id);

        Flash::success('Oferta Alumno deleted successfully.');

        return redirect(route('ofertaAlumnos.index'));
    }
}
