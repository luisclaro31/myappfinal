<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecontratoRequest;
use App\Http\Requests\UpdatecontratoRequest;
use App\Repositories\contratoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\docente;
use App\Models\tipocontrato;


class contratoController extends AppBaseController
{
    /** @var  contratoRepository */
    private $contratoRepository;

    public function __construct(contratoRepository $contratoRepo)
    {
        $this->contratoRepository = $contratoRepo;
    }

    /**
     * Display a listing of the contrato.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contratoRepository->pushCriteria(new RequestCriteria($request));
        $contratos = $this->contratoRepository->all();

        return view('contratos.index')
            ->with('contratos', $contratos);
    }

    /**
     * Show the form for creating a new contrato.
     *
     * @return Response
     */
    public function create()
    {
        $docentes = docente::pluck('nombre','id');
        return view('contratos.create',compact('docentes'));
    }

    /**
     * Store a newly created contrato in storage.
     *
     * @param CreatecontratoRequest $request
     *
     * @return Response
     */
    public function store(CreatecontratoRequest $request)
    {
        $input = $request->all();

        $contrato = $this->contratoRepository->create($input);

        Flash::success('Contrato saved successfully.');

        return redirect(route('contratos.index'));
    }

    /**
     * Display the specified contrato.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contrato = $this->contratoRepository->findWithoutFail($id);

        if (empty($contrato)) {
            Flash::error('Contrato not found');

            return redirect(route('contratos.index'));
        }

        return view('contratos.show')->with('contrato', $contrato);
    }

    /**
     * Show the form for editing the specified contrato.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contrato = $this->contratoRepository->findWithoutFail($id);

        if (empty($contrato)) {
            Flash::error('Contrato not found');

            return redirect(route('contratos.index'));
        }

        return view('contratos.edit')->with('contrato', $contrato);
    }

    /**
     * Update the specified contrato in storage.
     *
     * @param  int              $id
     * @param UpdatecontratoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecontratoRequest $request)
    {
        $contrato = $this->contratoRepository->findWithoutFail($id);

        if (empty($contrato)) {
            Flash::error('Contrato not found');

            return redirect(route('contratos.index'));
        }

        $contrato = $this->contratoRepository->update($request->all(), $id);

        Flash::success('Contrato updated successfully.');

        return redirect(route('contratos.index'));
    }

    /**
     * Remove the specified contrato from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contrato = $this->contratoRepository->findWithoutFail($id);

        if (empty($contrato)) {
            Flash::error('Contrato not found');

            return redirect(route('contratos.index'));
        }

        $this->contratoRepository->delete($id);

        Flash::success('Contrato deleted successfully.');

        return redirect(route('contratos.index'));
    }
}
