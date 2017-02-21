<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateindustriaRequest;
use App\Http\Requests\UpdateindustriaRequest;
use App\Repositories\industriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class industriaController extends AppBaseController
{
    /** @var  industriaRepository */
    private $industriaRepository;

    public function __construct(industriaRepository $industriaRepo)
    {
        $this->industriaRepository = $industriaRepo;
    }

    /**
     * Display a listing of the industria.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->industriaRepository->pushCriteria(new RequestCriteria($request));
        $industrias = $this->industriaRepository->all();

        return view('industrias.index')
            ->with('industrias', $industrias);
    }

    /**
     * Show the form for creating a new industria.
     *
     * @return Response
     */
    public function create()
    {
        return view('industrias.create');
    }

    /**
     * Store a newly created industria in storage.
     *
     * @param CreateindustriaRequest $request
     *
     * @return Response
     */
    public function store(CreateindustriaRequest $request)
    {
        $input = $request->all();

        $industria = $this->industriaRepository->create($input);

        Flash::success('Industria saved successfully.');

        return redirect(route('industrias.index'));
    }

    /**
     * Display the specified industria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $industria = $this->industriaRepository->findWithoutFail($id);

        if (empty($industria)) {
            Flash::error('Industria not found');

            return redirect(route('industrias.index'));
        }

        return view('industrias.show')->with('industria', $industria);
    }

    /**
     * Show the form for editing the specified industria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $industria = $this->industriaRepository->findWithoutFail($id);

        if (empty($industria)) {
            Flash::error('Industria not found');

            return redirect(route('industrias.index'));
        }

        return view('industrias.edit')->with('industria', $industria);
    }

    /**
     * Update the specified industria in storage.
     *
     * @param  int              $id
     * @param UpdateindustriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateindustriaRequest $request)
    {
        $industria = $this->industriaRepository->findWithoutFail($id);

        if (empty($industria)) {
            Flash::error('Industria not found');

            return redirect(route('industrias.index'));
        }

        $industria = $this->industriaRepository->update($request->all(), $id);

        Flash::success('Industria updated successfully.');

        return redirect(route('industrias.index'));
    }

    /**
     * Remove the specified industria from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $industria = $this->industriaRepository->findWithoutFail($id);

        if (empty($industria)) {
            Flash::error('Industria not found');

            return redirect(route('industrias.index'));
        }

        $this->industriaRepository->delete($id);

        Flash::success('Industria deleted successfully.');

        return redirect(route('industrias.index'));
    }
}
