<?php

namespace App\Http\Controllers\Api;

use App\Exports\DataExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{
    public function export(Request $request) {

        dd($request->all());

        
        return Excel::download(new DataExport, 'invoices.xlsx');

    }
}
