<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      
        return User::leftJoin('categories','categories.users_id', '=', 'users.id')
          ->select('users.name','users.email','categories.name as category_name')->get();
    }
}
