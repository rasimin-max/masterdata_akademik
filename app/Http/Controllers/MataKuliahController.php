<?php
namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class MataKuliahController extends Controller
{
    public function index(): View
    {
        $mataKuliahs = MataKuliah::latest()->get();
        return view('admin.mata-kuliah.index', compact('mataKuliahs'));
    }

    public function create(): View
    {
        return view('admin.mata-kuliah.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'kode' => ['required', 'string', 'max:20', 'unique:mata_kuliahs,kode'],
            'nama' => ['required', 'string', 'max:100'],
            'sks' => ['required', 'integer', 'min:1', 'max:6'],
            'semester' => ['required', 'integer', 'min:1', 'max:14'],
        ]);

        $validated['aktif'] = true;
        MataKuliah::create($validated);

        return redirect()->route('admin.mata-kuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    public function show(MataKuliah $mataKuliah): View
    {
        return view('admin.mata-kuliah.show', compact('mataKuliah'));
    }

    public function edit(MataKuliah $mataKuliah): View
    {
        return view('admin.mata-kuliah.edit', compact('mataKuliah'));
    }

    public function update(Request $request, MataKuliah $mataKuliah): RedirectResponse
    {
        $validated = $request->validate([
            'kode' => [
                'required', 'string', 'max:20',
                Rule::unique('mata_kuliahs', 'kode')->ignore($mataKuliah->id),
            ],
            'nama' => ['required', 'string', 'max:100'],
            'sks' => ['required', 'integer', 'min:1', 'max:6'],
            'semester' => ['required', 'integer', 'min:1', 'max:14'],
        ]);

        $validated['aktif'] = $request->boolean('aktif');
        $mataKuliah->update($validated);

        return redirect()->route('admin.mata-kuliah.index')
            ->with('success', 'Data mata kuliah berhasil diperbarui.');
    }

    public function destroy(MataKuliah $mataKuliah): RedirectResponse
    {
        $mataKuliah->delete();
        return redirect()->route('admin.mata-kuliah.index')
            ->with('success', 'Data mata kuliah berhasil dihapus.');
    }
}