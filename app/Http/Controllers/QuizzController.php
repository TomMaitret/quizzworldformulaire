<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Question;

class QuizzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('FormSendingTest');
    }

    public function uploadFile(Request $request)
    {
        request()->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'company' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'certif' => ['required'],
            'description' => ['required'],
        ]);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $certif = $request->input('certif');
        $description = $request->input('description');
        $company = $request->input('company');
        $email = $request->input('email');
        $phone = $request->input('phone');



        

        
        $instance = new Company;
        $addCompagny = $instance->addUserInfo($firstname, $lastname,$certif, $description, $company, $email, $phone);

        if ($request->file('question') == null) {
            $file = "";
        }else{
           $file = $request->file('question')->storeAs('certif', 'question'.$company.'.json');  
        }

        // $questionFile = fopen("../storage/app/certif/question".$compagny.".json", 'a+');
        // $questionFile = "../storage/app/certif/question".$company.".json";
        
        
        
        // put the content of the file in a variable
        // $data = file_get_contents($questionFile); 
        // JSON decode
        // $obj = json_decode($data, true); 
        // display the name of the first person

        // $instanceQuestion = new Question;
        // $uneCertif = $instanceQuestion->GetCertifId($compagny);
        
        
        
    



        if ($request->file('reponse') == null) {
            $file = "";
        }else{
           $file = $request->file('reponse')->storeAs('certif', 'reponse'.$company.'.txt');  
        }

        
        // openssl_decrypt();


        return back()->with('success', 'File uploaded successfully');
        // return view('test', compact('uneCertif')); 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
