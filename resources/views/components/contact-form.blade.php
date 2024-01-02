<section class="section">
    <div class="container">
        <form action="/contacts" method="post" class="form">
            @csrf
            <div class="form__body flow margin-block-end-32">
                <input type="text" name="name" id="name" placeholder="Insert your name" value="{{ old('name') }}" class="@error('name') is-error @enderror">
                @error('name')
                <p class="input-error">{{ $message }}</p>
                @enderror
                <input type="text" name="surname" id="surname" placeholder="Insert your surname" required value="{{ old('surname') }}">
                @error('surname')
                <p class="input-error">{{ $message }}</p>
                @enderror
                <input type="email" name="email" id="email" placeholder="Insert your email" required value="{{ old('email') }}">
                @error('email')
                <p class="input-error">{{ $message }}</p>
                @enderror
                <input type="tel" name="phone" id="phone" placeholder="Insert your phone" value="{{ old('phone') }}">
            </div>

            <input type="submit" value="Invia" class="button" data-type="accent">
        </form>
    </div>
</section>