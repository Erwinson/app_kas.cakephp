<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Savings Controller
 *
 * @property \App\Model\Table\SavingsTable $Savings
 */
class SavingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Savings->find()
            ->contain(['Users']);
        $savings = $this->paginate($query);

        $this->set(compact('savings'));
    }

    /**
     * View method
     *
     * @param string|null $id Saving id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saving = $this->Savings->get($id, contain: ['Users']);
        $this->set(compact('saving'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saving = $this->Savings->newEmptyEntity();
        if ($this->request->is('post')) {
            $saving = $this->Savings->patchEntity($saving, $this->request->getData());
            if ($this->Savings->save($saving)) {
                $this->Flash->success(__('The saving has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The saving could not be saved. Please, try again.'));
        }
        $users = $this->Savings->Users->find('list', limit: 200)->all();
        $this->set(compact('saving', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Saving id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saving = $this->Savings->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saving = $this->Savings->patchEntity($saving, $this->request->getData());
            if ($this->Savings->save($saving)) {
                $this->Flash->success(__('The saving has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The saving could not be saved. Please, try again.'));
        }
        $users = $this->Savings->Users->find('list', limit: 200)->all();
        $this->set(compact('saving', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Saving id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saving = $this->Savings->get($id);
        if ($this->Savings->delete($saving)) {
            $this->Flash->success(__('The saving has been deleted.'));
        } else {
            $this->Flash->error(__('The saving could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
