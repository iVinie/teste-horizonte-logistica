<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frota;

class CsvController extends Controller
{
    public function uploadCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('csv_file');

        $csvData = file_get_contents($file);

        $csvArray = array_map("str_getcsv", explode("\n", $csvData));

        $header = array_shift($csvArray);

        Frota::truncate();

        foreach ($csvArray as $row) {
            $row = array_map('trim', $row);

            if (count($header) === count($row)) {
                $data = array_combine($header, $row);
                Frota::create($data);
            }
        }

        return redirect()->route('frotas.index')->with('success', 'Dados do CSV foram importados com sucesso.');
    }

    public function showUploadForm()
    {
        return view('upload');
    }
}
