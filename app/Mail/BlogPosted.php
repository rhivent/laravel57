<?php

namespace App\Mail;

use App\Models\Blog2;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BlogPosted extends Mailable
{
    use Queueable, SerializesModels;
	public $blog123;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Blog2 $blog)
    {
		$this->blog123 = $blog;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('dari@admin.com')->view('emails.blog');
    }
}
