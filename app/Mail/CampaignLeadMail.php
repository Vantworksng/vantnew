<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CampaignLeadMail extends Mailable
{
    use Queueable, SerializesModels;

    public $camp_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($camp_data)
    {
        $this->camp_data = $camp_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      
        return $this->markdown('emails.contact_campaign');

    
    }
}

