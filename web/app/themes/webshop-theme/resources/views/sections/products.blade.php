<div class="slice pt-5 pb-7 bg-section-secondary section-products">
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="#" class="d-block">
                                <img alt="Image placeholder" src="//placehold.it/800x600" class="card-img-top">
                            </a>
                        </div>
                        <div class="card-body py-4">
                            <small class="d-block text-sm mb-2">Categorie</small>
                            <div class="mb-3">
                                <a href="#" class="h5 text-decoration-none">Titel van product</a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-success btn-icon-label">
                                    <span class="btn-inner--icon">
                                        <i class="fal fa-cart-plus"></i>
                                    </span>
                                    <span class="btn-inner--text">{{ __('In winkelwagen', 'sage') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>