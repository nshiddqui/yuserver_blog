<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Client;
use Cake\Routing\Router;

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
        $this->Auth->allow(['index', 'articles', 'view', 'team', 'contact','initialBlog','xmlReport']);
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
        $this->loadModel('BlogContents');
        $this->BlogContents->updateAll(['views' => $blog['blog_content']->views + 1], array('blog_id' => $blog->id));
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
        $target_dir = WWW_ROOT . "img/";
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

    public function initialBlog()
    {
        $this->httpClient = new Client();
        $response = $this->httpClient->get('https://newsapi.org/v2/top-headlines', [
                'apiKey' => '58435a02bc2147078fb991cb34a65c4f',
                'category' => 'technology',
                'country' => 'in',
                'sortBy' => 'popularity',
            ]);
        $topHeadlines = $response->getJson();
        if(!empty($topHeadlines['articles'])){
            $count = 0;
            foreach($topHeadlines['articles'] as $article){
                $slug = str_replace(' ', '-', preg_replace("~[^A-Za-z0-9 ]~i", "", $article['title']));
                if($this->Blogs->findBySlug($slug)->count() === 0){
                    $blog = $this->Blogs->newEntity([
                        'contain' => ['BlogContents']
                    ]);
                    $target_dir = WWW_ROOT . "img/";
                    $image_name = 'blog/' . time() . basename($article['urlToImage']);
                    $target_file = $target_dir . $image_name;
                    file_put_contents($target_dir . $image_name , file_get_contents($article['urlToImage']));
                    $response = $this->httpClient->get('https://rapidapi.p.rapidapi.com/v0/article',[
                        'url' => $article['url'],
                    ],[
                        'headers' => [
                            'x-rapidapi-host' => 'extract-news.p.rapidapi.com',
                            'x-rapidapi-key' => '0975eaa22emsh838ef6943ae2108p1fe97cjsn69034e533326'
                        ]
                    ]);
                    $content = $response->getJson();
                    if(!isset($content['article'])){
                        echo "Total Data inserted: {$count} \n";
                        echo 'Time execed';
                        die;
                    }
                    $data = [
                        'slug' => $slug,
                        'blog_content' => [
                            'keywords' => implode(',',$content['article']['meta_keywords']),
                            'title' => $article['title'],
                            'description' => $article['description'],
                            'image' => $image_name,
                            'content' => $content['article']['text']
                        ]
                    ];
                    $blog = $this->Blogs->patchEntity($blog, $data);
                    $this->Blogs->save($blog);
                    $count++;
                }
            }
        }
        echo "Work completed\n";
        echo "Total record checked".count($topHeadlines['articles']);
        die;
    }

    public function xmlReport(){
        $pages = $this->Blogs->find();
        $urls = [
            [
                'loc' => Router::url('/',['_full' => true]),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'daily',
                'priority' => '1.00'
            ],
            [
                'loc' => Router::url('/articles',['_full' => true]),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'daily',
                'priority' => '0.80'
            ],
            [
                'loc' => Router::url('/team',['_full' => true]),
                'lastmod' => '2020-07-12',
                'priority' => '0.80'
            ],
            [
                'loc' => Router::url('/contact',['_full' => true]),
                'lastmod' => '2020-07-12',
                'priority' => '0.80'
            ],
            [
                'loc' => Router::url('/login',['_full' => true]),
                'lastmod' => '2020-07-12',
                'priority' => '0.80'
            ],
            [
                'loc' => Router::url('/about',['_full' => true]),
                'lastmod' => '2020-07-12',
                'priority' => '0.80'
            ]
        ];
        foreach ($pages as $page) {
            $urls[] = [
                'loc' => Router::url($page->slug,['_full' => true]),
                'lastmod' => $page->modified->format('Y-m-d'),
                'priority' => '0.50'
            ];
        }
        $this->RequestHandler->renderAs($this, 'xml');

        // Define a custom root node in the generated document.
        $this->set('_rootNode', 'urlset');
        $this->set([
            // Define an attribute on the root node.
            '@xmlns' => 'http://www.sitemaps.org/schemas/sitemap/0.9',
            'url' => $urls
        ]);  
        $this->set('_serialize', ['@xmlns', 'url']);
    }

}
