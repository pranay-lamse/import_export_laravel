//Import Export data in laravel 

composer require maatwebsite/excel

'providers' => [
    /*
     * Package Service Providers...
     */
    Maatwebsite\Excel\ExcelServiceProvider::class,
]

'aliases' => [
    ...
    'Excel' => Maatwebsite\Excel\Facades\Excel::class,
]

php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config

//

php artisan tinker

factory(App\User::class, 100)->create();
or 
running php artisan db:seed 

..
