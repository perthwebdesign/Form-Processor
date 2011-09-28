<?php
/**
 * Submissions Controller
 *
 */
class SubmissionsController extends AppController {

	// public $components = array('WkHtmlToPdf');
	var $helpers = array('Form', 'Html', 'Text');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Submission->recursive = 0;
		$this->set('submissions', $this->paginate());
		//$this->WkHtmlToPdf->createPdf();
	}
	
	public function getViewDump($fileName)
    {
        $this->WkHtmlToPdf->getViewDump($fileName);
    } 
	

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($UserID, $FormID) {
		
		$SubmissionResults = $this->Submission->Result->find('all', array(
				'Submission.form_id' => $FormID,
				'Submission.user_id' => $UserID
			)
		);
		
		// var_dump($SubmissionResults);
		$this->set( 'SubmissionResults', $SubmissionResults );
	}
	
	public function pdf( $UserID, $FormID ) {
		
		
		$this->view( $UserID, $FormID );
		
		$this->layout = 'application_form';
		$this->render( 'view' );
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add( $FormID ) {
		
		if ($this->request->is('post') && $this->Cookie->read( 'User' )) {
			
			$Submission = array(
				'form_id' => $FormID,
				'user_id' => $this->Cookie->read( 'User.id' )
			);
			
			$this->request->data['Submission'] = $Submission;
			
			// var_dump($this->request->data);
			// die("test");
			
			$this->Submission->create();
			if ($this->Submission->save($this->request->data)) {
				
				
				
				
				$this->request->data['Result']['submission_id'] = $this->Submission->getLastInsertID(); 
				
				$this->Submission->Result->save($this->request->data['Result']);
				
				$this->Session->setFlash(__('The submission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission could not be saved. Please, try again.'));
			}
		}
		$users = $this->Submission->User->find('list');
		$forms = $this->Submission->Form->find('list');
		$this->set(compact('User', 'users', 'Form', 'forms'));
		
		$this->layout = 'application_form';
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
