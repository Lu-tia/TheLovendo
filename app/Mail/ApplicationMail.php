<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @param array $details
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nuova Candidatura')
                    ->view('mail.applicationMail')
                    ->attach(storage_path('app/' . $this->details['curriculum']), [
                        'as' => 'curriculum.' . pathinfo($this->details['curriculum'], PATHINFO_EXTENSION),
                        'mime' => mime_content_type(storage_path('app/' . $this->details['curriculum'])),
                    ]);
    }
}
