<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $primaryKey = 'bookingID';

    protected $fillable = ['guestName', 'phoneNumber', 'emailAddress', 'check_in_date', 'check_out_date', 'roomType', 'numberOfAdults', 'numberOfChildren', 'notes', 'totalPrice', 'paymentStatus', 'paymentMethod', 'bookingDate'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('bookingID', 'LIKE', '%' . request('search') . '%')
                ->orWhere('guestName', 'LIKE', '%' . request('search') . '%')
                ->orWhere('phoneNumber', 'LIKE', '%' . request('search') . '%')
                ->orWhere('emailAddress', 'LIKE', '%' . request('search') . '%')
                ->orWhere('check_in_date', 'LIKE', '%' . request('search') . '%')
                ->orWhere('check_out_date', 'LIKE', '%' . request('search') . '%')
                ->orWhere('roomType', 'LIKE', '%' . request('search') . '%')
                ->orWhere('paymentStatus', 'LIKE', '%' . request('search') . '%')
                ->orWhere('bookingDate', 'LIKE', '%' . request('search') . '%');
        }
    }
}
