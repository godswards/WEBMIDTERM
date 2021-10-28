<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRotcmemberRequest;
use App\Http\Requests\UpdateRotcmemberRequest;
use App\Repositories\RotcmemberRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RotcmemberController extends AppBaseController
{
    /** @var  RotcmemberRepository */
    private $rotcmemberRepository;

    public function __construct(RotcmemberRepository $rotcmemberRepo)
    {
        $this->rotcmemberRepository = $rotcmemberRepo;
    }

    /**
     * Display a listing of the Rotcmember.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rotcmembers = $this->rotcmemberRepository->all();

        return view('rotcmembers.index')
            ->with('rotcmembers', $rotcmembers);
    }

    /**
     * Show the form for creating a new Rotcmember.
     *
     * @return Response
     */
    public function create()
    {
        return view('rotcmembers.create');
    }

    /**
     * Store a newly created Rotcmember in storage.
     *
     * @param CreateRotcmemberRequest $request
     *
     * @return Response
     */
    public function store(CreateRotcmemberRequest $request)
    {
        $input = $request->all();

        $rotcmember = $this->rotcmemberRepository->create($input);

        Flash::success('Rotcmember saved successfully.');

        return redirect(route('rotcmembers.index'));
    }

    /**
     * Display the specified Rotcmember.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rotcmember = $this->rotcmemberRepository->find($id);

        if (empty($rotcmember)) {
            Flash::error('Rotcmember not found');

            return redirect(route('rotcmembers.index'));
        }

        return view('rotcmembers.show')->with('rotcmember', $rotcmember);
    }

    /**
     * Show the form for editing the specified Rotcmember.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rotcmember = $this->rotcmemberRepository->find($id);

        if (empty($rotcmember)) {
            Flash::error('Rotcmember not found');

            return redirect(route('rotcmembers.index'));
        }

        return view('rotcmembers.edit')->with('rotcmember', $rotcmember);
    }

    /**
     * Update the specified Rotcmember in storage.
     *
     * @param int $id
     * @param UpdateRotcmemberRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRotcmemberRequest $request)
    {
        $rotcmember = $this->rotcmemberRepository->find($id);

        if (empty($rotcmember)) {
            Flash::error('Rotcmember not found');

            return redirect(route('rotcmembers.index'));
        }

        $rotcmember = $this->rotcmemberRepository->update($request->all(), $id);

        Flash::success('Rotcmember updated successfully.');

        return redirect(route('rotcmembers.index'));
    }

    /**
     * Remove the specified Rotcmember from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rotcmember = $this->rotcmemberRepository->find($id);

        if (empty($rotcmember)) {
            Flash::error('Rotcmember not found');

            return redirect(route('rotcmembers.index'));
        }

        $this->rotcmemberRepository->delete($id);

        Flash::success('Rotcmember deleted successfully.');

        return redirect(route('rotcmembers.index'));
    }
}
