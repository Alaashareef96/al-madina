<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteImageController extends Controller
{
   public function delete($id){

       $image= Media::findOrFail($id);

       $image->delete();

   }

}
