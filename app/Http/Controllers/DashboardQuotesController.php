<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class DashboardQuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.quote.index', [
            'quotes' => Quote::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.quote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'quote' => 'required'
        ]);

        Quote::create($validate);
        return redirect('/dashboard/quote')->with('success', 'Curahan hati berhasil ditambahkan <3');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        return view('dashboard.quote.show', [
            'quotes' => $quote
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        return view('dashboard.quote.edit', [
            'quote' => $quote
        ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        $validate = $request->validate([
            'quote' => 'required'
        ]);

        Quote::where('id', $quote->id)->update($validate);
        return redirect('/dashboard/quote')->with('success', 'Curahan hati berhasil diubah <3');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        Quote::destroy($quote->id);
        return redirect('/dashboard/project')->with('delete', 'Curahan hati berhasil dihapus </3');
    }
}
