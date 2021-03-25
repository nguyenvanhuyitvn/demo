<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\User;

class UserController extends Controller
{

	public function list() {
		$users = User::all();
		return view('users.list',compact('users'));
	}

	public function inputFile() {
		return view('users.import');
	}

    public function import(Request $request) {
    	$request->validate([
    		'excelFile' => 'required | mimes: xls,xlsx,csv'
    	]);

    	$file = $request->file('excelFile');
    	$data = Excel::import(new UsersImport, $file);
    	return redirect()->route('user.list')->with('success', 'Import Success');
    }

    public function export() {
    	return Excel::download(new UsersExport,'test.xlsx');
    }
}
