@extends('client.layouts.layout')

@section('title')
    <title>Global Apparel Garment Buyers Contacts at ApparelImportersData.com</title>
@endsection

@section('metta')
    <meta name="description" content="An ISO 9001:2015 Certified Company" />
    <meta name="google-site-verification" content="Hz6qT2wnuYPGtIv9NAoMFLeKd6vHhRs8sKz76gVPrPE" />
    <meta name="keywords" content="apparel buyers,garment importers,sports wear importers russia,casual garments buyers,multicountries garment buyers,apparel importers worldwide,european kids wear buyers contacts,usa tshirt buyers,uk mens wear importers,europe tshirt buyers,ethnic apparels buyers" />
    @endsection

    <style>
        /* Styles for dialog window */
    #small-dialog {
        background: white;
        padding: 5px;
        max-width: 750px;
        margin: 40px auto;
        position: relative;
    }

    div#small-dialog iframe {
        width: 100%;
        height: 400px;
        display: block;
    }

        .w3l-about1 .new-block {
            background-size: cover;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.57), rgba(0, 0, 0, 0.33)), url("{{asset('assets/client/images/shared-bg.jpg')}}");
            background-repeat: no-repeat, no-repeat, no-repeat;
            background-position: center;
            background-attachment: fixed;
            min-height: calc(100vh - 0px);
            display: grid;
            align-items: center;
            padding: 2rem 0; }


    /**
 * Fade-zoom animation for first dialog
 */

    /* start state */
    .my-mfp-zoom-in .zoom-anim-dialog {
        opacity: 0;

        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;



        -webkit-transform: scale(0.8);
        -moz-transform: scale(0.8);
        -ms-transform: scale(0.8);
        -o-transform: scale(0.8);
        transform: scale(0.8);
    }

    /* animate in */
    .my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
        opacity: 1;

        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
    }

    /* animate out */
    .my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
        -webkit-transform: scale(0.8);
        -moz-transform: scale(0.8);
        -ms-transform: scale(0.8);
        -o-transform: scale(0.8);
        transform: scale(0.8);

        opacity: 0;
    }

    /* Dark overlay, start state */
    .my-mfp-zoom-in.mfp-bg {
        opacity: 0;
        -webkit-transition: opacity 0.3s ease-out;
        -moz-transition: opacity 0.3s ease-out;
        -o-transition: opacity 0.3s ease-out;
        transition: opacity 0.3s ease-out;
    }

    /* animate in */
    .my-mfp-zoom-in.mfp-ready.mfp-bg {
        opacity: 0.8;
    }

    /* animate out */
    .my-mfp-zoom-in.mfp-removing.mfp-bg {
        opacity: 0;
    }



    /**
 * Fade-move animation for second dialog
 */

    /* at start */
    .my-mfp-slide-bottom .zoom-anim-dialog {
        opacity: 0;
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;

        -webkit-transform: translateY(-20px) perspective(600px) rotateX(10deg);
        -moz-transform: translateY(-20px) perspective(600px) rotateX(10deg);
        -ms-transform: translateY(-20px) perspective(600px) rotateX(10deg);
        -o-transform: translateY(-20px) perspective(600px) rotateX(10deg);
        transform: translateY(-20px) perspective(600px) rotateX(10deg);

    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
        opacity: 1;
        -webkit-transform: translateY(0) perspective(600px) rotateX(0);
        -moz-transform: translateY(0) perspective(600px) rotateX(0);
        -ms-transform: translateY(0) perspective(600px) rotateX(0);
        -o-transform: translateY(0) perspective(600px) rotateX(0);
        transform: translateY(0) perspective(600px) rotateX(0);
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
        opacity: 0;

        -webkit-transform: translateY(-10px) perspective(600px) rotateX(10deg);
        -moz-transform: translateY(-10px) perspective(600px) rotateX(10deg);
        -ms-transform: translateY(-10px) perspective(600px) rotateX(10deg);
        -o-transform: translateY(-10px) perspective(600px) rotateX(10deg);
        transform: translateY(-10px) perspective(600px) rotateX(10deg);
    }

    /* Dark overlay, start state */
    .my-mfp-slide-bottom.mfp-bg {
        opacity: 0;

        -webkit-transition: opacity 0.3s ease-out;
        -moz-transition: opacity 0.3s ease-out;
        -o-transition: opacity 0.3s ease-out;
        transition: opacity 0.3s ease-out;
    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready.mfp-bg {
        opacity: 0.8;
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing.mfp-bg {
        opacity: 0;
    }
</style>

@section('contents')
    <section class="w3l-about1">
        <div class="new-block top-bottom">
            <div class="container">
                <div class="middle-section">
                    <!-- <h5>Tagline</h5> -->
                    <div class="section-width">
                        <h2>True and Precise Information is what sets us apart from the crowd.</h2>
                    </div>
                    <div class="link-list-menu">
                        <p>We are committed to giving our subscribers a unique experience that is guaranteed to see them through success. Every data in our database is properly checked before it is fed into our website. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-about2">
        <div class="features-main py-5">
            <div class="container py-lg-3">
                <h3 class="stat-title">Great for Exporters Looking for Building Brand Image</h3>
                <div class="row features">
                    <div class="col-md-4 feature-1 mt-5">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span>75+</span>
                            </div>
                            <div class="feature-info mt-4">
                                <h3 class="feature-titel my-2">Countries</h3>
                                <p class="feature-text">We cover every importer from across the world. Information is segregated: country wise, item wise, and product wise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 feature-2 mt-5">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span>5000+</span>
                            </div>
                            <div class="feature-info mt-4">
                                <h3 class="feature-titel my-2">Importers</h3>
                                <p class="feature-text">Our emphasis is always on importers who have good reputation and are active in the import trade.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 feature-3 mt-5">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span>100%</span>
                            </div>
                            <div class="feature-info mt-4">
                                <h3 class="feature-titel my-2">Satisfaction </h3>
                                <p class="feature-text">Our database is designed to be information rich and offers a unique experience. In other words our prime objective is to ensure satisfaction. </p>
                                <div class="hover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-about5">
        <div class="py-5">
            <div class="container py-lg-3">
                <div class="heading text-center mx-auto">
                    <h3 class="head">Market Solutions for Enhanced Business Achievement </h3>
                    <p class="my-3 head"> With our database you are assured of access to a privileged class of information that will take you miles ahead of the competitors.  </p>
                </div>
                <div class="history-info mt-5">
                    <div class="position-relative">
                        <!-- /popup -->


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
