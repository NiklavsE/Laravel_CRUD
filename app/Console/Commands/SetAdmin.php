<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class SetAdmin extends Command
{
    protected $signature = 'set_admin {userid : The id of the user}';

    protected $description = 'Sets user of provided id to administrator role';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $userid = $this->argument('userid');
        $user = User::find($userid);
        if ($user->role == 'a') {
            echo "role has already been assigned for this user \n";
        } else {
            $user->role = 'a';
            $user->save();
            echo "Administrator set sucesfully \n";
        }
    }
}
