<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as EasyAdminController;


class AdminController extends EasyAdminController
{
    public function createNewUserEntity(){
        return $this->get('fos_user.user_manager')->createUser();
    }
    
    public function prePersistUserEntity($user){
        return $this->get('fos_user.user_manager')->updateUser($user, falsw);
    }
    
    public function preUpdateUserEntity($user){
        return $this->get('fos_user.user_manager')->createUser($user,false);
    }
}
