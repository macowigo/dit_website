<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'guard_name' => 'web',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);

      

        $this->generate_permissions();
        $this->command->info('Admin Role Assigned All The Permissions');
    }

     /**
     * This function generates permissions automatically from the models folder
     */
    private function generate_permissions(){

        $path = app_path().'/Models';
        $files = scandir($path);

        /*$models = array();
        $namespace = 'Your\Model\Namespace\\';*/
        foreach($files as $file) {
          //skip current and parent folder entries and non-php files
          if ($file == '.' || $file == '..') continue;
          $models[] = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);//$file; //$namespace . preg_replace('\.php$', '', $file);
        }

        $ps = ['view','add','edit','delete'];
        $role = \App\Models\Role::findOrFail(1);
        foreach($models as $mod){
            foreach($ps as $p){
                $perm = \App\Models\Permission::firstOrNew(
                    ['name' => $p.'_'.strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $mod))], ['guard_name' => 'web']);
                $perm->save();
            }
        }
        //give all permissions to admin
        $role->syncPermissions(\App\Models\Permission::all());


    }
}
