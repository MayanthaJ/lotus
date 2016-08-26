<?php

namespace App\Http\Controllers\Accounts;

use App\Models\Accounts\QuickBook;
use Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;

class QuickBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quickbooks = QuickBook::all();

        return view('admin.accounts.quickbook.index', compact('quickbooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.accounts.quickbook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'description' => 'required|min:5|max:50'
        ]);

        QuickBook::create([
            'amount' => $request->amount,
            'description' => $request->description
        ]);

        return Redirect::to('/system/accounts/quickbook');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quickbook = QuickBook::findOrFail($id);

        return view('admin.accounts.quickbook.show', compact('quickbook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $quickbook = QuickBook::findOrFail($id);

        return view('admin.accounts.quickbook.edit', compact('quickbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'amount' => 'required',
            'description' => 'required|min:5|max:50'
        ]);


        $quickbook = QuickBook::findOrFail($id);

        $quickbook->amount = $request->amount;
        $quickbook->description = $request->description;

        if($quickbook->save()) {
            Flash::success('Updates have been successfully changed');
        } else {
            Flash::error('An Error Occurred while updating !');
        }

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
        $quickbook = QuickBook::findOrFail($id);

        $quickbook->delete();

        Flash::success('QuickBook record removed successfully');

        return Redirect::to('/system/accounts/quickbook/');
    }
}
