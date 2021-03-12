<section class="d-flex justify-content-center align-items-start" style="min-height: 75vh;">
    <div class="row container mt-5">
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <img src="/storage/{{ $data['image']['path'] }}" class="mr-3 mb-3" width="100%" />
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
            <h2><strong>{{ $data['text']['title'] }}</strong></h2>
            <p class="mt-3">
                {{ $data['text']['content'] }}
            </p>
            <strong class="float-end">{{ $data['text']['created_at'] }}</strong>
        </div>
    </div>
</section>
