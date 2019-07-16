<?php

Route::group(['prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('permissions', 'PermissionsApiController');

    Route::apiResource('roles', 'RolesApiController');

    Route::apiResource('users', 'UsersApiController');

    Route::apiResource('expense-categories', 'ExpenseCategoryApiController');

    Route::apiResource('income-categories', 'IncomeCategoryApiController');

    Route::apiResource('expenses', 'ExpenseApiController');

    Route::apiResource('incomes', 'IncomeApiController');

    Route::apiResource('expense-reports', 'ExpenseReportApiController');

    Route::apiResource('crm-statuses', 'CrmStatusApiController');

    Route::apiResource('crm-customers', 'CrmCustomerApiController');

    Route::apiResource('crm-notes', 'CrmNoteApiController');

    Route::apiResource('crm-documents', 'CrmDocumentApiController');
});
