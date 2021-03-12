<form action="{{ route('contacts.send') }}" class="container rounded-3" method="post">
    @csrf
    <div class="input-group mb-3">
        <label for="subject" class="input-group-text">
            <strong>{{ __('contacts.subject') }}</strong>
        </label>
        <input type="text" name="subject" id="subject" class="form-control" required />
    </div>

    <div class="input-group mb-3">
        <label for="email" class="input-group-text">
            <strong>{{ __('contacts.email') }}</strong>
        </label>
        <input type="email" name="email" id="email" class="form-control" required />
    </div>

    <div class="input-group mb-3">
        <label for="content" class="input-group-text">
            <strong>{{ __('default.content') }}</strong>
        </label>
        <textarea name="content" id="content" class="form-control" rows="10" required></textarea>
    </div>

    <input type="submit" value="{{ __('contacts.send') }}" class="btn btn-primary d-inline-flex justify-content-end" />
</form>
