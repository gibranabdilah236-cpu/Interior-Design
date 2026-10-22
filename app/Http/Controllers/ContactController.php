<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $settings = [
            'address' => Setting::get('contact_address', 'Jl. Pajajaran No.10, Bogor, Jawa Barat, Indonesia'),
            'phone' => Setting::get('contact_phone', '(0251) 123-4567'),
            'email' => Setting::get('contact_email', 'info@luxeinteriors.co.id'),
            'business_hours' => Setting::get('business_hours', 'Mon-Fri: 9AM-6PM | Sat: 10AM-4PM'),
        ];

        return view('contact', compact('settings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->route('contact')
            ->with('success', 'Your message has been sent successfully. We will get back to you soon.');
    }
}
