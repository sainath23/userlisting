<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use DB;

class FeedbacksController extends Controller
{

    /**
     * Returns pages/contact view to display contact form.
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Validate contact form and store data into the database if validation succeeds.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(array(
            'firstname' => 'required|alpha|max:25',
            'lastname' => 'required|alpha|max:25',
            'email' => 'required|email|max:100',
            'phonenumber' => 'required|numeric|digits:10',
        ));

        // Using Eloquent ORM to map Model object to MySQL table.
        $feedback = new Feedback();
        $feedback->first_name = $request->input('firstname');
        $feedback->last_name = $request->input('lastname');
        $feedback->email = $request->input('email');
        $feedback->phone_number = $request->input('phonenumber');
        $feedback->save();

        return redirect('/contact')->with('success', 'Your response has been recorded.');
    }

    /**
     * Returns contact data with pagination.
     */
    public function show() {
        $data = Feedback::paginate(5);
        return view('pages.response')->with('data', $data);
    }

}
