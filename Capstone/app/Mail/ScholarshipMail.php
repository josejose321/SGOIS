<?php

namespace App\Mail;

use App\Models\Scholarship;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ScholarshipMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $scholarship;
    public function __construct($scholarship)
    {
        //
        $this->scholarship = $scholarship;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Scholarship Application')
        ->markdown('emails.scholarship')->with('scholarship',$this->scholarship);
    }
}
