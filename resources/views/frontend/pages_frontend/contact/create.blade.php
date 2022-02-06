@extends('frontend.layouts_frontend.master')

@section('title')

@endsection

@section('content')
<!-- content  -->


<!-- Contact Page Title -->
<section class="contact-page-title"
    style="background-image: url({{ asset('assets/frontend_assets/assets/images/background/17.jpg') }})">
    <div class="auto-container">
        <h1>Hello, Leave us a Messasge!</h1>
    </div>
</section>
<!-- End Contact Page Title -->
<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">

        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <div class="title-box">
                        <h3>We Love To Hear From You</h3>
                        <div class="text">If it's not too much trouble informed us regarding whether you have an
                            inquiry, need to leave a remark, or might want additional data about Advotis</div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf()
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="name" value="" placeholder="Full Name" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="subject" value="" placeholder="Subject" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="phone" value="" placeholder="Phone" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="description" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-five"><span
                                            class="txt">Submit</span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3>Our Office Address</h3>
                    <ul>
                        <li><strong>Address:</strong>
                        Kampala, Uganda
                        </li>
                        <li><strong>Branch:</strong>3
                        Kireka, Central

                        </li>
                        <li><strong>Have any inquiry:</strong>Call us on : +974 3327 1165</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
<!--End Faq Section-->

<!-- Map Section -->
<section class="map-section">
    <!-- Map Boxed -->
    <div class="map-boxed">
        <!--Map Outer-->
        <div class="map-outer">
         

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.758669612809!2d32.57872181513013!3d0.3133065641149206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177db905c213a709%3A0x65794ed5c349e23e!2sKampala%20Road%2C%20Kampala!5e0!3m2!1sen!2sug!4v1642349281025!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
<!-- End Map Section -->


@endsection