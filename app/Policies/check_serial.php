<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class check_serial
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
          $response = Curl::to('http://www.foo.com/bar')
               ->withData( array( 'foz' => 'baz' ) )
               ->get();


    }
}
