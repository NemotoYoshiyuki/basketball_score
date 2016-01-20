<?php
App::uses('AppController', 'Controller');
/**
 * Results Controller
 *
 * @property Result $Result
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ResultsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Result->recursive = 0;
		$this->set('results', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Result->exists($id)) {
			throw new NotFoundException(__('Invalid result'));
		}
		$options = array('conditions' => array('Result.' . $this->Result->primaryKey => $id));
		$this->set('result', $this->Result->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Result->create();
			if ($this->Result->save($this->request->data)) {
				$this->Session->setFlash(__('The result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The result could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Result->exists($id)) {
			throw new NotFoundException(__('Invalid result'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Result->save($this->request->data)) {
				$this->Session->setFlash(__('The result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The result could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Result.' . $this->Result->primaryKey => $id));
			$this->request->data = $this->Result->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Result->id = $id;
		if (!$this->Result->exists()) {
			throw new NotFoundException(__('Invalid result'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Result->delete()) {
			$this->Session->setFlash(__('The result has been deleted.'));
		} else {
			$this->Session->setFlash(__('The result could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}