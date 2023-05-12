<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Category;
use DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      
        $last_id = DB::table('users')->insertGetId([
            'name'     => $row['name'],
            'email'    => $row['email'], 
            'password' => \Hash::make($row['password']),
        ]);
        
        

        

         return   new Category([
            'name' => $row['category_name'],
            'users_id' => $last_id,
           
         ]);


    }
}
