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
use Symfony\Component\HttpClient\HttpClient;


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
    try{
         $url = $request->product_url;
        $client = new Client(HttpClient::create(['verify_peer' => false, 'verify_host' => false]));
        $page =  $client->request('GET',$url);
        $resp['title'] = $page->filter('.page-title')->text();
        $resp['description'] = ($page->filter('.overview')->count()  > 0) ? $page->filter('.overview')->text() : '';
        $resp['itemNo'] = $page->filter('.sku > .value')->text();
        $resp['price'] = ($page->filter('.price')->count()  > 0) ? $page->filter('.price')->text() : 0;
        $resp['image'] = $page->filterXpath('//meta[@property="og:image"]')->attr('content');

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
            $product_media->product_id =  $product->id;
            $product_media->image = $resp['image'];
            $product_media->save();

            return redirect()->route('products.index')->with('success', 'Product Added Successfully');

        }else{
            return redirect()->route('products.index')->with('error', 'Product Already Exist');
        }
        return redirect()->route('products.index')->with('success', 'Product exit already');
    }catch (Exception $exception){
        return redirect()->route('products.index')->with('error', 'Something went wrong');
    }

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
