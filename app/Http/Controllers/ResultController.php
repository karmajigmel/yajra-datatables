<?php

namespace App\Http\Controllers;

use App\DataTables\ResultsDataTable;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index(ResultsDataTable $dataTable)
    {
        return $dataTable->render('results.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Result $result)
    {
        //
    }

    public function edit(Result $result)
    {
        //
    }

    public function update(Request $request, Result $result)
    {
        //
    }

    public function destroy(Result $result)
    {
        //
    }
}
