<x-layout>
@unless(count($bookings)==0)

<div class="container mt-5">
  <h2>Bookings List</h2>
  @include('partials._search')
  <table class="table table-striped">
      <thead>
          <tr>
              <th>Booking ID</th>
              <th>Guest Name</th>
              <th>Check-in Date</th>
              <th>Check-out Date</th>
              <th>Room Type</th>
              <th>Total Price</th>
              <th>Payment Status</th>
          </tr>
      </thead>
      <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td><a href="/booking/{{$booking->bookingID}}">{{$booking->bookingID}}</a></td>
            <td>{{$booking->guestName}}</td>
            <td>{{$booking->check_in_date}}</td>
            <td>{{$booking->check_out_date}}</td>
            <td>{{$booking->roomType}}</td>
            <td>${{ number_format($booking->totalPrice, 2) }}</td>
            <td>{{$booking->paymentStatus}}</td>
        </tr>
    @endforeach
    
@else
<p>No Bookings found</p>
@endunless


</tbody>
</table>
<div class="mt-6 p-4">
    {{$bookings->links('pagination::bootstrap-5')}}
</div>
</div>

</x-layout>

