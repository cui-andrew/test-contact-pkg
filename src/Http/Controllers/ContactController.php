<?php
namespace Andrew\Contact\Http\Controllers;
use Andrew\Contact\Mail\ContactMailable;
use Andrew\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
        Contact::create($request->all());
        $to=config('contact.send_email_to');
        Mail::to($to)->send(new ContactMailable($request->message));
        return redirect(route('contact'));
    }
}
