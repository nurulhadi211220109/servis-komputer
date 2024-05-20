<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KeluhanController extends Controller
{
    public function index(): View
    {
        $keluhan = Keluhan::latest()->paginate(10);
        return view('keluhan.index', compact('keluhan'));
    }

    public function create(): View
    {
        return view('keluhan.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'deskripsi'   => 'required|min:5'
        ]);

        Keluhan::create($request->all());

        return redirect()->route('keluhan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $keluhan = Keluhan::findOrFail($id);
        return view('keluhan.show', compact('keluhan'));
    }

    public function edit(string $id): View
    {
        $keluhan = Keluhan::findOrFail($id);
        return view('keluhan.edit', compact('keluhan'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'deskripsi'   => 'required|min:5'
        ]);

        $keluhan = Keluhan::findOrFail($id);
        $keluhan->update($request->all());

        return redirect()->route('keluhan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $keluhan = Keluhan::findOrFail($id);
        $keluhan->delete();
        return redirect()->route('keluhan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
