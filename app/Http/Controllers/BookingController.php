<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookingController extends Controller
{
    public function index()
    {
        return view('bookings.index', [
            'bookings' => Booking::filter(request(['search']))->paginate(6)
        ]);
    }

    public function show(Booking $booking)
    {
        return view(
            'bookings.show',
            ['booking' => $booking]
        );
    }

    // show create form
    public function create()
    {
        return view('bookings.create');
    }

    // store booking data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'guestName' => 'required',
            'phoneNumber' => 'required',
            'emailAddress' => ['required', Rule::unique('bookings', 'emailAddress')],
            'check_in_date' => 'required',
            'check_out_date' => 'required',
            'roomType' => 'required',
            'numberOfAdults' => 'required',
            'numberOfChildren' => 'required',
            'notes' => 'nullable',
            'totalPrice' => 'required',
            'paymentStatus' => 'required',
            'paymentMethod' => 'required',
            'bookingDate' => 'required',
        ]);

        Booking::create($formFields);

        return redirect('/')->with('message', 'Booking created successfull!');
    }

    // edit
    public function edit(Booking $booking)
    {
        return view('bookings.edit', ['booking' => $booking]);
    }

    // update
    public function update(Request $request, Booking $booking)
    {
        $formFields = $request->validate(
            [
                'guestName' => 'required',
                'phoneNumber' => 'required',
                'emailAddress' => 'required',
                'check_in_date' => 'required',
                'check_out_date' => 'required',
                'roomType' => 'required',
                'numberOfAdults' => 'required',
                'numberOfChildren' => 'required',
                'notes' => 'nullable',
                'totalPrice' => 'required',
                'paymentStatus' => 'required',
                'paymentMethod' => 'required',
                'bookingDate' => 'required',
            ]
        );

        $booking->update($formFields);

        return back()->with('message', 'Booking updated successfull!');
    }
}
