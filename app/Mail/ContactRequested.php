<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactRequested extends Mailable
{
  use Queueable, SerializesModels;

  public $input;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($input)
  {
    $this->input = $input;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this
      ->subject('Contact Request - marco-marassi.com')
      ->view('emails.contact.requested')
      ->text('emails.contact.requested_plain');
  }
}
