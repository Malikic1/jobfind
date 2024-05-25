<?php

namespace App\Http\Controllers;


use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class applicationController extends Controller
{
    public function apply(Request $request)
    {
        // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
          $request->validate([
            "name" => "required",
            "email" => "required",
            "user_id" => "required",
            'cv_file' => 'required|mimes:pdf,jpg,png|max:2048',
            "letter" => "required",
            "reason" => "required",
        ]);
    
        // Handle file upload
        if ($request->hasFile('cv_file')) {
            $file = $request->file('cv_file');
            $originalName = $file->getClientOriginalName(); // Get the original name of the file
    
            // Store file to a storage directory
            $filePath = $file->store('cv_files'); // Assuming you have a 'cv_files' directory in your storage folder
    
            // Store file information in the database using the Apply model
            Apply::create([
                'name' => $request->name,
                'email' => $request->email,
                'user_id' => $request->user_id,
                'filename' => $originalName,
                'file_path' => $filePath,
                'letter' => $request->letter,
                'reason' => $request->reason,
            ]);
    
            // Optionally, you can return a response here indicating success
            return redirect('/success');
        }
    
        // Handle case where file is not present
        return redirect()->back()->with('error', 'CV file is required.');
    }
}
