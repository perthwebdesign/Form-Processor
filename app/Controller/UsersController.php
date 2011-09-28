<?php
/**
 * Users Controller
 *
 */
class UsersController extends AppController {

/**
 * add method
 *
 * @return void
 */
	public function index() {
		//.. If the form has been posted
		if ($this->request->is('post')) {
			
			//.. try and return a user record based on the email address
			$User = $this->User->getUserByEmail(
				$this->request->data['User']['email']
			);
			
			//.. if a user record is found merge the existing data with the newly submitted
			if( $this->User->exists( $this->User->id = $User['User']['id'] ) ) {
				
				$this->request->data['User'] = array_merge(
					$User['User'],
					$this->request->data['User']
				);
			
			//.. otherwise create a new record
			} else {

				$this->User->create();
			}
			
			//.. save the new / edited user record to the database
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));

				if( !is_null( $this->User->getLastInsertID() ) ) {
					$UserID = $this->User->getLastInsertID();
				} else {
					$UserID = $User['User']['id'];
				}
				
				$this->Cookie->write('User.id', $UserID);
	
				$this->redirect(array( 'controller' => 'forms', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
			
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
