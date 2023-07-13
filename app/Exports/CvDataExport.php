<?php

namespace App\Exports;

use App\Models\Cvbanks;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CvDataExport implements FromView,ShouldAutoSize
{
    /**
    * @/return \Illuminate\Support\Collection
    */
  //  public function collection()
  //  {
        //
    //}

    use Exportable;

    private $Cvs;

    public function __construct(){


        $this->Cvs = Cvbanks::all();
    }

    public function view() : View
    {
        return view('pdf.cvdetails', [
            'Cvs' => $this->Cvs
        ]);
    }
}
