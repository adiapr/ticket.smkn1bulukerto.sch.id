<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TickerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Display a success toast with no title
        // flash()->success('Operation completed successfully.');
        $data = Ticket::latest()->get();
        return view('dashboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attr = $request->except('_token');
        // return $attr;
        Ticket::firstOrCreate($attr);

        flash()->success('Operation completed successfully.');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = [
            'title' => 'Contoh Cetak PDF',
            'ticket' => Ticket::findOrFail($id) 
        ];

        // Menggunakan ukuran custom (80mm x auto)
        $pdf = PDF::loadView('pdf', $data);
        
        // Set ukuran kertas custom
        $pdf->setPaper([0, 0, 226.772, 500], 'portrait'); // 80mm = 226.772pt, tinggi menyesuaikan (-1)
        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
            'defaultFont' => 'Times New Roman', // Pastikan font default diatur ke Times New Roman
        ]);

        // Menyimpan dan menampilkan PDF
        return $pdf->stream('cetak.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
