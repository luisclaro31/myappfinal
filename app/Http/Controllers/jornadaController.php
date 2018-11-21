<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatejornadaRequest;
use App\Http\Requests\UpdatejornadaRequest;
use App\Repositories\jornadaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class jornadaController extends AppBaseController
{
    /** @var  jornadaRepository */
    private $jornadaRepository;

    public function __construct(jornadaRepository $jornadaRepo)
    {
        $this->jornadaRepository = $jornadaRepo;
    }

    /**
     * Display a listing of the jornada.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jornadaRepository->pushCriteria(new RequestCriteria($request));
        $jornadas = $this->jornadaRepository->all();

        return view('jornadas.index')
            ->with('jornadas', $jornadas);
    }

    /**
     * Show the form for creating a new jornada.
     *
     * @return Response
     */
    public function create()
    {
        return view('jornadas.create');
    }

    /**
     * Store a newly created jornada in storage.
     *
     * @param CreatejornadaRequest $request
     *
     * @return Response
     */
    public function store(CreatejornadaRequest $request)
    {
        $input = $request->all();

        $jornada = $this->jornadaRepository->create($input);

        Flash::success('Jornada saved successfully.');

        return redirect(route('jornadas.index'));
    }

    /**
     * Display the specified jornada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jornada = $this->jornadaRepository->findWithoutFail($id);

        if (empty($jornada)) {
            Flash::error('Jornada not found');

            return redirect(route('jornadas.index'));
        }

        return view('jornadas.show')->with('jornada', $jornada);
    }

    /**
     * Show the form for editing the specified jornada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jornada = $this->jornadaRepository->findWithoutFail($id);

        if (empty($jornada)) {
            Flash::error('Jornada not found');

            return redirect(route('jornadas.index'));
        }

        return view('jornadas.edit')->with('jornada', $jornada);
    }

    /**
     * Update the specified jornada in storage.
     *
     * @param  int              $id
     * @param UpdatejornadaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatejornadaRequest $request)
    {
        $jornada = $this->jornadaRepository->findWithoutFail($id);

        if (empty($jornada)) {
            Flash::error('Jornada not found');

            return redirect(route('jornadas.index'));
        }

        $jornada = $this->jornadaRepository->update($request->all(), $id);

        Flash::success('Jornada updated successfully.');

        return redirect(route('jornadas.index'));
    }

    /**
     * Remove the specified jornada from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jornada = $this->jornadaRepository->findWithoutFail($id);

        if (empty($jornada)) {
            Flash::error('Jornada not found');

            return redirect(route('jornadas.index'));
        }

        $this->jornadaRepository->delete($id);

        Flash::success('Jornada deleted successfully.');

        return redirect(route('jornadas.index'));
    }
}
