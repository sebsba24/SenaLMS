<?php

namespace App\Http\Controllers;

use App\Models\StudySheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudySheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $j = [];

        try {
            $study_sheets = DB::table('study_sheets')
                ->select(
                    'study_sheets.id as id',
                    'study_sheets.start_date as start_date',
                    'study_sheets.end_date as end_date',
                    'programs.name as program',
                    'phases.name as phase',
                    // 'study_sheets.state as state',
                )
                ->join('programs', 'programs.id', '=', 'study_sheets.program_id')
                ->join('phases', 'phases.id', '=', 'study_sheets.phase_id')
                ->get();

            $j['success'] = true;
            $j['code'] = 200;
            $j['message'] = 'fichas listadas correctamente';
            $j['data'] = $study_sheets;
        } catch (\Throwable $th) {
            $j['success'] = false;
            $j['code'] = 500;
            $j['message'] = $th->getMessage();
        }

        return response()->json($j);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudySheet  $studySheet
     * @return \Illuminate\Http\Response
     */
    public function show(StudySheet $studySheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudySheet  $studySheet
     * @return \Illuminate\Http\Response
     */
    public function edit(StudySheet $studySheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudySheet  $studySheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudySheet $studySheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudySheet  $studySheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudySheet $studySheet)
    {
        //
    }
}
