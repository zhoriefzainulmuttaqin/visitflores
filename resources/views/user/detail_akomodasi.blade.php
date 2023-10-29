@extends('user.template')

@section('title')
    Detail Akomodasi
@endsection

@section('cover')
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('canvas') }}/css/components/bs-rating.css">
@endsection
@section('content')
    <div class="modal fade text-start bs-example-modal-scrollable" tabindex="-1" aria-labelledby="scrollableModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Objectively disintermediate fully researched metrics via cooperative markets.
                        Proactively implement superior portals and alternative potentialities. Continually e-enable
                        multifunctional architectures and resource sucking data. Efficiently productivate e-business
                        architectures after maintainable internal or "organic" sources. Efficiently administrate equity
                        invested metrics rather than turnkey networks.
                        Globally cultivate state of the art outsourcing with 24/365 ideas. Globally disintermediate
                        clicks-and-mortar mindshare rather than proactive experiences. Assertively synthesize long-term
                        high-impact processes through premier opportunities. Appropriately utilize extensive core
                        competencies without ethical systems. Dynamically revolutionize superior architectures after
                        scalable "outside the box" thinking.
                        Energistically initiate low-risk high-yield paradigms through viral relationships. Collaboratively
                        morph inexpensive initiatives vis-a-vis installed base bandwidth. Collaboratively leverage existing
                        transparent e-commerce before clicks-and-mortar e-commerce. Conveniently morph progressive scenarios
                        vis-a-vis long-term high-impact strategic theme areas. Objectively impact user friendly users and
                        performance based vortals.
                        Objectively disintermediate fully researched metrics via cooperative markets. Proactively implement
                        superior portals and alternative potentialities. Continually e-enable multifunctional architectures
                        and resource sucking data. Efficiently productivate e-business architectures after maintainable
                        internal or "organic" sources. Efficiently administrate equity invested metrics rather than turnkey
                        networks.
                        Globally cultivate state of the art outsourcing with 24/365 ideas. Globally disintermediate
                        clicks-and-mortar mindshare rather than proactive experiences. Assertively synthesize long-term
                        high-impact processes through premier opportunities. Appropriately utilize extensive core
                        competencies without ethical systems. Dynamically revolutionize superior architectures after
                        scalable "outside the box" thinking.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg mt-5">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="fs-2 fw-bold">
                    The Luxton Cirebon Hotel and Convention
                    <br>
                    <div class="rating-container theme-krajee-svg rating-sm rating-animate">
                        <small class="p-2 rounded text-white me-2" style="background-color: #0F304F">
                            Hotel
                        </small>
                        <div class="rating-stars" tabindex="0"><span class="empty-stars"><span class="star"
                                    title="One Star"><span class="bi-star"></span></span><span class="star"
                                    title="Two Stars"><span class="bi-star"></span></span><span class="star"
                                    title="Three Stars"><span class="bi-star"></span></span><span class="star"
                                    title="Four Stars"><span class="bi-star"></span></span><span class="star"
                                    title="Five Stars"><span class="bi-star"></span></span></span><span class="filled-stars"
                                style="width: 100%;"><span class="star" title="One Star"><span
                                        class="bi-star-fill"></span></span><span class="star" title="Two Stars"><span
                                        class="bi-star-fill"></span></span><span class="star" title="Three Stars"><span
                                        class="bi-star-fill"></span></span><span class="star" title="Four Stars"><span
                                        class="bi-star-fill"></span></span><span class="star" title="Five Stars"><span
                                        class="bi-star-fill"></span></span></span></div>
                    </div>
                    <div class="text-lg fw-normal fs-5">
                        <i class="uil fs-3 text-warning fa-solid fa-city"></i>
                        Cirebon
                        <br>
                        <i class="uil fs-3 text-warning uil-map-marker"></i>
                        Jl. RA.Kartini No.60, Kejaksan, Cirebon
                    </div>
                </h1>
            </div>
            <div class="col-md-4 my-2">
                <font class="fw-bold fs-5 float-end ">
                    Harga/kamar/malam mulai dari
                    <br>
                    <font class="text-danger fs-3 float-end">
                        Rp.880.000
                    </font>
                    <br>
                    <div class="d-grid gap-2 mt-3 w-100">
                        <button class="btn btn-warning text-dark" type="button">
                            <i class="uil fs-5 uil-ticket text-dark"></i> Disc. Card</button>
                    </div>
                </font>
            </div>
            <img src="{{ url('assets/hotel/bg.png') }}" class="img-fluid w-100 h-100" alt="...">
        </div>
        <div class="row my-5">
            <div class="col-md-4 d-flex mb-3 mb-sm-0">
                <div class="card w-100 border-1 mb-5 overflow-hidden">
                    <div class="card-body">
                        <h5 class="card-title fs-4">
                            Fasilitas
                            <button class="btn btn-light float-end me-2" data-bs-toggle="modal"
                                data-bs-target=".bs-example-modal-scrollable">Lihat ></button>
                        </h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3 mb-sm-0">
                <div class="card border-1 mb-5 overflow-hidden">
                    <div class="card-body">
                        <h5 class="card-title fs-4">
                            Tentang Akomodasi
                            <div class="text-lg fw-normal mt-2 fs-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sunt dignissimos sapiente
                                eius autem unde ipsum esse nesciunt provident, sit dolorum rem libero ullam, aperiam et
                                assumenda debitis dolorem dolore!
                            </div>
                        </h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="clearfix mb-5"></div>
@endsection
