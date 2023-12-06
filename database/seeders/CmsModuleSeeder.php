<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            [
                'name'         => 'Stores',
                'icon'         => 'fa fa-circle-o',
                'path'         => 'company_stores',
                'table_name'   => 'company_stores',
                'controller'   => 'AdminCompanyStoresController',
                'is_protected' => 0,
                'is_active'    => 0
            ],
            [
                'name'         => 'Store Access',
                'icon'         => 'fa fa-circle-o',
                'path'         => 'privilege_store_accesses',
                'table_name'   => 'privilege_store_accesses',
                'controller'   => 'AdminPrivilegeStoreAccessesController',
                'is_protected' => 0,
                'is_active'    => 0
            ],
        ];

        foreach ($modules as $module) {
            DB::table('cms_moduls')->updateOrInsert(['name' => $module['name']], $module);
        }
    }
}
