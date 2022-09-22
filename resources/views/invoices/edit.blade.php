@extends('layouts.app')
@section('content')

    <!-- Contact Section-->
    <section class=" masthead page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytujesz fakturę {{$invoice->id}}</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form action = {{route('invoices.update', ['id'=> $invoice->id])}} method= "post" id="contactForm" >
                        {{ csrf_field() }}
                        @method('put')
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input value= {{$invoice->number}} class="form-control" id="number" name="number" type="text" placeholder="Numer faktury" required="required"  data-validation-required-message="brak potrzebnych danych"/>
                            <label for="name">Numer</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input  value= {{$invoice->date}} class="form-control" id="date" type="text" name="date" placeholder="data wystawienia" required="required" data-validation-required-message="brak potrzebnych danych" />
                            <label for="email">Data</label>

                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input value= {{$invoice->total}} class="form-control" id="total" type="text" name="total" placeholder="kwota faktury" required="required"  data-validation-required-message="brak potrzebnych danych"/>
                            <label for="phone">Kwota</label>
                                           </div>

                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        {{-- <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div> --}}
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        {{-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> --}}
                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Wyślij</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

