<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Carsprices;

class CarsPricesController extends Controller
{
    public function listModels() {
        $listModels = DB::select('SELECT carsprices.id as id, make.name as make, model.name as model, trim.name as trim, year.year as year, carsprices.minprice as minprice, carsprices.maxprice as maxprice FROM carsprices
            inner join make on carsprices.make = make.id
            inner join trim on carsprices.trim = trim.id
            inner join year on carsprices.year = year.id
            inner join model on carsprices.model = model.id
            where year.year = 1998');
        return view('listModels')->with('listModels', $listModels);
    }

    public function list() {
        $listModels = DB::select('SELECT carsprices.id as id, make.name as make, model.name as model, trim.name as trim, year.year as year, carsprices.minprice as minprice, carsprices.maxprice as maxprice FROM carsprices
            inner join make on carsprices.make = make.id
            inner join trim on carsprices.trim = trim.id
            inner join year on carsprices.year = year.id
            inner join model on carsprices.model = model.id');
        return view('listModels')->with('listModels', $listModels);
    }

    public function listLowerPrice() {
        $listModels = DB::select('SELECT carsprices.id as id, make.name as make, model.name as model, trim.name as trim, year.year as year, carsprices.minprice as minprice, carsprices.maxprice as maxprice FROM carsprices
            inner join make on carsprices.make = make.id
            inner join trim on carsprices.trim = trim.id
            inner join year on carsprices.year = year.id
            inner join model on carsprices.model = model.id
            ORDER BY carsprices.minprice ASC
            LIMIT 10');
        return view('listModels')->with('listModels', $listModels);
    }

    public function listHigherPrice() {
        $listModels = DB::select('SELECT carsprices.id as id, make.name as make, model.name as model, trim.name as trim, year.year as year, carsprices.minprice as minprice, carsprices.maxprice as maxprice FROM carsprices
            inner join make on carsprices.make = make.id
            inner join trim on carsprices.trim = trim.id
            inner join year on carsprices.year = year.id
            inner join model on carsprices.model = model.id
            ORDER BY carsprices.maxprice DESC
            LIMIT 10');
        return view('listModels')->with('listModels', $listModels);
    }

    public function listAvgMake() {
        $listAvgMake = DB::select('SELECT make.name as make, avg(carsprices.minprice) as minprice, avg(carsprices.maxprice) as maxprice FROM carsprices
            inner join make on carsprices.make = make.id
            inner join trim on carsprices.trim = trim.id
            inner join year on carsprices.year = year.id
            inner join model on carsprices.model = model.id
            GROUP BY make.name');
        return view('listAvgMake')->with('listAvgMake', $listAvgMake);
    }

    public function listMakeModelYear() {
        $listMakeModelYear = DB::select('SELECT count(carsprices.id) as count, make.name as make, model.name as model, year.year as year FROM carsprices
            inner join make on carsprices.make = make.id
            inner join trim on carsprices.trim = trim.id
            inner join year on carsprices.year = year.id
            inner join model on carsprices.model = model.id
            GROUP BY make.name, model.name, year.year');
        return view('listMakeModelYear')->with('listMakeModelYear', $listMakeModelYear);
    }
}
