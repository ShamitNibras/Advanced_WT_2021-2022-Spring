<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manager extends Model
{
    use HasFactory;
    public function managerProfileDetail(){
        $details= manager::where("id",$this->id)->get();
        // return $details;
        return view('pages.manager.profile')->with('details', $details);
    }
}
