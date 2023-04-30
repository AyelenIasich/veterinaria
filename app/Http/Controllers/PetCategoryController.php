<?php

namespace App\Http\Controllers;

use App\Models\PetCategory;
use Illuminate\Http\Request;


/**
 * Class PetCategoryController
 * @package App\Http\Controllers
 */
class PetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petCategories = PetCategory::paginate();

        return view('pet-category.index', compact('petCategories'))
            ->with('i', (request()->input('page', 1) - 1) * $petCategories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petCategory = new PetCategory();
        return view('pet-category.create', compact('petCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PetCategory::$rules);

        $petCategory = PetCategory::create($request->all());

        return redirect()->route('pet-categories.index')
            ->with('success', 'PetCategory created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petCategory = PetCategory::find($id);

        return view('pet-category.show', compact('petCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petCategory = PetCategory::find($id);

        return view('pet-category.edit', compact('petCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PetCategory $petCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PetCategory $petCategory)
    {
        request()->validate(PetCategory::$rules);

        $petCategory->update($request->all());

        return redirect()->route('pet-categories.index')
            ->with('success', 'PetCategory updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $petCategory = PetCategory::find($id)->delete();

        return redirect()->route('pet-categories.index')
            ->with('success', 'PetCategory deleted successfully');
    }
}
