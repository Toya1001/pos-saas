<?php

namespace App\Http\Livewire\Pos;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\User;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class Pos extends Component
{
   public $cartItems;
   public $msg ;
   public $page = "product";
   public $customerInfo;
   public $customers;
   public $search;
   public $itemQty;

   protected $listeners = ['msgReset'];

   public function msgReset() 
   {
        \sleep(5);
        $this->msg = "";
   }
   
   public function mount(){
        $this->cartItems = Cart::where('customer_id', 12)->with('product')->get();
        $this->customers = Customer::select('customer_name','id')->get();
   }
    public function render()
    {
        $products = Product::search('name', $this->search)->with(['store','category','brand'])->where('store_id', 1)->get();
        Cache::forever('key', $products);
        return view('livewire.pos.pos',['products'=>$products]);
    }

    public function addItem(int $productId){
        if(!$this->customerInfo){
            $this->msg = "<script>alert('Please Complete Customer Form First!');document.getElementById('selectCustomer').classList.add('animate__animated', 'animate__pulse', 'animate__repeat-3');</script>";
            $this->emit('msgReset');
            return;
        }
        // if(isset($this->itemQty[$productId])){
        //     if($this->itemQty[$productId] > 0){
        //         $this->msg = "<script>alert('Please enter a valid qty!');</script>";
        //         return;
        //     }
        // }

        
        $product = Product::find($productId);
        $product->decrement('qty', $this->itemQty[$productId]);
        $product->save();
        
        $total = $product->price * $this->itemQty[$productId];
        // \dd($product->price);

        $cart = Cart::updateOrCreate(
            ['customer_id' => $this->customerInfo['id'], 'product_id' => $productId],
            ['qty' => $this->itemQty[$productId], 'price' => $total ]
        );

        dd($cart->id);

    }

   

    public function NewCustomer(){
        $this->validate($rules = [
            'customerInfo.name'=>'required|unique:customers,customer_name'
        ],[], [
            'customerInfo.name'=> "Customer Name"
        ]);

        $customer = new Customer();
        $customer->customer_name = $this->customerInfo['name'];
        $customer->customer_email = $this->customerInfo['email'] ?? null;
        $customer->customer_tel = $this->customerInfo['tel'] ?? null;
        $customer->save();

        $this->msg = "<script>alertify.success('Successfully Added $customer->customer_name');</script>";
        $this->page = "product";
        $this->customerInfo['id'] = $customer->id;    
    }
 
}
