<?php

namespace App\Exports;

use App\Models\ContactMessage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MessageExport implements FromCollection,WithHeadings
{


    public function headings(): array
    {
        return [
            'Name',
            'Last Name',
            'Email',
            'Subject',
            'Message',
            'Date',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ContactMessage::select('c_name','c_last_name','c_email','c_subject','c_message','created_at')->get();
    }

}
