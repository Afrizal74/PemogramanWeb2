<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BookModel;
use App\Models\PinjamModel;

class AdminController extends BaseController
{

    public function dashboard()
    {
        $bookModel = new BookModel();
        $pinjamModel = new PinjamModel();

        // Mengambil jumlah buku dan peminjaman
        $data['totalBuku'] = $bookModel->countAll(); // Menghitung total buku
        $data['totalPinjam'] = $pinjamModel->countAll(); // Menghitung total peminjaman

        return view('admin/dashboard', $data);
    }

    public function index(): string
    {
        return view('home');
    }

    // Data Buku
    public function databuku(): string
    {
        $bookModel = model('BookModel');
        $data['books'] = $bookModel->findAll();
        return view('admin/databuku', $data);
    }

    public function tambah_buku()
    {
        $bookModel = model('BookModel');
        $data = $this->request->getPost();
        $file = $this->request->getFile('cover');

        if (!$file->hasMoved()) {
            $path = $file->store('images'); //writable/uploads/images/nama-image
            $data['cover'] = $path;
        }

        if ($bookModel->insert($data, false)) {
            return redirect()->to('admin/databuku')->with('sukses', 'Data buku berhasil disimpan!');
        } else {
            return redirect()->back()->with('gagal', 'Data buku gagal disimpan!');
        }

    }

    public function edit_buku($id)
    {
        $bookModel = model('BookModel');
        $data['buku'] = $bookModel->find($id);

        return view('admin/edit-buku', $data);
    }

    public function update_buku($id)
    {
        $bookModel = model('BookModel');
        $data = $this->request->getPost();
        $file = $this->request->getFile('cover');

        // Mengecek jika file cover ada dan valid
        if ($file->isValid()) {
            if (!$file->hasMoved()) {
                // Menyimpan file cover di direktori images
                $path = $file->store('images');
                $data['cover'] = $path;
            }
        }

        $kategori = $this->request->getPost('kategori');
        $data['kategori'] = $kategori; // Memastikan kategori terupdate

        if ($bookModel->update($id, $data)) {
            return redirect()->to('admin/databuku')->with('sukses', 'Data buku berhasil diupdate!');
        } else {
            return redirect()->back()->with('gagal', 'Data buku gagal diupdate!');
        }
    }

    public function delete_buku($id)
    {
        $bookModel = model('BookModel');
        $pinjamModel = model('PinjamModel');

        // Hapus semua peminjaman yang terkait dengan buku ini
        $pinjamModel->where('id_buku', $id)->delete();

        // Hapus buku
        if ($bookModel->delete($id)) {
            return redirect()->to('admin/databuku')->with('sukses', 'Data buku Berhasil dihapus!');
        } else {
            return redirect()->back()->with('gagal', 'Data buku gagal dihapus!');
        }
    }


    // Fungsi PinjamBuku
    public function pinjambuku()
    {
        $pinjamModel = model('PinjamModel');
        $data['peminjaman'] = $pinjamModel->findAll();
        return view('admin/pinjambuku', $data);
    }

    public function pinjam_buku()
    {
        $pinjamModel = model('PinjamModel');
        $bookModel = model('BookModel'); // memuat model BookModel

        $data = $this->request->getPost();
        $judulBuku = $data['judul_buku']; // Judul buku yang dimasukkan oleh pengguna

        // Mencari ID Buku berdasarkan Judul Buku
        $book = $bookModel->where('judul', $judulBuku)->first(); // Mengambil data buku berdasarkan judul

        if ($book) {
            // Jika buku ditemukan, ambil ID buku dan masukkan ke data peminjaman
            $data['id_buku'] = $book['id']; // Set id_buku berdasarkan ID tabel buku

            // simpan data peminjaman
            if ($pinjamModel->insert($data, false)) {
                return redirect()->to('admin/pinjambuku')->with('sukses', 'Data peminjaman buku berhasil disimpan!');
            } else {
                return redirect()->back()->with('gagal', 'Data peminjaman gagal disimpan!');
            }
        } else {
            // Jika buku tidak ditemukan, akan tampil pesan error
            return redirect()->back()->with('gagal', 'Data Buku tidak ditemukan!');
        }
    }

    public function edit_pinjam_buku($id_pinjam)
    {
        $pinjamModel = model('PinjamModel');
        $data['pinjam'] = $pinjamModel->find($id_pinjam);

        return view('admin/edit-pinjam-buku', $data);
    }

    public function update_pinjam_buku($id_pinjam)
    {
        $bookModel = model('BookModel');
        $pinjamModel = model('PinjamModel');
        $data = $this->request->getPost();
        $file = $this->request->getFile('thumbnail_url');

        if ($pinjamModel->update($id_pinjam, $data)) {
            return redirect()->to('admin/pinjambuku')->with('sukses', 'Data berhasil diupdate!');
        } else {
            return redirect()->back()->with('gagal', 'Data gagal diupdate!');
        }
    }

    public function delete_pinjam($id_pinjam)
    {
        $bookModel = model('BookModel');
        $pinjamModel = model('PinjamModel');

        if ($pinjamModel->find($id_pinjam)) {
            if ($pinjamModel->delete($id_pinjam)) {
                return redirect()->to('admin/pinjambuku')->with('sukses', 'Data peminjaman berhasil dihapus!');
            } else {
                return redirect()->back()->with('gagal', 'Data gagal dihapus!');
            }
        } else {
            return redirect()->back()->with('gagal', 'Data tidak ditemukan!');
        }

    }




}
