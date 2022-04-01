<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
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
        // $client = new Client();
        // $url ='https://www.gmrgold.com/gold';

        // $page =  $client->request('GET',$url);
        // // echo $page->filter('.productItem-caption-name')->text();
        // // exit();
        // $titles = $page->filter('.CategoryProductPrice')->text();

        // echo $titles;
        // exit();
        // $page->filter('.productItem-caption caption')->each(function ($item){
        //     $this->results[$item->filter('h3')->text()] = $item->filter('.productItem-caption-name')->text();
        // });
        // return $this->results;
        // exit();

        $product = Product::with('user')->get();

        return view('admin..products.index',compact('product'));
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
       Product::Create([
        'product_id'=> $request->product_id,
        'title' => 'lorem',
        'price' => '200$',
        'category' => 'solem',
        'availability' => 'in-stock',
        'added_by' => auth()->user()->id,
        'status' => '1',
       ]);
		return redirect()
			->route('products.index')
			->with('success', 'Question Added Successfully');
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
