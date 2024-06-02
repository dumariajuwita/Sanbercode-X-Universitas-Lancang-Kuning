<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    public function index()
    {
        $cast = Cast::all();
        return view('cast.index', ["casts" => $cast]);
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $cast = new Cast;

        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;

        $cast->save();

        return redirect('/cast');
    }

    public function show(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.show', ['cast' => $cast]);
    }

    public function edit(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.edit', ['cast' => $cast]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $cast = Cast::find($id);
        
        $cast->nama = $request['nama'];
        $cast->umur = $request['umur'];
        $cast->bio = $request['bio'];

        $casts->save();

        return redirect('/cast');
    }

    public function destroy(string $id)
    {
        $cast = Cast::find($id);
        $cast->delete();
        return redirect('/cast');
    }
}
