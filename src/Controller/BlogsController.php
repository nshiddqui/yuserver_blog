<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Blogs Controller
 *
 * @property \App\Model\Table\BlogsTable $Blogs
 *
 * @method \App\Model\Entity\Blog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['index', 'articles', 'view', 'team', 'contact']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $trendings = $this->paginate($this->Blogs, [
            'contain' => ['BlogContents'],
            'order' => ['BlogContents.views'],
        ]);
        $this->set(compact('trendings'));
    }

    public function articles() {
        $recent_articles = $this->paginate($this->Blogs, [
            'contain' => ['BlogContents'],
            'order' => ['BlogContents.created'],
        ]);
        $this->set('header', 'Latest Articles');
        $this->set(compact('recent_articles'));
    }

    /**
     * View method
     *
     * @param string|null $slug Blog slug.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null) {
        $this->loadModel('Comments');
        $comment = $this->Comments->newEntity();
        if ($this->request->is('post')) {
            $comment = $this->Comments->patchEntity($comment, $this->request->getData());
            if ($this->Comments->save($comment)) {
                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }
        $blog = $this->Blogs->find('all', [
                    'conditions' => [
                        'Blogs.slug' => $slug
                    ],
                    'contain' => ['BlogContents', 'Comments'],
                ])->first();
        $this->Blogs->updateAll('views = views + 1', array('slug' => $slug));
        $recent_blogs = $this->Blogs->find('all', [
            'order' => [
                'Blogs.created'
            ],
            'contain' => ['BlogContents', 'Comments'],
            'limit' => '5'
        ]);
        $this->set('header', 'Single Blog');
        $this->set('heading_main', 'Articles');
        $this->set(compact('comment', 'blog', 'recent_blogs'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $blog = $this->Blogs->newEntity([
            'contain' => ['BlogContents']
        ]);
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['slug'] = str_replace(' ', '-', $data['blog_content']['title']);
            if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
                $data['blog_content']['image'] = $this->uploadImage($_FILES['image']);
            } else {
                $data['blog_content']['image'] = '';
            }
            $blog = $this->Blogs->patchEntity($blog, $data);
            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Please change your title, it should be unique.'));
        }
        $this->set('header', 'New Post');
        $this->set(compact('blog'));
    }

    public function uploadImage($file) {
        $target_dir = WWW_ROOT . "/img/";
        $image_name = 'blog/' . time() . basename($file["name"]);
        $target_file = $target_dir . $image_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
        $check = getimagesize($file["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

// Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

// Check file size
        if ($file["size"] > 500000) {
            $uploadOk = 0;
        }

// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadOk = 0;
        }

// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return false;
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                return $image_name;
            } else {
                return false;
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $blog = $this->Blogs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blog = $this->Blogs->patchEntity($blog, $this->request->getData());
            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog could not be saved. Please, try again.'));
        }
        $this->set(compact('blog'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $blog = $this->Blogs->get($id);
        if ($this->Blogs->delete($blog)) {
            $this->Flash->success(__('The blog has been deleted.'));
        } else {
            $this->Flash->error(__('The blog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function team() {
        $this->set('header', 'About');
    }

    public function contact() {
        $this->set('header', 'Contact us');
    }

}
