<?php
App::uses('AppController', 'Controller');
/**
 * AwayTeams Controller
 *
 * @property AwayTeam $AwayTeam
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AwayTeamsController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $components = array(
		'Paginator' => array(
			'limit' => 10,
			//'maxLimit' => 10,
			//'order' => array('AwayTeam.modified' => 'desc')
		)
	);

	public function index() {
		//paginateメソッドでデータ検索
		$this->set('awayTeams', $this->Paginator->paginate('AwayTeam'));
	}

	//public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */



	/*public function index() {
		$this->AwayTeam->recursive = 0;
		$this->set('awayTeams', $this->Paginator->paginate());
	}*/

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AwayTeam->exists($id)) {
			throw new NotFoundException(__('Invalid away team'));
		}
		$options = array('conditions' => array('AwayTeam.' . $this->AwayTeam->primaryKey => $id));
		$this->set('awayTeam', $this->AwayTeam->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AwayTeam->create();
			if ($this->AwayTeam->save($this->request->data)) {
				$this->Session->setFlash(__('The away team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The away team could not be saved. Please, try again.'));
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
		if (!$this->AwayTeam->exists($id)) {
			throw new NotFoundException(__('Invalid away team'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AwayTeam->save($this->request->data)) {
				$this->Session->setFlash(__('The away team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The away team could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AwayTeam.' . $this->AwayTeam->primaryKey => $id));
			$this->request->data = $this->AwayTeam->find('first', $options);
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
		$this->AwayTeam->id = $id;
		if (!$this->AwayTeam->exists()) {
			throw new NotFoundException(__('Invalid away team'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AwayTeam->delete()) {
			$this->Session->setFlash(__('The away team has been deleted.'));
		} else {
			$this->Session->setFlash(__('The away team could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
