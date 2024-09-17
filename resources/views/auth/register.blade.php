<x-layout>
  <h1 class="title">Register a new account</h1>

  <div class="mx-auto max-w-screen-md card">

    <form action="{{ route('register') }}" method="post">
      @csrf

      {{-- Username --}}
      <div class="mb-4">
        <label for="username">Username</label>
        <input type="text" name="username">
      </div>

      {{-- Email --}}
      <div class="mb-4">
        <label for="email">Email</label>
        <input type="text" name="email">
      </div>

      {{-- Password --}}
      <div class="mb-4">
        <label for="password_confirmation">Password</label>
        <input type="password" name="password_confirmation">
      </div>

      {{-- Confirm Password --}}
      <div class="mb-8">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation">
      </div>

      {{-- Submit Button --}}
      <button class="primary-btn">Register</button>
    </form>

  </div>
</x-layout>
