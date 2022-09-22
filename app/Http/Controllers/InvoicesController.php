<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoicesController extends Controller
{
    public function index() {
        $invoices = Invoice::with('customer')->get();

        return view('invoices.index', ['invoices' => $invoices]);
    }

    public function create() {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        $invoice = new Invoice();

        $invoice->number = $request->number;
        $invoice->date = $request->date;
        $invoice->total = $request->total;
        $invoice->customer_id = $request->customer;

        $invoice->save();

        return redirect()->route('invoices.index')->with('message', 'Faktura dodana');
    }

    public function edit($id)
    {
        $invoice = Invoice::find($id);

        return view ('invoices/edit', ['invoice' => $invoice]);
    }

    public function update(Request $request, $id)
    {

        $invoice = Invoice::find($id);

        $invoice->number = $request->number;
        $invoice->date = $request->date;
        $invoice->total = $request->total;

        $invoice->save();

        return redirect()->route('invoices.index')->with('message', 'Faktura zmieniona');
    }

    public function delete($id)
    {
       Invoice::destroy($id);

       return redirect()->route('invoices.index')->with('message', 'Faktura usunięta');
    }
}
