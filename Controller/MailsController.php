<?php
App::uses('TinyMailAppController', 'TinyMail.Controller');
/**
 * Mails Controller
 *
 * @property Mail $Mail
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MailsController extends TinyMailAppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Mail->recursive = 0;
		$this->set('mails', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Mail->exists($id)) {
			throw new NotFoundException(__d('tiny_mail', 'Invalid mail'));
		}
		$options = array('conditions' => array('Mail.' . $this->Mail->primaryKey => $id));
		$this->set('mail', $this->Mail->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Mail->create();
			if ($this->Mail->save($this->request->data)) {
				$this->Session->setFlash(__d('tiny_mail', 'The mail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('tiny_mail', 'The mail could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Mail->exists($id)) {
			throw new NotFoundException(__d('tiny_mail', 'Invalid mail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mail->save($this->request->data)) {
				$this->Session->setFlash(__d('tiny_mail', 'The mail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('tiny_mail', 'The mail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mail.' . $this->Mail->primaryKey => $id));
			$this->request->data = $this->Mail->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Mail->id = $id;
		if (!$this->Mail->exists()) {
			throw new NotFoundException(__d('tiny_mail', 'Invalid mail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mail->delete()) {
			$this->Session->setFlash(__d('tiny_mail', 'The mail has been deleted.'));
		} else {
			$this->Session->setFlash(__d('tiny_mail', 'The mail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
