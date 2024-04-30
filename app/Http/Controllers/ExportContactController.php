<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Contactform;
class ExportContactController extends Controller
{
    public function exportContact()
    {
        // Get your data from the database
        $data = Contactform::all();
     
        // Set the CSV headers
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=contactdata.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
     
        // Open output stream
        $handle = fopen('php://output', 'w');
     
        // Add CSV headers
        fputcsv($handle, array('S.No', 'Full Name', 'Email', 'Phone No', 'Service', 'message','Created At')); // Add your column names here
     
        // Add data rows
        foreach ($data as $row) {
            fputcsv($handle, array(
                $row->id,
                $row->name,
                 $row->email,
                $row->phone,
                $row->message,
                $row->service,
                $row->created_at,
            ));
        }
     
        // Close the stream
        fclose($handle);
     
        // Return the response
        return Response::make('', 200, $headers);
     }
}
