<?php

use Carbon\Carbon;
use App\Models\BackpackUser;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\RegistersUsers;

class UsersTableSeeder extends Seeder
{
    use RegistersUsers;

    public function run()
    {
        $superAdminUserId = DB::table('users')->insertGetId([
            'name' => 'Super Admin',
            'email' => 'superadmin@blablapub.com',
            'email_verified_at' => Carbon::now(),
            'password' => '$2y$10$fntLHvuujVt/ATOqaY3uvut/i/N07jSBG2ORPB4971glzwaPJrtfe',
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $adminUserId = DB::table('users')->insertGetId([
            'name' => 'Admin',
            'email' => 'admin@blablapub.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $managerUserId = DB::table('users')->insertGetId([
            'name' => 'Manager',
            'email' => 'manager@blablapub.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('manager'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $userUserId = DB::table('users')->insertGetId([
            'name' => 'User',
            'email' => 'user@blablapub.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('user'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // ROLES
        $superAdminRoleId = DB::table('roles')->insertGetId([
            'name' => 'Super Admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $adminRoleId = DB::table('roles')->insertGetId([
            'name' => 'Admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $managerRoleId = DB::table('roles')->insertGetId([
            'name' => 'Manager',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $userRoleId = DB::table('roles')->insertGetId([
            'name' => 'User',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // PERMISSIONS
        // PERMISSIONS USERS
        $viewUserPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'view users',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $createUserPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'create users',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $updateUserPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'update users',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $deleteUserPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'delete users',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $restoreUserPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'restore users',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $forceDUserPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'force delete users',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // PERMISSIONS PLACES
        $viewPlacePermissionId = DB::table('permissions')->insertGetId([
            'name' => 'view places',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $createPlacePermissionId = DB::table('permissions')->insertGetId([
            'name' => 'create places',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $updatePlacePermissionId = DB::table('permissions')->insertGetId([
            'name' => 'update places',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $deletePlacePermissionId = DB::table('permissions')->insertGetId([
            'name' => 'delete places',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $restorePlacePermissionId = DB::table('permissions')->insertGetId([
            'name' => 'restore places',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $forceDeletePlacePermissionId = DB::table('permissions')->insertGetId([
            'name' => 'force delete places',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // PERMISSIONS PROMOTIONS
        $viewPromotionPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'view promotions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $createPromotionPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'create promotions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $updatePromotionPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'update promotions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $deletePromotionPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'delete promotions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $restorePromotionPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'restore promotions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $forceDeletePromotionPermissionId = DB::table('permissions')->insertGetId([
            'name' => 'force delete promotions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // ROLE HAS PERMISSIONS
        // ADMIN PERMISSIONS
        DB::table('role_has_permissions')->insert([
            'permission_id' => $viewUserPermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $createUserPermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $updateUserPermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $viewPlacePermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $createPlacePermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $updatePlacePermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $deletePlacePermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $restorePlacePermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $forceDeletePlacePermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $viewPromotionPermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $createPromotionPermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $updatePromotionPermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $deletePromotionPermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $restorePromotionPermissionId,
            'role_id' => $adminRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $forceDeletePromotionPermissionId,
            'role_id' => $adminRoleId
        ]);
        // MANAGER PERMISSIONS
        DB::table('role_has_permissions')->insert([
            'permission_id' => $createPlacePermissionId,
            'role_id' => $managerRoleId
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => $createPromotionPermissionId,
            'role_id' => $managerRoleId
        ]);

        // ROLES
        DB::table('model_has_roles')->insert([
            'role_id' => $superAdminRoleId,
            'model_type' => BackpackUser::class,
            'model_id' => $superAdminUserId
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => $adminRoleId,
            'model_type' => BackpackUser::class,
            'model_id' => $adminUserId
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => $managerRoleId,
            'model_type' => BackpackUser::class,
            'model_id' => $managerUserId
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => $userRoleId,
            'model_type' => BackpackUser::class,
            'model_id' => $userUserId
        ]);


    }
}
