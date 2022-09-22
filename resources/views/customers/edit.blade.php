@extends('layouts.app')
@section('content')

    <!-- Contact Section-->
    <section class=" masthead page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytujesz klienta {{$customer->id}}</h2>
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
                    <form action = {{route('customers.update', ['customer'=> $customer->id])}} method= "post" id="contactForm" >
                        {{ csrf_field() }}
                        @method('put')
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input value= {{$customer->name}} class="form-control" id="name" name="name" type="text" placeholder="Nazwa klienta" required="required"  data-validation-required-message="brak potrzebnych danych"/>
                            <label for="name">Nazwa</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input  value= {{$customer->address}} class="form-control" id="address" type="text" name="address" placeholder="adres klienta" required="required" data-validation-required-message="brak potrzebnych danych" />
                            <label for="email">Adres</label>

                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input value= {{$customer->nip}} class="form-control" id="nip" type="integer" name="nip" placeholder="numer nip" required="required"  data-validation-required-message="brak potrzebnych danych"/>
                            <label for="phone">NIP</label>
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

