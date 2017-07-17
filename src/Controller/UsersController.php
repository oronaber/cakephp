<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function index(){
        $users = $this->paginate($this->Users);
        $this->set('users', $users);
    }
    
    public function view(){
        echo "Detalle de Usuario";
        exit();
    }
    
    public function add(){
        $user = $this->Users->newEntity();
        
        if($this->request->is('post')){
            
            $user = $this->Users->patchEntity($user, $this->request->data);
            
            if($this->Users->save($user)){
                $this->Flash->success('el Usuario ha sido creado correctamente');
                return $this->redirect(['controller' => 'Users', 'action' => 'index']);
            }else{
                $this->Flash->error('El Usuario no pudo ser creado, Por favor intente nuevamente');
            }
        }
        
        $this->set(compact('user'));
    }
}
