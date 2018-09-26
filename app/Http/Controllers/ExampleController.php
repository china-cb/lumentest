<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function index()
    {
        $cellData = [
            ['学号','姓名','成绩'],
            ['10001','AAAAA','99'],
            ['10002','BBBBB','92'],
            ['10003','CCCCC','95'],
            ['10004','DDDDD','89'],
            ['10005','EEEEE','96'],
        ];

        //redis类写法
        // Redis::setex('site_name',10,'lumen的redis');
        //$name = Redis::get('site_name');
        //echo $name;
        //var_dump($name);
        // //cache类写法
        // Cache::store('redis')->put('site_a','lumen的cache的redis',10);

        return Cache::store('redis')->get('site_a');

        //phpexcel
        // Excel::create(iconv('UTF-8', 'GBK', '学生成绩'),function($excel) use ($cellData){
        //     $excel->sheet('score', function($sheet) use ($cellData){
        //     $sheet->rows($cellData);
        //     });
        //     })->store('xls')->export('xls');
    }
    
}
