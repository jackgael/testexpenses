<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-07-16 15:07:53',
            'updated_at' => '2019-07-16 15:07:53',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '17',
                'title'      => 'expense_management_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '18',
                'title'      => 'expense_category_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '19',
                'title'      => 'expense_category_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '20',
                'title'      => 'expense_category_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '21',
                'title'      => 'expense_category_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '22',
                'title'      => 'income_category_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '23',
                'title'      => 'income_category_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '24',
                'title'      => 'income_category_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '25',
                'title'      => 'income_category_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '26',
                'title'      => 'expense_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '27',
                'title'      => 'expense_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '28',
                'title'      => 'expense_show',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '29',
                'title'      => 'expense_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '30',
                'title'      => 'expense_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '31',
                'title'      => 'income_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '32',
                'title'      => 'income_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '33',
                'title'      => 'income_show',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '34',
                'title'      => 'income_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '35',
                'title'      => 'income_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '36',
                'title'      => 'expense_report_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '37',
                'title'      => 'expense_report_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '38',
                'title'      => 'expense_report_show',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '39',
                'title'      => 'expense_report_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '40',
                'title'      => 'expense_report_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '41',
                'title'      => 'basic_c_r_m_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '42',
                'title'      => 'crm_status_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '43',
                'title'      => 'crm_status_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '44',
                'title'      => 'crm_status_show',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '45',
                'title'      => 'crm_status_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '46',
                'title'      => 'crm_status_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '47',
                'title'      => 'crm_customer_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '48',
                'title'      => 'crm_customer_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '49',
                'title'      => 'crm_customer_show',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '50',
                'title'      => 'crm_customer_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '51',
                'title'      => 'crm_customer_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '52',
                'title'      => 'crm_note_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '53',
                'title'      => 'crm_note_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '54',
                'title'      => 'crm_note_show',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '55',
                'title'      => 'crm_note_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '56',
                'title'      => 'crm_note_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '57',
                'title'      => 'crm_document_create',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '58',
                'title'      => 'crm_document_edit',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '59',
                'title'      => 'crm_document_show',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '60',
                'title'      => 'crm_document_delete',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ],
            [
                'id'         => '61',
                'title'      => 'crm_document_access',
                'created_at' => '2019-07-16 15:07:53',
                'updated_at' => '2019-07-16 15:07:53',
            ]];

        Permission::insert($permissions);
    }
}
