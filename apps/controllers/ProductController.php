<?php
class ProductController extends Controller{
    public function index(){
        // echo "this is index of product controller";
        $this->load->view('product.index');
    }
    public function create(){
        echo "this is create of product controller";
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