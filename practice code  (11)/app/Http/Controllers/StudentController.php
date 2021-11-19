<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show(){
        // Select query
        // $stu = DB::select('select * from student');
        // dd($stu);
        // $stu = DB::select('select * from student where city = ?',['Uzumaki']);
        // $stu = DB::select('select * from student where city =:city',['city'=>'Uzumaki']);

        //Insert Method

        // DB::insert('insert into student(name, email, city) values(?, ?, ?)',['Madara Uchiha','madara@gmail.com','Uchiha']);
         
        // DB::insert('insert into student(name, email, city) values(?, ?, ?)',['Kakashi Hetake','kakashi@gmail.com','Hetake']);
        // DB::insert('insert into student(name, email, city) values(?, ?, ?)',['Obito Uchiha','obito@gamil.com','Uchiha']);
        // DB::insert('insert into student(name, email, city) values(?, ?, ?)',['Kushina Uzumaki','kushina@gmail.com','Uzumaki']);

        // DB::insert('insert into student(name, email, city) values(:name, :email, :city)', ['name'=>'Tsunade','email'=>'Tsunade@gmail.com','city'=>'Hashirama']);
        // DB::insert('insert into student(name, email, city) values(:name, :email, :city)', ['name'=>'Shikamru Nara', 'email'=>'nara@gmail.com','city'=>'Nara']);
        
        // $name = 'Ino Yamanaka';
        // $email = 'ino@gmail.com';
        // $city = 'Yamanaka';

        // DB::insert('insert into student(name, email, city) values(:nam, :mail, :cty)', 
        // ['nam'=>$name, 'mail'=>$email,'cty'=>$city]);
        // $stu = DB::select('select * from student');

        // Updating Query
        // DB::update('update student set name = ? where id = ?',['Itachi Uchiha',6]);
        // DB::update('update student set name = ? where id = ?',['Shishui Uchiha',7]);

        // DB::update('update student set name = :name, email = :email where id = :id', ['Tobirama Senju','tobirama@gmail.com',14]);
        // DB::update('update student set name = :name, email = :email where id = :id', ['Knohamaru','Knohamaru@gmail.com',15]);
        // DB::update('update student set name = :name, email = :email where id = :id', ['Neji Hyuga','neji@gmail.com',19]);

        // Deleting method
        // DB::delete('delete from student where id = ?',[19]);
        // DB::delete('delete from student where id = :id',['id'=>18]);
         $stu = DB::select('select * from student');
        return view('student',['student'=>$stu]);
    }
}
