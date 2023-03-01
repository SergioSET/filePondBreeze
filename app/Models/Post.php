<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class Post extends Model
{
  use HasFactory;

  protected $fillable = ['title', 'photo'];

  // public function image(Request $request): Attribute
  // {
  //   $temporaryFile = TemporaryFile::where('folder', $request->photo)->first();

  //   return Attribute::make(
	// 		get: fn () => $this->photo ? $temporaryFile->folder . '/' . $temporaryFile->filename : 'default.jpg'
	// 	);
 

  //   // return new Attribute(
  //   //   get: function () {
  //   //     // return $this->avatar ?? 'https://cdn.pixabay.com/photo/2023/01/30/16/53/search-engine-optimization-7756188_640.jpg';
  //   //     // return $this->image_url ? Storage::url($this->image_url) : 'https://cdn.pixabay.com/photo/2023/01/30/16/53/search-engine-optimization-7756188_640.jpg';
  //   //     return $this->photo ? $temporaryFile->folder . '/' . $temporaryFile->filename : 'default.jpg';
  //   //   }
  //   // );
  // }
}
