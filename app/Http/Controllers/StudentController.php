<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Input;
use Validator;
use redirect;


class StudentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$students = \App\Student::paginate(25);
        $students->setPath('students');
        return view('student.index', compact('students'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        return view('student.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\StudentRequest $request)
	{
        //dd($request->all());
        if($request->hasFile('avatar')){
            if($request->hasFile('avatar'))
            {
                //dd(getimagesize($_FILES['avatar']['tmp_name']));  //test de sécurité
                $file = $request->file('avatar');
                $ext = $file->getClientOriginalExtension();

                $fileName = str_random(12) . "." . $ext;

                $dirUpload = public_path('upload');

                $file->move($dirUpload, $fileName);

            }

            $student = Student::create($request->all());

            $student->avatar = (isset($fileName))? $fileName : null;
            $student->save();

            return redirect()->to('student')->with('message','ok');



        }

        student::create($request->all());
        return redirect()->to('student')->with('message','ok');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $student = Student::findOrfail($id);
        return view('student.show', compact('student'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $student = Student::find($id);
        return view('student.edit', compact('student'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(Requests\StudentRequest $request, $id)
    {

        $student = Student::find($id);
        if($request->hasFile('avatar')){

            $file = $request->file('avatar');
            $fileName = public_path('upload').'/'. $student->avatar;

            if(File::exists($fileName)){

                File::delete($fileName);

            }
            $ext =  $file->getClientOriginalExtension();
            $fileName = str_random(12) . "." . $ext;

            $dirUpload = public_path('upload');

            $file->move($dirUpload, $fileName);
            $student->avatar  = $fileName;
            $student->save();


        }
        Student::find($id)->update($request->all());

        return redirect()->to('student')->with('message', 'ok');
    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        //$id = (int) $id;
		Student::find($id)->delete();

	}

}
