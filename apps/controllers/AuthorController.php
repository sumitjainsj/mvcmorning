<?php
class AuthorController extends Controller
{
    public function index()
    {
        $this->model('author');
        $allproducts= $this->author->showAll();
          
        // echo "this is index of product controller";
        $this->load->view('product.index',['data'=>$allproducts]);
    }
    public function create(){
        $this->load->view('product.create');

    }
    public function store(){
        echo "this is  store of product controller";
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