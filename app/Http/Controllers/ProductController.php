<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Product_media;
use Illuminate\Support\Facades\Redirect;
use Exception;
use Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $results = array();

    public function index()
    {

        $product = Product::with('user','images')->get();

        return view('admin.products.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item_codes = explode(',',$request->product_id);
        foreach ($item_codes as $item_code){
            $url = 'https://www.gmrgold.com/store/Search.aspx?SearchTerms='.$item_code;
       $resp = [];
       $client = new Client();
       $page =  $client->request('GET',$url);

       if($page->filter('.Search-productItem a')->count() > 0){
           $link = $page->filter('.Search-productItem a')->attr('href');
           $link = 'https://www.gmrgold.com/.'. $link;
           $page =  $client->request('GET',$link);
       }
       if($page->filter('.ProductDetailsProductName')->count() > 0){
           $resp['title'] = $page->filter('.ProductDetailsProductName')->text();
           $resp['price'] = $page->filter('#lblPrice')->text();
           $resp['itemNo'] = $page->filter('.ProductItemNr')->text();
           $resp['description'] = $page->filter('.ProductDetailsBullets')->text();
           $resp['features'] = $page->filter('#desc2 > ul > li')->each(function($item) {
               return $item->text();
           });
           $resp['images'] = $page->filter('.product-thumbnails > li > a > img')->each(function($item) {
               return 'https://www.gmrgold.com'.$item->attr('src');
           });

       }else{
           print 'product not found';

       }
        }
        $item = Product::where('product_id', $resp['itemNo'])->count();

        if($item < 1)
        {
            $product= new Product;
            $product->title =  $resp['title'];
            $product->product_id =  $resp['itemNo'];
            $product->description =  $resp['description'];
            $product->price =  $resp['price'];
            $product->added_by =  auth()->user()->id;
            $product->availability ="Gold";
            $product->status =  '1';
            $product->save();
            $product_media = new Product_media;
            foreach($resp['images'] as $key =>  $image){
                $product_media->product_id =  $product->id;
                $product_media->image = $image;
                $product_media->save();

            }
            return redirect()->route('products.index')->with('success', 'Product Added Successfully');

        }
            return redirect()->route('products.index')->with('success', 'Product exit already');

        }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->route('products.index');
    }
}
