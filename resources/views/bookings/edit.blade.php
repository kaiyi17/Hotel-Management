<x-layout>
  <div class="container mt-5 mb-3">
    <h2>Edit Booking: {{$booking->bookingID}}</h2>
    <form action="/booking/{{$booking->bookingID}}" method="POST">
        @csrf
        @method('PUT')
        <!-- Guest Name -->
        <div class="mb-3">
            <label for="guestName" class="form-label">Guest Name</label>
            <input type="text" class="form-control" id="guestName" name="guestName" reuired value=" {{$booking->guestName}}">
        </div>

        <!-- Phone Number -->
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required value=" {{$booking->phoneNumber}}">
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="emailAddress" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="emailAddress" name="emailAddress" required value=" {{$booking->emailAddress}}">
        </div>

        <!-- Check-in Date -->
        <div class="mb-3">
            <label for="check_in_date" class="form-label">Check-in Date</label>
            <input type="date" class="form-control" id="check_in_date" name="check_in_date" required value="{{$booking->check_in_date}}">
        </div>

        <!-- Check-out Date -->
        <div class="mb-3">
            <label for="check_out_date" class="form-label">Check-out Date</label>
            <input type="date" class="form-control" id="check_out_date" name="check_out_date" required value="{{$booking->check_out_date}}">
        </div>

        <!-- Room Type -->
        <div class="mb-3">
          <label for="roomType" class="form-label">Room Type</label>
          <select class="form-select" name="roomType" id="roomType" required value=" {{$booking->roomType}}">
            <option value="">Choose a room type...</option>
            <option value="Single" {{ $booking->roomType == 'Single' ? 'selected' : '' }}>Single Room</option>
            <option value="Double" {{ $booking->roomType == 'Double' ? 'selected' : '' }}>Double Room</option>
            <option value="Suite" {{ $booking->roomType == 'Suite' ? 'selected' : '' }}>Delux</option>
          </select>
      </div>

        <!-- Number of Adults -->
        <div class="mb-3">
            <label for="numberOfAdults" class="form-label">Number of Adults</label>
            <input type="number" class="form-control" id="numberOfAdults" name="numberOfAdults" min="1" required value="{{$booking->numberOfAdults}}">
        </div>

        <!-- Number of Children -->
        <div class="mb-3">
            <label for="numberOfChildren" class="form-label">Number of Children</label>
            <input type="number" class="form-control" id="numberOfChildren" name="numberOfChildren" min="0" required value="{{$booking->numberOfChildren}}">
        </div>

        <!-- Notes -->
        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea class="form-control" id="notes" name="notes" rows="4">{{$booking->notes}}</textarea>
        </div>

        <!-- Total Price -->
        <div class="mb-3">
            <label for="totalPrice" class="form-label">Total Price</label>
            <input type="text" class="form-control" id="totalPrice" name="totalPrice" required value="{{ $booking->totalPrice }}">
        </div>

        <!-- Payment Status -->
        <div class="mb-3">
          <label for="paymentStatus" class="form-label">Payment Status</label>
          <select class="form-select" name="paymentStatus" id="paymentStatus" required {{$booking->paymentStatus}}>
            <option value="">Select payment status...</option>
            <option value="pending" {{ $booking->paymentStatus == 'pending'?'selected' : '' }}>pending</option>
            <option value="paid" {{ $booking->paymentStatus == 'paid' ? 'selected' : '' }}>paid </option>
            <option value="failed" {{ $booking->paymentStatus == 'failed' ? 'selected' : '' }}>unpaid </option>
          </select>
      </div>

        <!-- Payment Method -->
        <div class="mb-3">
          <label for="paymentMethod" class="form-label">Payment Method</label>
          <select class="form-select" name="paymentMethod" id="paymentMethod" required {{$booking->paymentMethod}}>
              <option value="">Choose a payment method...</option>
              <option value="Credit Card" {{ $booking->paymentMethod == 'Credit Card'?'selected' : '' }}>Credit Card</option>
              <option value="Online Transfer" {{ $booking->paymentMethod == 'Online Transfer'?'selected' : '' }}>Online Transfer</option>
              <option value="Cash"{{ $booking->paymentMethod == 'Cash'?'selected' : '' }}>Cash</option>
          </select>
      </div>

        <!-- Booking Date -->
        <div class="mb-3">
            <label for="bookingDate" class="form-label">Booking Date</label>
            <input type="date" class="form-control" id="bookingDate" name="bookingDate" required value="{{$booking->bookingDate}}">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Edit Booking</button>
    </form>
</div>


</x-layout>