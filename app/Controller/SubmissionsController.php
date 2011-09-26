<?php
/**
 * Submissions Controller
 *
 */
class SubmissionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Submission->recursive = 0;
		$this->set('submissions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Submission->id = $id;
		if (!$this->Submission->exists()) {
			throw new NotFoundException(__('Invalid submission'));
		}
		$this->set('submission', $this->Submission->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add( $FormID = null, $UserID = null, $SubmissionID = null ) {
		
		
		if ( is_null( $FormID ) && is_null( $UserID ) ) {
			
			
			$this->redirect( array( 'controller' => 'users', 'action' => 'add' ) );
		}
		
		
		//.. Get user
		$User = $this->Submission->User->findById($UserID);
		$this->set( 'UserID', $User['User']['id'] );
		
		$Form = $this->Submission->Form->findById($FormID);
		$this->set( 'FormID', $Form['Form']['id'] );
		
		
		if ( is_null( $SubmissionID ) ) {
			
			$Submission = array(
				'Submission' => array(
					'form_id' => $FormID,
					'user_id' => $UserID,
				)
			);
			
			//.. Save the submission record
			$this->Submission->save($Submission);
			
			$this->set( 'SubmissionID', $this->Submission->getLastInsertID());
		}
		
		
		if ($this->request->is('post')) {
			$this->Submission->create();
			if ($this->Submission->save($this->request->data)) {
				$this->Session->setFlash(__('The submission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission could not be saved. Please, try again.'));
			}
		}
		$users = $this->Submission->User->find('list');
		$forms = $this->Submission->Form->find('list');
		$this->set(compact('User', 'users', 'Form', 'forms'));
		
		
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Submission->id = $id;
		if (!$this->Submission->exists()) {
			throw new NotFoundException(__('Invalid submission'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Submission->save($this->request->data)) {
				$this->Session->setFlash(__('The submission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Submission->read(null, $id);
		}
		$users = $this->Submission->User->find('list');
		$forms = $this->Submission->Form->find('list');
		$this->set(compact('users', 'forms'));
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
		$this->Submission->id = $id;
		if (!$this->Submission->exists()) {
			throw new NotFoundException(__('Invalid submission'));
		}
		if ($this->Submission->delete()) {
			$this->Session->setFlash(__('Submission deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Submission was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
