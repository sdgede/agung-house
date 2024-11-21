<?php

namespace App\Controllers;

use App\Models\ReviewModel;
use App\Models\RoomModel;

class Home extends BaseController
{
    public function index(): string
    {
        $roomModel = new RoomModel();
        $reviewModel = new ReviewModel();
        $rooms = $roomModel-> where('id_room', 1 );

        // dd($rooms);
        $data = [
            'nav_selected' => '1',
        ];
        return view('content/index',[
            'data' => $data,
            'rooms' => $rooms
         ]);
    }

    public function room_detail()
    {
        $data = [
            'nav_selected' => '2'
        ];

        return view('content/room_detail', $data);
    }
    public function save(){
         // Ambil data dari input
         $checkin = $this->request->getPost('checkin');
         $checkout = $this->request->getPost('checkout');
         $roomtype = $this->request->getPost('room-type');
         $room = $this->request->getPost('room');
         $guests = $this->request->getPost('guest-name');


        //  dd($Check_in);
         // Nomor WhatsApp admin (gunakan kode negara, contoh: 62 untuk Indonesia)
        $no_admin = '6282147836034'; // Ganti dengan nomor admin

        // Buat pesan yang akan dikirim
        $message = "I hope this message finds you well. I would like to confirm my booking for a room at Get's House. Here are the details of my intended stay:\n\n";
        $message .= "Check-in Date: $checkin\n";
        $message .= "Check-out Date: $checkout\n";
        $message .= "Room Type: $roomtype\n";
        $message .= "Room : $room\n";
        $message .= "My name: $guests\n\n";
        $message .= "Please let me know if any additional information is needed to complete the reservation process. I look forward to a pleasant stay at Get's House. Thank you for your assistance.\n\n";


          // Kodekan pesan untuk URL
          $encoded_message = urlencode($message);

        //   dd($message);
          
          // Buat URL WhatsApp
          $wa_url = "https://api.whatsapp.com/send?phone=$no_admin&text=$encoded_message";
        // Redirect ke URL WhatsApp
        return redirect()->to($wa_url);
    }
}
