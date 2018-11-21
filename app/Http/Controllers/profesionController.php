<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprofesionRequest;
use App\Http\Requests\UpdateprofesionRequest;
use App\Repositories\profesionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class profesionController extends AppBaseController
{
    /** @var  profesionRepository */
    private $profesionRepository;

    public function __construct(profesionRepository $profesionRepo)
    {
        $this->profesionRepository = $profesionRepo;
    }

    /**
     * Display a listing of the profesion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->profesionRepository->pushCriteria(new RequestCriteria($request));
        $profesions = $this->profesionRepository->all();

        return view('profesions.index')
            ->with('profesions', $profesions);
    }

    /**
     * Show the form for creating a new profesion.
     *
     * @return Response
     */
    public function create()
    {
        return view('profesions.create');
    }

    /**
     * Store a newly created profesion in storage.
     *
     * @param CreateprofesionRequest $request
     *
     * @return Response
     */
    public function store(CreateprofesionRequest $request)
    {
        $input = $request->all();

        $profesion = $this->profesionRepository->create($input);

        Flash::success('Profesion saved successfully.');

        return redirect(route('profesions.index'));
    }

    /**
     * Display the specified profesion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profesion = $this->profesionRepository->findWithoutFail($id);

        if (empty($profesion)) {
            Flash::error('Profesion not found');

            return redirect(route('profesions.index'));
        }

        return view('profesions.show')->with('profesion', $profesion);
    }

    /**
     * Show the form for editing the specified profesion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profesion = $this->profesionRepository->findWithoutFail($id);

        if (empty($profesion)) {
            Flash::error('Profesion not found');

            return redirect(route('profesions.index'));
        }

        return view('profesions.edit')->with('profesion', $profesion);
    }

    /**
     * Update the specified profesion in storage.
     *
     * @param  int              $id
     * @param UpdateprofesionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprofesionRequest $request)
    {
        $profesion = $this->profesionRepository->findWithoutFail($id);

        if (empty($profesion)) {
            Flash::error('Profesion not found');

            return redirect(route('profesions.index'));
        }

        $profesion = $this->profesionRepository->update($request->all(), $id);

        Flash::success('Profesion updated successfully.');

        return redirect(route('profesions.index'));
    }

    /**
     * Remove the specified profesion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profesion = $this->profesionRepository->findWithoutFail($id);

        if (empty($profesion)) {
            Flash::error('Profesion not found');

            return redirect(route('profesions.index'));
        }

        $this->profesionRepository->delete($id);

        Flash::success('Profesion deleted successfully.');

        return redirect(route('profesions.index'));
    }
}
