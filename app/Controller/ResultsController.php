<?php
/**
 * Results Controller
 *
 */
class ResultsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Result->recursive = 0;
		$this->set('results', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Result->id = $id;
		if (!$this->Result->exists()) {
			throw new NotFoundException(__('Invalid result'));
		}
		$this->set('result', $this->Result->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add( $SubmissionID ) {
		if ($this->request->is('post')) {
			
			
			//.. Set the submission ID.
			$this->request->data['Result']['submission_id'] = $SubmissionID;
			
			$this->Result->create();
			if ($this->Result->save($this->request->data)) {
				$this->Session->setFlash(__('The result has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The result could not be saved. Please, try again.'));
			}
		}
		$submissions = $this->Result->Submission->find('list');
		$this->set(compact('submissions'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Result->id = $id;
		if (!$this->Result->exists()) {
			throw new NotFoundException(__('Invalid result'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Result->save($this->request->data)) {
				$this->Session->setFlash(__('The result has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The result could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Result->read(null, $id);
		}
		$submissions = $this->Result->Submission->find('list');
		$this->set(compact('submissions'));
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
		$this->Result->id = $id;
		if (!$this->Result->exists()) {
			throw new NotFoundException(__('Invalid result'));
		}
		if ($this->Result->delete()) {
			$this->Session->setFlash(__('Result deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Result was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
