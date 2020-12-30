<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Country;
use App\Shop;

class CategoriesController extends Controller
{
    public function index(){//La funció index s'encarrega de 
        $categories = Category::get();
        return view('categories.index')->with('categories',$categories);
    }

    public function create(){//La funció index s'encarrega de 
        return view('categories.create');
    }

    public function store(){
        $nova_cat = $_POST["name"];
        $description = $_POST["description"];

        //Crea la nova categoria en la bbdd
        $category = new Category;

        //Afegir valors als camps de la taula categories de la bbdd
        $category->name = $nova_cat;
        $category->description = $description;

        //Guarda la categoria
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit($id){//Aqui es pot utilitzar $category que és el que en index.blade està entre 'category'
        $category = Category::find($id);//aqui també s'utilitzaria el $category

        return view('categories.edit')->with('category', $category);
    }

    public function update($id){
        $name = $_POST["name"];
        $description = $_POST["description"];

        $category = Category::find($id);

        $category->name = $name;
        $category->description = $description;

        $category->save();

        return redirect()->route('categories.index');

    }

    public function destroy($id){
        
    }
}
