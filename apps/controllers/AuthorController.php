<?php
class AuthorController extends Controller
{
    public function __construct()
    {
    parent ::__construct();
    $this->model('author');
    }   
    public function index()
    {
        $allauthors= $this->author->showAll();
        //   dd($allauthors);
        $this->load->view('author.index',['data'=>$allauthors]);
    }
    public function create()
    {
        $this->load->view('author.create');

    }
    public function store()
    {
        $data=[
            'username' => 'vimala',
            'password' => md5('vimalapan'),
            'fullname' => 'vimala kumar pan'
        ];
        $this->author->save($data);
    }
    public function edit($id){
        echo "this is edit of product controller $id";
    }
    public function update(){
        echo "this is update of product controller";
    }
    public function show(){
        echo "this is show of product controller";
    }
    public function destroy(){
        echo "this is destroy of product controller";
    }
}