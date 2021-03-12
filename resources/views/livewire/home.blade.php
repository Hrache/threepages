<div>
    <div class="d-flex justify-content-center align-items-center vh-100 p-2">
        <section class="container row">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tilt-in-left-1">
                <img src="/storage/{{ $images[0]->path }}" width="100%" class="mb-3" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <h2><strong>{{ $texts[0]->title }}</strong></h2>
                <p>{{ $texts[0]->content }}</p>
                <br />
                <strong class="float-end mb-5">{{ $texts[0]->created_at }}</strong>
            </div>
        </section>
    </div>

    <div class="d-flex justify-content-center align-items-center grd-dark-to-bright vh-100 p-2">
        <section class="container row">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <h2><strong>{{ $texts[1]->title }}</strong></h2>
                <p>{{ $texts[1]->content }}</p>
                <br />
                <strong class="float-end mb-5">{{ $texts[1]->created_at }}</strong>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tilt-in-left-1">
                <img src="/storage/{{ $images[1]->path }}" width="100%" class="mb-3" />
            </div>
        </section>
    </div>

    <div class="d-flex justify-content-center align-items-center grd-dark-to-bright-2 vh-100 p-2">
        <section class="container row">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tilt-in-left-1">
                <img src="/storage/{{ $images[2]->path }}" width="100%" class="mb-3" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <h2><strong>{{ $texts[2]->title }}</strong></h2>
                <p>{{ $texts[2]->content }}</p>
                <br />
                <strong class="float-end mb-5">{{ $texts[2]->created_at }}</strong>
            </div>
        </section>
    </div>
</div>