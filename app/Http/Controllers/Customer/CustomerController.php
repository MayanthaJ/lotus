<?php
namespace App\Http\Controllers\Customer;

use App\Models\Customer\Customer;

use App\Models\Package\Package;
use App\Models\Tour\Tour;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flash;
use Illuminate\Support\Facades\DB;
use Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$customer=customer::all();
        //dd($customer);
        //return view('admin.customer.index');
        return view('admin.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get package details
        $packages = Package::pluck('name','id');

        //condition use to select upcoming tours
        //$tours= Tour::where('id','>', 0)->pluck('departure','id');

        // return view.blade
        return view('admin.customer.create', compact('packages'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $this->validate($request, [
            'fname' => 'required|min:3|max:15',
            'sname' => 'required|min:3|max:15',
            'lname' => 'required|min:3|max:15',
            'otherName' => 'required|min:3|max:15',
            'age' => 'required|numeric'
        ]);

        $customer = Customer::create([
            'fname' => $request->fname,
            'sname' => $request->sname,
            'lname' => $request->lname,
            'otherName' => $request->otherName,
            'age' => $request->age,
            'dob' => $request->dob,
            'gender'=> $request->gender,
            'number' => $request->number,
            'nic' => $request->nic,
            'passport' => $request->passport,
            'address1' => $request->address1,
            'address2' => $request->address2
        ]);
        DB::table('customer_tour')->insert([
            'customer_id'=>$customer->id ,'tour_id'=>$request->tourDate
        ]);
        return \Redirect::to('/system/customer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get the customer details
        $customer = Customer::find($id);
        //get package details
        //$packages = Package::pluck('name','id');
        //condition use to select upcoming tours
        //$tours= Tour::where('id','>', 0)->pluck('departure','id');
        //return view
        return view('admin.customer.edit', compact('customer','tours_package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //get customer model

        $customer = customer::findOrFail($id);

        $customer->fname = $request->fname;
        $customer->sname = $request->sname;
        $customer->lname = $request->lname;
        $customer->otherName = $request->otherName;
        $customer->age=$request->age;
        $customer->dob=$request->dob;
        $customer->gender=$request->gender;
        $customer->number=$request->number;
        $customer->nic=$request->nic;
        $customer->passport=$request->passport;
        $customer->address1=$request->address1;
        $customer->address2=$request->address2;


        //boolean if need :


        // save and exit
        if ($customer->save()) {
            Flash::success("Changes updated !");
        }

        // return to the original page
        return Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //get Customer
        $customer = Customer::findOrFail($id);

        if($customer->delete()){
            Flash::success('Customer Permanently Deleted ');
        }else{
            Flash::error('Fail Delete Customer');
        }
    }

    /**
     * Veiw List of customers with edit links.
     */
    public function view()
    {
        $customers = Customer::all()->where('terminated','=','0');
        return view('admin.customer.view', compact('customers'));
    }
    /**
    *Terminated Customer
     **/
    public function  terminate($id){
       $Status= DB::table('customers')->where('id', $id)->update(['terminated' => 1]);
        if($Status){
            Flash::success('Customer Deleted');
        }else{
            Flash::error('Error Customer deletion');
        }
        return Redirect::back();

    }
    /**
     * undo customer terminate
     * */
    public function  undoterminate($id){
        $Status= DB::table('customers')->where('id', $id)->update(['terminated' => 0]);
        if($Status){
            Flash::success('Customer Deleted');
        }else{
            Flash::error('Error Customer deletion');
        }
        return Redirect::back();

    }
}
