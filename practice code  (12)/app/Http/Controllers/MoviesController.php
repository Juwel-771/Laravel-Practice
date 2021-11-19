<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MoviesController extends Controller
{
    function show(){

        // Inserting Method
        // DB::insert('insert into thriller(name, time, status) values(?, ?, ?)', ['Avaate','2012','Hit']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Transformer','tim'=>'ten','status'=>'flop']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Ready','tim'=>'eleven','status'=>'Hit']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Spider-man','tim'=>'seven','status'=>'Hit']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Captain America','tim'=>'eight','status'=>'Super-Hit']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Captain Marvel','tim'=>'nine','status'=>'Hit']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Avengers','tim'=>'tweenty','status'=>'Super-Hit']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Age of Ultrom','tim'=>'five','status'=>'Hit']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Badman','tim'=>'four','status'=>'HIT']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Sucide Sqaud','tim'=>'three','status'=>'GOOD']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Red Notice','tim'=>'two','status'=>'No update']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Alfa Dead','tim'=>'one','status'=>'flop']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'No man land', 'tim'=>'zero','status'=>'floop']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Charlie','tim'=>'six','status'=>'Best']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Ra One','tim'=>'seven','status'=>'Good']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Bad Boy','tim'=>'ten','status'=>'Bad']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Lucky','tim'=>'one','status'=>'BAD']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'No Luck','tim'=>'one','status'=>'Flop']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Hulk','tim'=>'nine','status'=>'Good']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Bucky','tim'=>'one','status'=>'Best']);
        // DB::insert('insert into thriller(name, time, status) values(:name, :tim, :status)', ['name'=>'Hell','tim'=>'one','status'=>'Best']);

        // DB::update('update thriller set name =:name where id =:id',['Rockstar',266]);
        DB::update('update thriller set id =:id where name =:name',[1,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[2,'Ready']);
        DB::update('update thriller set id =:id where name =:name',[3,'Spider-man']);
        DB::update('update thriller set id =:id where name =:name',[4,'Captain America']);
        DB::update('update thriller set id =:id where name =:name',[5,'Captain Marvel']);
        DB::update('update thriller set id =:id where name =:name',[6,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[7,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[8,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[9,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[10,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[11,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[12,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[13,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[14,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[15,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[16,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[17,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[18,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[19,'Rockstar']);
        DB::update('update thriller set id =:id where name =:name',[20,'Rockstar']);
        $show = DB::select('select * from thriller');
        // DB::delete('delete from thriller where id = :id',['id'=>6]);
        // $show = DB::select('select * from thriller');
        return view('movies',['mov'=>$show]);
    }
}
