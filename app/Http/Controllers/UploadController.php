<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Client;

class UploadController extends Controller {

	public function upload(Client $id){

		if(Input::hasFile('file')){

			$file = Input::file('file');
			$file->move('NOTARY FILES', $file->getClientOriginalName());
			return $file;
			return redirect('/notary/show');


		}

	}
}
