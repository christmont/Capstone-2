<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Client;
use App\Notary;

class UploadController extends Controller {

	public function upload(Request $request){

		if(Input::hasFile('file')){

			$clients = Client::select('id')->orderBy('created_at','desc')->take(1)->get();

			foreach ($clients as $key => $client) {
							$file = Input::file('file');
			$filename = $file->getClientOriginalName();
			$file->move(public_path().'/', $filename);
			$notary = new Notary;

			$notary->image = $filename;

			$notary->client_id=$client->id;

			$notary->save();
			}

			return redirect('/notary/show');


		}

	}

	public function viewupload($id){

			$notary = Notary::findorfail($id);
			return view('uploadview')->withNotary($notary);

	}

}
