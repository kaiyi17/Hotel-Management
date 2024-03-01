<x-layout>

  <div class="container mt-5">
    <h2>Booking Details for ID: {{$booking->bookingID}}</h2>
  
    <ul class="list-group">
        <li class="list-group-item"><strong>Guest Name:</strong> {{$booking->guestName}}</li>
        <li class="list-group-item"><strong>Phone Number:</strong> {{$booking->phoneNumber}}</li>
        <li class="list-group-item"><strong>Email Address:</strong> {{$booking->emailAddress}}</li>
        <li class="list-group-item"><strong>Check-in Date:</strong> {{$booking->check_in_date}}</li>
        <li class="list-group-item"><strong>Check-out Date:</strong> {{$booking->check_out_date}}</li>
        <li class="list-group-item"><strong>Room Type:</strong> {{$booking->roomType}}</li>
        <li class="list-group-item"><strong>Number of Adults:</strong> {{$booking->numberOfAdults}}</li>
        <li class="list-group-item"><strong>Number of Children:</strong> {{$booking->numberOfChildren}}</li>
        <li class="list-group-item"><strong>Notes:</strong> {{$booking->notes}}</li>
        <li class="list-group-item"><strong>Total Price:</strong>${{number_format($booking->totalPrice, 2) }}</li>
        <li class="list-group-item"><strong>Payment Method:</strong> {{$booking->paymentMethod}}</li>
        <li class="list-group-item"><strong>Booking Date:</strong> {{$booking->bookingDate}}</li>
    </ul>
  
    <div class="mt-3 mb-3">
      <!-- Edit button -->
      <a href="/booking/{{ $booking->bookingID}}/edit" class="btn custom-btn">
        Edit
      </a>
    
      <!-- Delete button -->
      <form action="/booking/{{$booking->id}}/delete" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
      </form>
    </div>

  </div>
  
  </x-layout>
  