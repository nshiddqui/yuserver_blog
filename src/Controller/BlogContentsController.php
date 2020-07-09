<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BlogContents Controller
 *
 * @property \App\Model\Table\BlogContentsTable $BlogContents
 *
 * @method \App\Model\Entity\BlogContent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogContentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Blogs'],
        ];
        $blogContents = $this->paginate($this->BlogContents);

        $this->set(compact('blogContents'));
    }

    /**
     * View method
     *
     * @param string|null $id Blog Content id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blogContent = $this->BlogContents->get($id, [
            'contain' => ['Blogs'],
        ]);

        $this->set('blogContent', $blogContent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blogContent = $this->BlogContents->newEntity();
        if ($this->request->is('post')) {
            $blogContent = $this->BlogContents->patchEntity($blogContent, $this->request->getData());
            if ($this->BlogContents->save($blogContent)) {
                $this->Flash->success(__('The blog content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog content could not be saved. Please, try again.'));
        }
        $blogs = $this->BlogContents->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('blogContent', 'blogs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Blog Content id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blogContent = $this->BlogContents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blogContent = $this->BlogContents->patchEntity($blogContent, $this->request->getData());
            if ($this->BlogContents->save($blogContent)) {
                $this->Flash->success(__('The blog content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog content could not be saved. Please, try again.'));
        }
        $blogs = $this->BlogContents->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('blogContent', 'blogs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog Content id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blogContent = $this->BlogContents->get($id);
        if ($this->BlogContents->delete($blogContent)) {
            $this->Flash->success(__('The blog content has been deleted.'));
        } else {
            $this->Flash->error(__('The blog content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
