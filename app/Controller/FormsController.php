<?php
/**
 * Forms Controller
 *
 */
class FormsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Form->recursive = 0;
		
		$Forms = $this->paginate();
		
		if ( count( $Forms ) == 1 ) {
			$this->redirect( array(
				'controller' => 'submissions',
				'action' => 'add/' . $Forms[0]['Form']['id']
			));
		}
		
		$this->set('forms', $Forms);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Form->id = $id;
		if (!$this->Form->exists()) {
			throw new NotFoundException(__('Invalid form'));
		}
		$this->set('form', $this->Form->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Form->create();
			if ($this->Form->save($this->request->data)) {
				$this->Session->setFlash(__('The form has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Form->id = $id;
		if (!$this->Form->exists()) {
			throw new NotFoundException(__('Invalid form'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Form->save($this->request->data)) {
				$this->Session->setFlash(__('The form has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Form->read(null, $id);
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
		$this->Form->id = $id;
		if (!$this->Form->exists()) {
			throw new NotFoundException(__('Invalid form'));
		}
		if ($this->Form->delete()) {
			$this->Session->setFlash(__('Form deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Form was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
