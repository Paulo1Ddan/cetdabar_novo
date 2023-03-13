<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Course;

class CetdabarController extends Controller
{
    public function index(){
        return view('site.home.welcome');
    }

    public function sobre(){
        return view('site.sobre.sobre');
    }

    public function cursos(Request $request){
        
        $search = $request->all();

        $courses = Course::query();

        if($request->input('type_curso') != ''){
            $courses->where('type_course', $request->input('type_curso'));
        }

        if($request->input('value') != '' && $request->input('value') == '1'){
            $courses->orderBy('value_course', 'ASC');
        }
        if($request->input('value') != '' && $request->input('value') == '2'){
            $courses->orderBy('value_course', 'DESC');
        }


        return view('site.cursos.cursos', ['courses'=> $courses->get(), 'search' => $search]);
    }

    public function sendContato(Request $request){
        $request->validate(
            [
                'name_contact' => ['required']
            ],
            [
                'name_contact.required' => "O campo nome é obrigatório"
            ]
        );
    }
}
