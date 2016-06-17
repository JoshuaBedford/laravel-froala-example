<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FileUpload;

class FileUploadsController extends Controller
{
	/**
	 * This returns a json array of links to fill the image manager in Froala forms. DO NOT CHANGE.
	 * @return JSON Returns a json array of links.
	 */
	public function index(){
		$images = FileUpload::get();
		$list = array();
		foreach($images as $image){
			$img = new \StdClass;
			$img->url  = $image->path;
			$img->thumb = $image->path;
			$img->id = $image->id;
			$list[] = $img;
		}
		return stripslashes(response()->json($list)->content());
	}

	/**
	 * Stores images uploaded from a Froala enabled form. 
	 * @param  Request $request the POST request
	 * @return JSON     Returns a json link with a url (used to insert image into article/page). DO NOT CHANGE.
	 */
	public function store(Request $request){
    	$input 				= $request->all();
    	$location 			= $input['location'];

		$fileData 			= $request->file('file'); //this gets the file data for 1st argument
        // $filename 			= $fileData->getClientOriginalName();
        $filename           = $_FILES['file']['name'];
        // $completePath 		= url('/' . $location . '/' . $filename);
        $destinationPath 	= 'images/';
        $request->file('file')->move($destinationPath, $filename);
		$completePath = url('/' . $destinationPath . $filename);

		$fileupload = new FileUpload;
		$fileupload->title = $filename;
		$fileupload->path = $completePath;
		
		if($fileupload->save()){
			return stripslashes(response()->json(['link' => $completePath])->content());
		}
	}

	/**
	 * Find and delete the deleted image.
	 * @param  Request  $request 	[description]
	 * @param  int  	$id      	Department ID
	 */
    public function destroy(Request $request){
    	$input = $request->all();
    	$url = parse_url($input['src']);
    	$splitPath = explode("/", $url["path"]);
    	$splitPathLength = count($splitPath);
    	FileUpload::where('path', 'LIKE', '%' . $splitPath[$splitPathLength-1] . '%')->delete();
    }
}
