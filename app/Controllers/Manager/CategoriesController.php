<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use App\Services\categoryService;
use CodeIgniter\Config\Factories;

class CategoriesController extends BaseController
{

    private $categoryService;

    public function __construct()
    {
        $this->categoryService = Factories::class(CategoryService::class);
    }

    public function index()
    {
       $data = array(
            'title' => 'Categorias',
        );
        return view('Manager/Categories/index', $data);
    }

    public function getAllCategories()
    {
        if ( ! $this->request->isAJAX() ) {
            return redirect()->back();
        }

        $response = [
            'data' => $this->categoryService->getAllCategories() 
        ];        
        return $this->response->setJSON([ 'data' => $this->categoryService->getAllCategories() ]);
    }

    public function getCategoryInfo()
    {
        if ( ! $this->request->isAJAX() ) {
            return redirect()->back();
        }

        $category = $this->categoryService->getCategory( $this->request->getGet('id') );

        $response = [
            'category' => $category
        ];

    //exit($this->request->getGet('id'));        
        return $this->response->setJSON($response);
    }
}
