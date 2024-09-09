<x-mail::message>
    public function build()
    {
        return $this->from('sender@example.com')
                    ->to('recipient@example.com')
                    ->subject('New Form Submission')
                    ->markdown('emails.form-submitted');
    }
</x-mail::message>
