<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


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
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::updateOrCreate(['name' => '*'], ['name' => '*']);
        Permission::updateOrCreate(['name' => 'roles.*'], ['name' => 'roles.*']);
        Permission::updateOrCreate(['name' => 'roles.view'],['name' => 'roles.view']);
        Permission::updateOrCreate(['name' => 'roles.create'],['name' => 'roles.create']);
        Permission::updateOrCreate(['name' => 'roles.edit'],['name' => 'roles.edit']);
        Permission::updateOrCreate(['name' => 'roles.delete'],['name' => 'roles.delete']);

        $role = Role::updateOrCreate(['name' => 'Root'], ['name' => 'Root']);
        $role->givePermissionTo('roles.*');
        User::find(1)->assignRole("Root");

        $role = Role::updateOrCreate(['name' => 'Role User'], ['name' => 'Role User']);
        $role->givePermissionTo('roles.edit');
        User::find(8)->assignRole("Role User");

        return 0;
    }
}
