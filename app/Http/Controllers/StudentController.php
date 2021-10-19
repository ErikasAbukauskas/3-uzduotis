<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view("student.index", ["students"=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;

        //duomenu bazes laukelio pavadinimas = input laukelio pavadinimas
        $student->name= $request->student_name;
        $student->surname= $request->student_surname;
        $student->group_id= $request->student_groupid;

        // patikrina ar laukelis tuscias ar netuscias
        // jeigu laukelis netuscias - grazina true
        // jeigu laukelis tuscias - grazina false
        if($request->has('student_imageurl')){
            // turime atlikti du veiksmus:
            // 1. mes turime paveiklsiuk/info apie paveiksliuka irasyti i duomenu baze

            $imageName = time().'.'.$request->student_imageurl->extension();
            $student->image_url= '/images/'.$imageName; // atvaizdavimui prirasome '/images/.
            //paveiksliukas isikele i duomenu baze

            // 2. turiu kazkur ikelti/patalpinti paveiksliuka

            $request->student_imageurl->move(public_path('images'), $imageName);
            // irasome teksta koki inputui daveme pavadinima - name="student_imageurl"
            // perkles dokumenta kuris yra is formos i images aplanka
            // bus perkeltas i public aplanka kur yra images

        } else {
            $student->image_url= '/images/placeholder.png';
            // pirma reikia isikelti paveiksliuka i images folderi su pavadinimu placeholder.png (gali buti kitas pavadinimas)
        }

        $student->save();

        return redirect()->route("student.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view("student.show", ["student"=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view("student.edit", ["student"=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //duomenu bazes laukelio pavadinimas = input laukelio pavadinimas
        $student->name= $request->student_name;
        $student->surname= $request->student_surname;
        $student->group_id= $request->student_groupid;


        if($request->has('student_imageurl')){


            $imageName = time().'.'.$request->student_imageurl->extension();
            $student->image_url= '/images/'.$imageName;

            $request->student_imageurl->move(public_path('images'), $imageName);

        }
        // jeigu editinant paveiksliukas uzpildytas tik tada iterpiam i ji kazka naujo
        // jeigu neuzpildytas tada nieko ir nedarom

        $student->save();

        return redirect()->route("student.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route("student.index");
    }
}
