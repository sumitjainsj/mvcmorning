<?php
class ProductController extends Controller
{
    public function index()
    {
        $allproducts=[
            ['id'=>1,'name'=>'mobile','description'=>'ache he'],
            ['id'=>2,'name'=>'laptop','description'=>'ache he'],
            ['id'=>3,'name'=>'mug','description'=>'ache he'],
            ['id'=>4,'name'=>'mukka','description'=>'ache he'],
        ];
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