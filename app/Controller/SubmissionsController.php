<?php
/**
 * Submissions Controller
 *
 */
class SubmissionsController extends AppController {

	public $components = array('WkHtmlToPdf', 'Email');
	var $helpers = array('Form', 'Html', 'Text');



	private function _sendSubmissionEmail( $UserID, $FormID ) {

		$User = $this->Submission->User->find( 'first', array(
			'conditions' => array(
					'User.id' => $UserID 
				) 
			)
		);

		$this->Email->to = $User['User']['fullname'] . " <" . $User['User']['email'] . ">";
	    $this->Email->subject = 'Thank you for your submission with Triple C';
	    $this->Email->replyTo = 'noreply@tripleccc.com.au';
	    $this->Email->from = 'Triple C - Online Form Processor <noreply@tripleccc.com.au>';
		
		$this->Email->sendAs = 'html';
		$this->Email->template = 'new_submission';
		$this->Email->layout = 'default';

		$this->set( 'title_for_layout', 'Triple C - Client Application Form' );

		$this->set( 'User', $User );
		$this->set( 'FormID', $FormID );
		
		$this->Email->send();
    	return; 
		
	}

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
		
		$Submission = $this->Submission->find('first', array(
			'conditions' => array(
				'Submission.form_id' => $FormID,
				'Submission.user_id' => $UserID
			),
			'order' => array(
				'Submission.created DESC'
			)
		));
		
		//.. sort out how the results are indexed, so the automagic form elements work
		$ResultsArray = array();
		foreach( $Submission['Result'] as $Result ) {
			$ResultsArray[$Result['key']] = $Result['value']; 
		}
		
		$Submission['Result'] = $ResultsArray;
		
		$this->request->data = $Submission;
		
		$this->layout = 'application_form';
		$this->WkHtmlToPdf->createPdf('add');
		
		$this->redirect( array( 'controller' => 'users', 'action' => 'index' ) );
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
			
			
			
			$this->Submission->create();
			if ($this->Submission->save($this->request->data)) {
				
				$this->request->data['Result']['submission_id'] = $this->Submission->getLastInsertID(); 
				
				$this->Submission->Result->save($this->request->data['Result']);
				
				$this->Submission->User->find(
					'first', array(
						'conditions', array(
						)
					)
				);
				
				$this->_sendSubmissionEmail( $this->Cookie->read( 'User.id' ), $FormID );
				
				$this->Session->setFlash(__('The submission has been saved'));
				$this->redirect(array('action' => "thankyou/$FormID"));
			} else {
				$this->Session->setFlash(__('The submission could not be saved. Please, try again.'));
			}
		}
		
		$users = $this->Submission->User->find('list');
		$forms = $this->Submission->Form->find('list');
		
		$this->set(compact('User', 'users', 'Form', 'forms'));
		
		$this->layout = 'application_form';
		// $this->WkHtmlToPdf->createPdf();
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
	
	public function thankyou( $FormID ) {
		
		$this->set( 'User',
			$this->Submission->User->find('first', array(
			'conditions' => array(
					'User.id' => $this->Cookie->read( 'User.id' )
				)
			))
		);
		
		$this->set( 'Form',
			$this->Submission->Form->find('first', array(
			'conditions' => array(
					'Form.id' => $FormID
				)
			))
		);
		
	}
	
}
