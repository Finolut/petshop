<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('emails.payment_notification')
                    ->with(['data' => $this->data]) // Pastikan 'data' dikirim ke view
                    ->subject('Bukti Pembayaran Diterima');
    }
    
}
