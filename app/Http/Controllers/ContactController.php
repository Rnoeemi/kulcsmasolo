<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request): RedirectResponse
    {
        if ($request->filled('website')) {
            return redirect()
                ->route('kapcsolat')
                ->with('contact_sent', true);
        }

        $validated = $request->validated();

        try {
            Mail::to(config('mail.contact_to'))->send(new ContactMessage(
                senderName: $validated['name'],
                senderEmail: $validated['email'],
                messageText: $validated['message'],
            ));
        } catch (Throwable $exception) {
            Log::error('Kapcsolatfelvételi e-mail küldése sikertelen.', [
                'exception' => $exception->getMessage(),
            ]);

            return redirect()
                ->route('kapcsolat')
                ->withInput()
                ->with('contact_error', true);
        }

        return redirect()
            ->route('kapcsolat')
            ->with('contact_sent', true);
    }
}
