@extends('frontend.layouts_frontend.master')

@section('title')

@endsection

@section('content')
<!-- content  -->


<!-- Contact Page Title -->
<section class="contact-page-title text-center"
    style="background-image: url({{ asset('assets/frontend_assets/assets/images/background/17.jpg') }})">
    <div class="auto-container text-center">
        <h1>Book with us !</h1>
    </div>
</section>
<!-- End Contact Page Title -->
<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Info Column -->
            <div class="info-column col-lg-2 col-md-12 col-sm-12" style="visibility: hidden;">

            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
            
                <div class="inner-column">
                @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="title-box">
                        <h3 class="text-center">Have something you need ?</h3>
                        <div class="text text-center">
                            Let us know what we can prepare for you !
                        
                        
                        </div>
                    </div>

                    <!-- Contact Form -->
                   

                    <div class="contact-form">
                        <form method="post" action="{{ route('book.store') }}" id="contact-form">
                            @csrf()
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="fullname" value="" placeholder="Full Name" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="phone" value="" placeholder="Phone" required>
                                </div>

                                <!-- status -->
                                <div class="col-md-1" hidden>
                                    <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Status</label>

                                    <select name="status" class="form-select">
                                        
                                            <option value="pending" selected >Pending</option>
                                            <option value="processing">Processing</option>
                                            <option value="completed">Completed</option>
                                            
                                    </select>


                                    </div>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="description" placeholder="Enter Booking Details"></textarea>
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
            <div class="info-column col-lg-2 col-md-12 col-sm-12" style="visibility: hidden;">

            </div>

        </div>

    </div>
</section>
<!--End Faq Section-->

@endsection