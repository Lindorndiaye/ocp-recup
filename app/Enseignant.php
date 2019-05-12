<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    //
    protected $fillable = [  
		'prenom', 'nom', 'age', 'email','mobile','region','ville','deniere_diplome','année_exper','experience','num_cni','cv_file' 
	];
}
