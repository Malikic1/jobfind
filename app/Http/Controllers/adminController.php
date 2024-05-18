<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function editJob(Job $job, Request $request){
        $incomingData = $request -> validate([
            "title" =>"required",
            "company"=> "required",
            "salary"=> "required",
            "category"=> "required",
            "requirement"=> "required",
            "description"=> "required",
        ]);

        $job->update($incomingData);
        return redirect('admin_area/home');
    }

    public function new(Request $request) {
        $incomingData = $request -> validate(
            [
                    "title"=> "required",
                    "company"=> "required",
                    "salary"=> "required",
                    "category"=> "required",
                    "requirement"=> "required",
                    "description"=> "required",
            ]
        );

        $incomingData["title"] = strip_tags($incomingData["title"]);  
        $incomingData["company"] = strip_tags($incomingData["company"]);  

        Job::create($incomingData);
        return redirect("/admin_area/home");
    }
}
