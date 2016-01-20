<?php
App::uses('AppController', 'Controller');
/**
 * HomePlayers Controller
 *
 * @property HomePlayer $HomePlayer
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HomePlayersController extends AppController {

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
		$this->HomePlayer->recursive = 0;
		$this->set('homePlayers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HomePlayer->exists($id)) {
			throw new NotFoundException(__('Invalid home player'));
		}
		$options = array('conditions' => array('HomePlayer.' . $this->HomePlayer->primaryKey => $id));
		$this->set('homePlayer', $this->HomePlayer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HomePlayer->create();
			if ($this->HomePlayer->save($this->request->data)) {
				$this->Session->setFlash(__('The home player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The home player could not be saved. Please, try again.'));
			}
		}
		$positions = $this->HomePlayer->Position->find('list');
		$this->set(compact('positions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HomePlayer->exists($id)) {
			throw new NotFoundException(__('Invalid home player'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HomePlayer->save($this->request->data)) {
				$this->Session->setFlash(__('The home player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The home player could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HomePlayer.' . $this->HomePlayer->primaryKey => $id));
			$this->request->data = $this->HomePlayer->find('first', $options);
		}
		$positions = $this->HomePlayer->Position->find('list');
		$this->set(compact('positions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HomePlayer->id = $id;
		if (!$this->HomePlayer->exists()) {
			throw new NotFoundException(__('Invalid home player'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HomePlayer->delete()) {
			$this->Session->setFlash(__('The home player has been deleted.'));
		} else {
			$this->Session->setFlash(__('The home player could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
