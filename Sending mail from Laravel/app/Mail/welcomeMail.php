<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class welcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $subject;
    // public $mailMessage;
    // private $details;

    public $request;
    public $fileName;

    /**
     * Create a new message instance.
     */
    public function __construct($request,$fileName)
    {
        // $this->subject=$subject;
        // $this->mailMessage=$mail;
        // $this->details=$details;

        $this->request = $request;
        $this->fileName = $fileName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Hello",
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.welcomeMail',

            // If any props is private or protected then use 'with' attribute like this
            // with:[
            //     'name'=>$this->details['name'],
            //     'price'=>$this->details['price'],
            //     'product'=>$this->details['product']
            // ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        if ($this->fileName) {
            $attachments = [Attachment::fromPath(public_path('uploads/'.$this->fileName))];
        }

        return $attachments;

    }
}
