<?php

namespace App\Mail;

use App\Models\Pesan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $pesan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Pesan $pesan)
    {
        return $this->pesan = $pesan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(auth()->user()->email, auth()->user()->name)
                    ->markdown('emails.pesan')
                    ->with([
                        'nama'          => $this->pesan->nama,
                        'isi'           => $this->pesan->pesan,
                        'pengirim'      => auth()->user()->name,
                        'website'       => 'websekolah'
                    ]);
    }
}
