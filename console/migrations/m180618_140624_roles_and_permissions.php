<?php
// Author: Matt Garrison
// Date: 6-18-2018

// This file is the initial Migration to set up roles and permissions for the sttlement Module. It create permissions, then creates roles and adds the permissions to the roles.

use yii\db\Migration;

/**
 * Class m180618_140624_roles_and_permissions
 */
class m180618_140624_roles_and_permissions extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$auth = Yii::$app->authManager;
		// Create Permissions
		// Permission List: createOrder, readOrder, updateOrder, deleteOrder, createUser, readUser, updateUser, deleteUser, resetPassword
		
        // add "createOrder" permission
        $createOrder = $auth->createPermission('createOrder');
        $createOrder->description = 'Create an Order';
        $auth->add($createOrder);

        // add "readOrder" permission
        $readOrder = $auth->createPermission('readOrder');
        $readOrder->description = 'Read an Order';
        $auth->add($readOrder);
        
        // add "updateOrder" permission
        $updateOrder = $auth->createPermission('updateOrder');
        $updateOrder->description = 'Update an Order';
        $auth->add($updateOrder);
        
        // add "deleteOrder" permission
        $deleteOrder = $auth->createPermission('deleteOrder');
        $deleteOrder->description = 'Delete an Order (Make Inactive)';
        $auth->add($deleteOrder);
        
        // add "createUser" permission
        $createUser = $auth->createPermission('createUser');
        $createUser->description = 'Create a User';
        $auth->add($createUser);

        // add "readOrder" permission
        $readUser = $auth->createPermission('readUser');
        $readUser->description = 'Read a User';
        $auth->add($readUser);
        
        // add "updateUser" permission
        $updateUser = $auth->createPermission('updateUser');
        $updateUser->description = 'Update a User';
        $auth->add($updateUser);
        
        // add "deleteOrder" permission
        $deleteUser = $auth->createPermission('deleteUser');
        $deleteUser->description = 'Delete a User (Make Inactive)';
        $auth->add($deleteUser);
        
        // add "resetPassword" permission
        $resetPassword = $auth->createPermission('resetPassword');
        $resetPassword->description = 'Reset a User Password';
        $auth->add($resetPassword);
		
		//Create Roles
		
        // add Admin Role: can CRUD everything that's CRUDable. Add Users, set Roles and Permissions, CRUD all Orders. as per MC-16 https://mountdorawebdesign.atlassian.net/browse/MC-16
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $createOrder);
        $auth->addChild($admin, $readOrder);
        $auth->addChild($admin, $updateOrder);
        $auth->addChild($admin, $deleteOrder);
        $auth->addChild($admin, $createUser);
        $auth->addChild($admin, $readUser);
        $auth->addChild($admin, $updateUser);
        $auth->addChild($admin, $deleteUser);
        $auth->addChild($admin, $resetPassword);
        
        // add Manager Role: can CRUD all Orders. as per MC-16 https://mountdorawebdesign.atlassian.net/browse/MC-16
        $manager = $auth->createRole('manager');
        $auth->add($manager);
        $auth->addChild($manager, $createOrder);
        $auth->addChild($manager, $readOrder);
        $auth->addChild($manager, $updateOrder);
        $auth->addChild($manager, $deleteOrder);
        
        // add Settlement Role: can CRUD all Orders. as per MC-16 https://mountdorawebdesign.atlassian.net/browse/MC-16
        $settlement = $auth->createRole('settlement');
        $auth->add($settlement);
        $auth->addChild($settlement, $createOrder);
        $auth->addChild($settlement, $readOrder);
        $auth->addChild($settlement, $updateOrder);
        $auth->addChild($settlement, $deleteOrder);
        
		// add Client Role: can Read all of their orders. as per MC-16 https://mountdorawebdesign.atlassian.net/browse/MC-16 Rules will be defined in code per page
        $client = $auth->createRole('client');
        $auth->add($client);
        $auth->addChild($client, $readOrder);

        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180618_140624_roles_and_permissions cannot be reverted.\n";

        return false;
    }
    */
}
