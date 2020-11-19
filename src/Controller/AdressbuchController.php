<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Adressbuch Controller
 *
 * @property \App\Model\Table\AdressbuchTable $Adressbuch
 * @method \App\Model\Entity\Adressbuch[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdressbuchController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $adressbuch = $this->paginate($this->Adressbuch);

        $this->set(compact('adressbuch'));
    }

    /**
     * View method
     *
     * @param string|null $id Adressbuch id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adressbuch = $this->Adressbuch->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('adressbuch'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adressbuch = $this->Adressbuch->newEmptyEntity();
        if ($this->request->is('post')) {
            $adressbuch = $this->Adressbuch->patchEntity($adressbuch, $this->request->getData());
            if ($this->Adressbuch->save($adressbuch)) {
                $this->Flash->success(__('The adressbuch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adressbuch could not be saved. Please, try again.'));
        }
        $this->set(compact('adressbuch'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Adressbuch id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adressbuch = $this->Adressbuch->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adressbuch = $this->Adressbuch->patchEntity($adressbuch, $this->request->getData());
            if ($this->Adressbuch->save($adressbuch)) {
                $this->Flash->success(__('The adressbuch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adressbuch could not be saved. Please, try again.'));
        }
        $this->set(compact('adressbuch'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Adressbuch id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adressbuch = $this->Adressbuch->get($id);
        if ($this->Adressbuch->delete($adressbuch)) {
            $this->Flash->success(__('The adressbuch has been deleted.'));
        } else {
            $this->Flash->error(__('The adressbuch could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
