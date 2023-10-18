<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class FileUpload extends Controller
{
    public function createForm(){
        return view('file-upload');
      }
      public function fileUpload(Request $req){

        date_default_timezone_set('Asia/Kolkata');

                  $req->validate([
            'file' => 'required|mimes:jpg,jpeg,png,gif,pdf|max:2048'
            ]);
            $fileModel = new File;
            if($req->file()) {
                // $fileName = time().'_'.$req->file->getClientOriginalName();
                // $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
                // $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                // $fileModel->file_path = '/storage/' . $filePath;

                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->move(public_path('uploads'), $fileName); 
                $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                // $fileModel->save();
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }


                // $newUser = DB::table('files') 
                //             ->insert([
                //                 'name' => $req-> name,
                //                 'file_path' => $request->file,
                //                 'created_at' => now(),
                //                 'updated_at' => now()
                //             ]); 
       }
}
