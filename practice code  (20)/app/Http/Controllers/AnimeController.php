<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\FirePHPHandler;

class AnimeController extends Controller
{
    public function show(){

        //Retriving all data from table
        // $char = DB::table('naruto')->paginate(3);
        $char = DB::table('naruto')->SimplePaginate(3);
        return view('anime',['ch'=> $char]);

        //Retriving single data from table
        // $char = DB::table('naruto')->first();
        // $char = DB::table('naruto')->where('id','2')->first(); 
        // $char = DB::table('naruto')->where('city','Uchiha')->value('name');
        // dd($char);
        // $char = DB::table('naruto')->find(3);
        
        // Retriving List of Colmun Values
        // $char = DB::table('naruto')->pluck('name');
        // dd($char);
        // $char = DB::table('naruto')->pluck('name','city');
        // dd($char);

        //Chunking Result
        // $char = DB::table('naruto')->orderBy('id')->chunk(3, function($char){
        //     echo 'Chunk: <br> <br>';
        //     foreach($char as $ch){
        //         echo $ch->name;
        //         echo '<br>';
        //     }
        // });

        //Aggerigates 
        // $char = DB::table('naruto')->count();
        // dd($char);
        // $char = DB::table('naruto')->max('table_name');
        // dd($char);
        // $char = DB::table('naruto')->min('table_name');
        // dd($char);
        // $char = DB::table('naruto')->min('table_name');
        // if(DB::table('naruto')->where('id','2')->exists()){
        //     dd('Yes');
        // }
        // if(DB::table('naruto')->where('id','20')->doesntExist()){
        //     dd('No');
        // }

        // Select Method
        // $char = DB::table('naruto')->select('name','power')->get();
        // dd($char);

        // Distink Method 
        // $char = DB::table('naruto')->distinct()->get();
        // dd($char);

        // Where Method
        // $char = DB::table('naruto')->where('id',4)->get();
        // dd($char); 
        // $char = DB::table('naruto')->where('id','<',4)->get();
        // dd($char);
        // $char = DB::table('naruto')->where('id',4)->orWhere('name','=','Sasuke')->get();
        // dd($char);
        // $char = DB::table('naruto')->whereBetween('id',[4,6])->get();
        // dd($char);
        // $char = DB::table('naruto')->whereBetween('id',[4,6])->orWhereBetween('id',[6,7])->get();
        // dd($char);

        // $char = DB::table('naruto')->whereDate('pass_date','date')->get();
        // dd($char);

        // $char = DB::table('naruto')->whereMonth('pass_date','MONTH')->get();
        // dd($char);

        // $char = DB::table('naruto')->whereDay('pass_date','day number')->get();
        // dd($char);

        // $char = DB::table('naruto')->whereYear('pass_date','YEAR')->get();
        // dd($char);
        // $char = DB::table('naruto')->orderBy('id','desc')->get();
        // dd($char);

        // $char = DB::table('naruto')->latest()->first();
        // dd($char);

        // $char = DB::table('naruto')->oldest()->first();
        // dd($char);

        // $char = DB::table('naruto')->oldest()->first();
        // dd($char);

        // $char = DB::table('naruto')->inRandomOrder()->get();
        // dd($char);

        // $char = DB::table('naruto')->take(4)->get();
        // dd($char);

        // $char = DB::table('naruto')->skip(3)->take(4)->get();
        // dd($char);

        // $char = DB::table('naruto')->limit(4)->get();
        // dd($char);

        // $char = DB::table('naruto')->offset(3)->limit(6)->get();
        // dd($char);
        // return view('anime',['charac'=>$char]);

        // DB::table('naruto')->insert([
        //     'name'=>'Boruto Uzumaki',
        //     'power'=>'Jougan',
        //     'city'=>'Uzumaki'
        // ]);

        // DB::table('naruto')->insert([
        //         ['name'=>'Boruto Uzumaki',
        //         'power'=>'Jougan',
        //         'city'=>'Uzumaki'],

        //         ['name'=>'Sarada Uchiha',
        //         'power'=>'Sharingan',
        //         'city'=>'Uchiha',
        // ],
        //     ]);

        // $id = DB::table('naruto')->insertGetId([
        //         'name'=>'Itachi Uchiha',
        //         'power'=>'Genjutsu',
        //         'city'=>'Uchiha'
        //     ]);
        //     dd($id);

    //    $aff = DB::table('naruto')->where('id',2)->update([
    //         'name'=>'Hogoram Uchiha',
    //         'power'=>'Great Wall Susano',
    //         'city'=>'Uchiha'
    //     ]);
    //     dd($aff);

    // learn about updateorinsert method
        
    // DB::table('naruto')->where('id',16)->delete();

    //method for deleting all data in the data base.
    // DB::table('naruto')->truncate();
    }
}
