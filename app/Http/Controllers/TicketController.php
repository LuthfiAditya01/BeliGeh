<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        // Hapus filter 'categories' karena tidak ada di model
        $ticket = Ticket::paginate(3);
        
        // Debug jika perlu
        // dd($tickets);

        return view('home.index1', compact('ticket'));
    }
    public function tiket($id)
    {


        // Jika ada id, ambil tiket berdasarkan id tersebut
    
        $ticket = Ticket::where('id', $id)->first();
        $harga = $ticket->ticket_price;
        $harga_terformat = "Rp " . number_format($harga, 0, ',', '.');
        

        // Debug jika perlu
        // dd($tickets);

        return view('home.tiket1', compact('ticket', 'harga_terformat'));
    }

    public function buy($id){
        $ticket = Ticket::where('id', $id)->first();
        $harga = $ticket->ticket_price;
        $harga_terformat = "Rp " . number_format($harga, 0, ',', '.');
        // Jika tiket ditemukan, tampilkan halaman pembayaran
        if($ticket){
            return view('home.buy', compact('ticket', 'harga_terformat'));
        }else{
            // Jika tiket tidak ditemukan, tampilkan pesan error
            return redirect()->route('dashboard')->with('error', 'Tiket yang Anda cari tidak ditemukan');
        }


    }
    public function store(Request $request, $ticketId)
    {
        $messages = [
            'floating_first_name.required' => 'Nama item wajib diisi',
            'floating_first_name.min' => 'Nama item minimal 3 karakter',
            'floating_first_name.max' => 'Nama item maksimal 255 karakter',
            'floating_last_name.required' => 'Nama item wajib diisi',
            'floating_last_name.min' => 'Nama item minimal 3 karakter',
            'floating_last_name.max' => 'Nama item maksimal 255 karakter',
            'amount_ticket.min' => "Minimal tiket yang dibeli berjumlah 1 atau lebih",
            'deskripsi.required' => 'Deskripsi item wajib diisi',
            'harga.required' => 'Harga item wajib diisi',
            'harga.numeric' => 'Harga harus berupa angka',
            'harga.min' => 'Harga tidak boleh kurang dari 0',
            'floating_phone.min' => 'Nomor Handphone kurang dari 10 digit',
            'floating_phone.max' => 'Nomor Handphone lebih dari 13 digit',
            'stok.required' => 'Stok item wajib diisi',
            'stok.integer' => 'Stok harus berupa bilangan bulat',
            'floating_address.max' => 'Alamat terlalu panjang (lebih dari 255 karakter)',
            'stok.min' => 'Stok tidak boleh kurang dari 0'
        ];
        // Validate the request data
        $validatedData = $request->validate([
            'floating_email' => 'required|email|unique:users,email',
            'amount_ticket' => 'required|integer|min:1',
            'floating_first_name' => 'required|string|max:255',
            'floating_last_name' => 'required|string|max:255',
            'floating_phone' => 'required|string|max:13|min:10',
            'floating_address' => 'required|string|max:255',
        ]);
        session()->flash('validatedData', $validatedData);
        return redirect()->route('BuyConfirmByUser', ['id' => $ticketId]);
        // Process the data (e.g., save to the database, send confirmation email, etc.)
        // For example, you might want to save the purchase details to the database.

        // Redirect to the confirmation page with the validated data
        // return redirect()->route('BuyConfirm', [
        //     'id' => $ticketId,
        //     // 'data' => $validatedData,
        // ]);
    }
    public function confirm($id)
    {
        // Ambil data dari session
        $item = session('validatedData');
        $id = Ticket::where('id', $id)->first();
        
        // Redirect ke form jika tidak ada data di session
        if (!$item) {
            return redirect()->route('dashboard')
                ->with('error', 'Silakan isi form terlebih dahulu');
        }

        return view('home.buyconfirm', compact('item', 'id'));
    }

    public function storeConfirmed(Request $request)
    {
        // Ambil data dari session
        $item = session('item_data');
        
        // Redirect ke form jika tidak ada data di session
        if (!$item) {
            return redirect()->route('dashboard')
                ->with('error', 'Silakan isi form terlebih dahulu');
        }

        // Simpan ke database
        // Item::create($item);

        try {
            // Assuming you have a Purchase model
            // $purchase = Purchase::create([
            //     'ticket_id' => $request->ticket_id,
            //     'email' => $validatedData['floating_email'],
            //     'amount' => $validatedData['amount_ticket'],
            //     'first_name' => $validatedData['floating_first_name'],
            //     'last_name' => $validatedData['floating_last_name'],
            //     'phone' => $validatedData['floating_phone'],
            //     'address' => $validatedData['floating_address'],
            //     // Add any other fields you need
            // ]);
    
            // Clear the session data
            session()->forget('validatedData');
    
            return redirect()->route('dashboard')
                ->with('success', 'Pembelian tiket berhasil!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }
}