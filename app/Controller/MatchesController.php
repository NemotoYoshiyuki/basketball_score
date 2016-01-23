<?php
App::uses('AppController', 'Controller');
/**
 * Matches Controller
 *
 * @property Match $Match
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MatchesController extends AppController {

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
		$this->Match->recursive = 0;
		$this->set('matches', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Match->exists($id)) {
			throw new NotFoundException(__('Invalid match'));
		}
		$options = array('conditions' => array('Match.' . $this->Match->primaryKey => $id),);
		$this->set('match', $this->Match->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Match->create();
			if ($this->Match->save($this->request->data)) {
				$this->Session->setFlash(__('The match has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match could not be saved. Please, try again.'));
			}
		}
		$results = $this->Match->Result->find('list');
		$awayTeams = $this->Match->AwayTeam->find('list');
		$this->set(compact('results', 'awayTeams'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Match->exists($id)) {
			throw new NotFoundException(__('Invalid match'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Match->save($this->request->data)) {
				$this->Session->setFlash(__('The match has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Match.' . $this->Match->primaryKey => $id));
			$this->request->data = $this->Match->find('first', $options);
		}
		$results = $this->Match->Result->find('list');
		$awayTeams = $this->Match->AwayTeam->find('list');
		$this->set(compact('results', 'awayTeams'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Match->id = $id;
		if (!$this->Match->exists()) {
			throw new NotFoundException(__('Invalid match'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Match->delete()) {
			$this->Session->setFlash(__('The match has been deleted.'));
		} else {
			$this->Session->setFlash(__('The match could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


}
