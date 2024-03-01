<x-layout>
  <div class="container mt-5">
    <h2>Create Booking</h2>
    <form action="/bookings" method="POST">
        @csrf <!-- Ensure you have CSRF protection -->

        <!-- Guest Name -->
        <div class="mb-3">
            <label for="guestName" class="form-label">Guest Name</label>
            <input type="text" class="form-control" id="guestName" name="guestName" reuired value=" {{old('guestName')}}">
            @error('guestName')
            <p class="text-danger small mt-1"> {{$message}}</p>
            @enderror
        </div>

        <!-- Phone Number -->
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="emailAddress" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="emailAddress" name="emailAddress" required>
        </div>

        <!-- Check-in Date -->
        <div class="mb-3">
            <label for="check_in_date" class="form-label">Check-in Date</label>
            <input type="date" class="form-control" id="check_in_date" name="check_in_date" required>
        </div>

        <!-- Check-out Date -->
        <div class="mb-3">
            <label for="check_out_date" class="form-label">Check-out Date</label>
            <input type="date" class="form-control" id="check_out_date" name="check_out_date" required>
        </div>

        <!-- Room Type -->
        <div class="mb-3">
          <label for="roomType" class="form-label">Room Type</label>
          <select class="form-select" name="roomType" id="roomType" required>
              <option value="">Choose a room type...</option>
              <option value="Single">Single Room</option>
              <option value="Double">Double Room</option>
              <option value="Suite">Delux</option>
          </select>
      </div>

        <!-- Number of Adults -->
        <div class="mb-3">
            <label for="numberOfAdults" class="form-label">Number of Adults</label>
            <input type="number" class="form-control" id="numberOfAdults" name="numberOfAdults" min="1" required>
        </div>

        <!-- Number of Children -->
        <div class="mb-3">
            <label for="numberOfChildren" class="form-label">Number of Children</label>
            <input type="number" class="form-control" id="numberOfChildren" name="numberOfChildren" min="0" required>
        </div>

        <!-- Notes -->
        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea class="form-control" id="notes" name="notes" rows="4"></textarea>
        </div>

        <!-- Total Price -->
        <div class="mb-3">
            <label for="totalPrice" class="form-label">Total Price</label>
            <input type="text" class="form-control" id="totalPrice" name="totalPrice" required>
        </div>

        <!-- Payment Status -->
        <div class="mb-3">
          <label for="paymentStatus" class="form-label">Payment Status</label>
          <select class="form-select" name="paymentStatus" id="paymentStatus" required>
              <option value="">Select payment status...</option>
              <option value="Pending">Pending</option>
              <option value="Paid">Paid</option>
              <option value="Failed">Unpaid</option>
          </select>
      </div>

        <!-- Payment Method -->
        <div class="mb-3">
          <label for="paymentMethod" class="form-label">Payment Method</label>
          <select class="form-select" name="paymentMethod" id="paymentMethod" required>
              <option value="">Choose a payment method...</option>
              <option value="Credit Card">Credit Card</option>
              <option value="Online Transfer">Online Transfer</option>
              <option value="Cash">Cash</option>
          </select>
      </div>

        <!-- Booking Date -->
        <div class="mb-3">
            <label for="bookingDate" class="form-label">Booking Date</label>
            <input type="date" class="form-control" id="bookingDate" name="bookingDate" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Booking</button>
    </form>
</div>


</x-layout>