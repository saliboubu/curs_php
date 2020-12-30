<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Country;
use App\Shop;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function quisom(){
        $client = "aaa";
        $producte = "bbb";
        return view('frontend.quisom', ['client'=>$client, 'producte'=>$producte]);
    }

    public function filo(){
        $client = "aaaa";
        $producte = "bbbb";
        return view('frontend.filosofia', compact('client','producte'));
    }

    public function sostenibilitat(){
        $client = "aaaa";
        $producte = "bbbb";
        return view('frontend.sostenibilitat')
            ->with('client',$client)
            ->with('producte',$producte);
    }

    public function equip(){
        return view('frontend.equip');
    }

    public function contacte(){
        return view('frontend.contacte');
    }

    public function categories(){
        //29/12/20
        // $categoria = Category::find(1);
        //El where són condicions que s'han de complir per a que es torni el primer registre
        //$categoria = Category::where('id',1)->where('name','hola')->first();//Accedir a la taula on l'id ded la categoria sigui 1
        // $categoria = Category::where('id',1)->first();
        $categories = Category::all();
        return view('frontend.categories')->with('categories', $categories);
    }

    public function categoria($id){
        $categoria = Category::find($id);
        $productes = Product::where('category_id',$id)->get();
        return view('frontend.categoria')
        ->with('categoria', $categoria) //Passem la categoria i els productes d'aquella categoria
        ->with('productes', $productes);
    }

    public function product($id){
        $product = Product::find($id);
        return view('frontend.product')
        ->with('product', $product);
    }

    public function botigues(){
        $botigues = Shop::get();
        return view('frontend.botigues')
        ->with('botigues',$botigues);
    }

    public function shopdetail($id){
        $botiga = Shop::find($id);
        return view('frontend.botiga')
        ->with('botiga',$botiga);
    }

    public function search(){
        return view('frontend.search');
    }

    public function resultSearch(){
        $nom = $_POST["nom"];
        // $botigues = Shop::where('name','=',$nom)->get();
        $botigues = Shop::where('name','like','%'.$nom.'%')->get();
        return view('frontend.result_search')
            ->with('botigues',$botigues);
    }

    public function productSearch(){
        $categories = Category::get();

        return view('frontend.product_search')
         ->with('categories',$categories);
    }

    public function productSearchResult(){
        $nom_producte = $_POST["nom_prod"];
        $min = $_POST["min"];
        $max = $_POST["max"];
        $categoria = $_POST["categoria"];
        
        // if($categoria == 0){
        //     $productes = Product::where('name','like','%'.$nom_producte.'%')
        //         ->where('price','>=',$min)
        //         ->where('price','<=',$max)
        //         ->get();
        // }else{
        //     $productes = Product::where('name','like','%'.$nom_producte.'%')
        //         ->where('price','>=',$min)
        //         ->where('price','<=',$max)
        //         ->where('category_id',$categoria)
        //         ->get(); 
        // }
        
        //Una query comuna
        $query= Product::where('name','like','%'.$nom_producte.'%')
            ->where('price','>=',$min)
            ->where('price','<=',$max);
        if($categoria!=0){
            $query->where('category_id',$categoria);
        }

        $productes = $query->get();
        
        return view('frontend.result_product_search')
                ->with('productes',$productes);   
    }
}
