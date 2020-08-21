<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use App\User;

class GeneratePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        Permission::updateOrCreate(['name' => '*'], ['name' => '*']);
        $role = Role::updateOrCreate(['name' => 'Root'], ['name' => 'Root']);
        $role->givePermissionTo('*');
        User::find(1)->assignRole("Root");

        Permission::updateOrCreate(['name' => 'roles.*'], ['name' => 'roles.*']);
        Permission::updateOrCreate(['name' => 'roles.view'],['name' => 'roles.view']);
        Permission::updateOrCreate(['name' => 'roles.create'],['name' => 'roles.create']);
        Permission::updateOrCreate(['name' => 'roles.edit'],['name' => 'roles.edit']);
        Permission::updateOrCreate(['name' => 'roles.delete'],['name' => 'roles.delete']);

        // $role = Role::updateOrCreate(['name' => 'Role Manager'], ['name' => 'Role Manager']);

        // $role->givePermissionTo('roles.*');
        return 0;
    }
}
