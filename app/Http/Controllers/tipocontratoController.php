<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetipocontratoRequest;
use App\Http\Requests\UpdatetipocontratoRequest;
use App\Repositories\tipocontratoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tipocontratoController extends AppBaseController
{
    /** @var  tipocontratoRepository */
    private $tipocontratoRepository;

    public function __construct(tipocontratoRepository $tipocontratoRepo)
    {
        $this->tipocontratoRepository = $tipocontratoRepo;
    }

    /**
     * Display a listing of the tipocontrato.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipocontratoRepository->pushCriteria(new RequestCriteria($request));
        $tipocontratos = $this->tipocontratoRepository->all();

        return view('tipocontratos.index')
            ->with('tipocontratos', $tipocontratos);
    }

    /**
     * Show the form for creating a new tipocontrato.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipocontratos.create');
    }

    /**
     * Store a newly created tipocontrato in storage.
     *
     * @param CreatetipocontratoRequest $request
     *
     * @return Response
     */
    public function store(CreatetipocontratoRequest $request)
    {
        $input = $request->all();

        $tipocontrato = $this->tipocontratoRepository->create($input);

        Flash::success('Tipocontrato saved successfully.');

        return redirect(route('tipocontratos.index'));
    }

    /**
     * Display the specified tipocontrato.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipocontrato = $this->tipocontratoRepository->findWithoutFail($id);

        if (empty($tipocontrato)) {
            Flash::error('Tipocontrato not found');

            return redirect(route('tipocontratos.index'));
        }

        return view('tipocontratos.show')->with('tipocontrato', $tipocontrato);
    }

    /**
     * Show the form for editing the specified tipocontrato.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipocontrato = $this->tipocontratoRepository->findWithoutFail($id);

        if (empty($tipocontrato)) {
            Flash::error('Tipocontrato not found');

            return redirect(route('tipocontratos.index'));
        }

        return view('tipocontratos.edit')->with('tipocontrato', $tipocontrato);
    }

    /**
     * Update the specified tipocontrato in storage.
     *
     * @param  int              $id
     * @param UpdatetipocontratoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipocontratoRequest $request)
    {
        $tipocontrato = $this->tipocontratoRepository->findWithoutFail($id);

        if (empty($tipocontrato)) {
            Flash::error('Tipocontrato not found');

            return redirect(route('tipocontratos.index'));
        }

        $tipocontrato = $this->tipocontratoRepository->update($request->all(), $id);

        Flash::success('Tipocontrato updated successfully.');

        return redirect(route('tipocontratos.index'));
    }

    /**
     * Remove the specified tipocontrato from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipocontrato = $this->tipocontratoRepository->findWithoutFail($id);

        if (empty($tipocontrato)) {
            Flash::error('Tipocontrato not found');

            return redirect(route('tipocontratos.index'));
        }

        $this->tipocontratoRepository->delete($id);

        Flash::success('Tipocontrato deleted successfully.');

        return redirect(route('tipocontratos.index'));
    }
}
