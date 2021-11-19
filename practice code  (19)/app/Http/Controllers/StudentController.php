<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function show(){
        
        // $students = DB::select('select * from student');
        // $students = DB::select('select * from student where city = ?',['Iceland']);
        // $students = DB::select('select * from student where city = :city',['city'=>'Iceland']);
        // DB::insert('insert into student(name, email, city) values(?, ?, ?)',['Meesi','meesi99@outlook.com','Barcelona']);
        // DB::insert('insert into student (name, email, city) values (?, ?, ?)', ['Dayle','messi@gmail.com','Barcelona']);
        // DB::insert('insert into student(name, email, city) values(:name, :email, :city)',['name'=>'Ronald','email'=>'ron99@outlook.com','city'=>'Manchester']);

            // $name = 'Neymar';
            // $email = 'ney@outlook.com';
            // $city = 'Pars';
        
        // DB::insert('insert into student(name, email, city) values(:name, :email, :city)',['name'=>$name,'email'=>$email,'city'=>$city]);
        
        // DB::update('update student set city =? where id = ?',['Jamaika','5']);
        // DB::update('update student set city =:city where id = :id',['city'=>'London','id'=>'6']);
        // DB::update('update student set name =:name where id = :id',['name'=>'Mesii','id'=>'6','name'=>'Di Maria','id'=>'7','name'=>'Coutinho','id'=>'8']);

        // DB::delete('delete from student where id = ?', ['8']);
        // DB::delete('delete from student where id = :id', ['id'=>'9']);
        // DB::unprepared('delete from student where id = 10');
        DB::transaction(function () {
          DB::insert('insert into student (name, email, city) values (?, ?, ?)', ['Roberto','rob@gmail.com','Sou-Paoulo']);
          DB::update('update student set city =? where id =?', ['Berlin','7']);   
        });
        $students = DB::select('select * from student');
        return view('home',['stu'=>$students]);
    }
}
