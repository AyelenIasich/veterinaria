<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use App\Models\Pet;
use Illuminate\Http\Request;

/**
 * Class MedicalRecordController
 * @package App\Http\Controllers
 */
class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicalRecords = MedicalRecord::paginate();

        return view('medical-record.index', compact('medicalRecords'))
            ->with('i', (request()->input('page', 1) - 1) * $medicalRecords->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicalRecord = new MedicalRecord();
        $mascota = Pet::pluck('nombre', 'id');
        return view('medical-record.create', compact('medicalRecord', 'mascota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MedicalRecord::$rules);

        $medicalRecord = MedicalRecord::create($request->all());

        return redirect()->route('medical-records.index')
            ->with('success', 'MedicalRecord created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicalRecord = MedicalRecord::find($id);

        return view('medical-record.show', compact('medicalRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicalRecord = MedicalRecord::find($id);
        $mascota = Pet::pluck('nombre', 'id');

        return view('medical-record.edit', compact('medicalRecord', 'mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MedicalRecord $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalRecord $medicalRecord)
    {
        request()->validate(MedicalRecord::$rules);

        $medicalRecord->update($request->all());

        return redirect()->route('medical-records.index')
            ->with('success', 'MedicalRecord updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicalRecord = MedicalRecord::find($id)->delete();

        return redirect()->route('medical-records.index')
            ->with('success', 'MedicalRecord deleted successfully');
    }
}
