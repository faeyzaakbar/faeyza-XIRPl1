<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Validation\Rule;

class SiswaController extends Controller
{
    public function index() {
        $siswa = Siswa::all();
        return view('siswa/daftarsiswa', compact('siswa'));
    }

    public function createForm()
    {
        return view('siswa/tambahsiswa');
    }

    public function create(Request $request)
    {
        // Validasi data form
        $customMessages = [
            'nis.unique' => 'NIS sudah ada, harap pakai yang lain',
        ];

        $this->validate($request, [
            'nis' => [
                'required',
                'min:8',
                Rule::unique('siswa', 'nis'),
            ],
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
        ], $customMessages);

        // Simpan data ke database
        Siswa::create($request->all());

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('daftarsiswa')->with('success', 'Data berhasil disimpan!');
    }

    public function editForm($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa/editsiswa', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'nis' => ['required', Rule::unique('siswa', 'nis')->ignore($id)],
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            // tambahkan validasi untuk kolom lainnya
        ], [
            'nis.unique' => 'NIS sudah terpakai',
        ]);

        // Ambil data pengguna dari database
        $siswa = Siswa::find($id);

        // Update data
        $siswa->update($request->all());

        // Redirect atau lakukan operasi lainnya
        return redirect()->route('daftarsiswa')->with('success', 'Data pengguna berhasil diperbarui!');
    }

    public function deleteSiswa($id) {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->route('daftarsiswa')->with('success', 'Data berhasil dihapus');
    }
}
