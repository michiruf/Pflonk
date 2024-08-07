<form wire:submit.prevent="submit" method="POST" class="grid grid-cols-1 row-gap-6">
    @csrf

    @include('layouts.include.status')

    <div>
        <label for="name" class="sr-only">Full name</label>
        <div class="relative rounded-md shadow-sm">
            <input
                wire:model="form.name" id="name" name="name" value="{{ old('form.name') }}"
                class="@error('form.name')border border-red-500 @enderror form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                placeholder="Full name">
        </div>
        @error('form.name')
        <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email" class="sr-only">Email</label>
        <div class="relative rounded-md shadow-sm">
            <input
                wire:model="form.email" id="email" type="text" name="email" value="{{ old('email') }}"
                class="@error('form.email')border border-red-500 @enderror form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                placeholder="Email">
        </div>
        @error('form.email')
        <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="phone" class="sr-only">Phone</label>
        <div class="relative rounded-md shadow-sm">
            <input wire:model="form.phone" id="phone" name="phone" value="{{ old('form.phone') }}"
                   class="@error('form.phone')border border-red-500 @enderror form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                   placeholder="Phone">
        </div>
        @error('form.phone')
        <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="message" class="sr-only">Message</label>
        <div class="relative rounded-md shadow-sm">
            <textarea
                wire:model="form.message" id="message" rows="4" name="message"
                class="@error('form.message')border border-red-500 @enderror form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                placeholder="Message">{{ old('form.message') }}</textarea>
        </div>
        @error('form.message')
        <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <span class="inline-flex rounded-md shadow-sm">
            <button type="submit"
                    class="inline-flex items-center justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out disabled:opacity-50">
                <svg
                    wire:loading wire:target="submitForm"
                    class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                    xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                <span>Submit</span>
            </button>
        </span>
    </div>
</form>
