<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class ContactsController extends Controller
{
    public function showContacts(){
        //  $cotacts = DB::table('contactus')->get();
                        

         // for pagination
        $cotacts = DB::table('contactus')
                        ->paginate(5);
                        // ->where('user_name', 'sameer khan') // only show two collumn list by difined array in paginate
                        //  ->where('user_name', 'sameer khan') // list by difined in paginate
                        // ->orderBy('user_name') 
                        // ->paginate(4, ['user_name', 'user_email']);  // list by only tow collumn show difined in paginate
                        // ->paginate(4, ['user_name', 'user_email'], 'p', 2); // list page difined in paginate direct open 2nd page in pagination
                        // ->appends(['sort' => 'votes', 'testpage' => 'abc']);  // for special page url show difined in paginate
                        // ->fragment('user');  // after url link special value show defind by paginate
                        

        //  $cotacts = DB::table('contactus')
                        // ->select('user_name', 'user_email')

                        // change with column name and changes more 
                        // ->select('user_name as name', 'user_email')
                        // ->get();


         //by id number table show only
        // $cotacts = DB::table('contactus')->where('id', 10)->get();

        //direct show in browser
        // return $cotacts;

         //show in static file
        return view('/user_info', ['data' => $cotacts]);
    }

    // by id show contacts / user info code
    public function singleContacts(string $id){
        $singleUser = DB::table('contactus')->where('id', $id)->get();
        // return $cotacts;
        return view('/single_info', ['data' => $singleUser]);
    }



     // Update User contact info on database contactus table by Form
     public function updateContacts(Request $req, $id){


        
        $updateUser = DB::table('contactus')
                            ->where('id', $id)
                            ->update([
                                'user_name' => $req->name,
                                'user_email' => $req->email,
                                'user_subject' => $req->subject,
                                'user_message' => $req->message,
                                'updated_at' => now()
                            ]); 

        if($updateUser){
            return redirect()->route('contactinfo')
            ->with('updatemsg', 'Data Successfully Updated');
        
        } else {
            return redirect()->back()->with('updatemsg', 'Faileds while sending code!');
        }
   
    }

    //update user info page date table with database table for contactus
    public function updatePage(string $id){
        $updatpage = DB::table('contactus')->find($id);
        // return $updatpage;
        return view('updateuser', ['data' => $updatpage]);

    }





    // by id show contacts / user info code
    public function deleteContacts(string $id){
        $delUser = DB::table('contactus')
                      ->where('id', $id)
                      ->delete();
        
        // if($delUser){
        //     return redirect()-> route('user_info');
        // }

         if($delUser){
            return redirect()->back()->with('delmsg', 'Data Deleted Successfully');
        } else {
            return redirect()->back()->with('delmsg', 'Failed data not deleted');
        }
       
    }

     // Add User contact info on database contactus table with static/manual
    //  public function addContacts(){  
    //     $addUser = DB::table('contactus')
    //                         ->insert([
    //                             'user_name' => 'Sameer Khan',
    //                             'user_email' => 'sameerkhan@gmail.com',
    //                             'user_subject' => 'Sameer test subject',
    //                             'user_message' => 'test message for database',
    //                             'created_at' => now(),
    //                             'updated_at' => now()


    //                         ]);
    //   if($addUser){
    //     echo "<h2>Data Successfully Added</h2>";
    //   } else {
    //     echo "<h2>Sorry your data not updated</h2>";
    //   }


        // Add User contact info on database contactus table by Form
        public function addContacts(Request $req){

            // dd($req->all());

            $req->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'file' => 'required',
                'user' => 'required|mimes:jpg,jpeg,png,gif,pdf|max:2048'
                // 'user_message' => 'required'
                // 'password' => 'required|alpha_num|min:6',
                // 'user_phone' => 'required|numeric',
                // 'user_mobile' => 'required|numeric|between:0,10',
                 // 'user_age' => 'required|numeric||min:18',
                 
                
            ]);

            return $req->all();

            // $req->validate([
            //     'file' => 'required|mimes:jpg,jpeg,png,gif,pdf|max:2048'
            //     ]);
            $fileModel = new File;
            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
                $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                // $fileModel->save();
                // return back()
                // ->with('success','File has been uploaded.')
                // ->with('file', $fileName);
            }       
          
               

          

            // dd($req->all());

            $addUser = DB::table('contactus')
                                ->insert([
                                    'user_name' => $req-> name,
                                    'user_email' => $req-> email,
                                    'user_subject' => $req-> subject,
                                    'user_file' => $req-> fileName,
                                    'user_message' => $req-> message,
                                    'created_at' => now(),
                                    'updated_at' => now()
                                ]); 


                     

        if([$addUser]){

            return redirect()->back()->with('msg', 'Data Successfully Added');
            // echo "<h4>Data Successfully Added</h4>"; 
        } else {
            return redirect()->back()->with('msg', 'Faileds while sending code!');
            // echo "<h4>Faileds while sending code!</h4>";
        }


        }



        public function index(){ 
            return view('user');
        }

        public function userStore(Request $request){ 

            // dd($request->all());
            // print_r($request);
           

            
             $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'file' => 'required',
                // 'file' => 'required|mimes:jpg,jpeg,png,gif,pdf|max:2048',
                'desc' => 'required|min:4'
 
            ]);

           
         
            $fileModel = '';
            if($request->file()) {

                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file->move(public_path('uploads'), $fileName); 
                $fileModel->name = time().'_'.$request->file->getClientOriginalName();

                // $fileName = time().'_'.$request->file->getClientOriginalName();
                // $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                // $fileModel->name = time().'_'.$request->file->getClientOriginalName();
                // $fileModel->file_path = '/storage/' . $filePath;

                // $extention = array(
                //     'file' => 'required|mimes:jpg,jpeg,png,gif,pdf|max:2048'
                // );

                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }

            date_default_timezone_set('Asia/Kolkata');

            $newUser = DB::table('contactus') 
                                ->insert([
                                    'user_name' => $request-> name,
                                    'user_email' => $request-> email,
                                    'user_subject' => $request-> subject,
                                    'user_file' => $request->file,
                                    'user_message' => $request-> desc,
                                    'created_at' => now(),
                                    'updated_at' => now()
                                ]); 

            if([$newUser]){
                return redirect()->back()->with('msg', 'Data Successfully Added');
                // echo "<h4>Data Successfully Added</h4>"; 
            } else {
                return redirect()->back()->with('msg', 'Faileds while sending code!');
                // echo "<h4>Faileds while sending code!</h4>";
            }


        }





}
