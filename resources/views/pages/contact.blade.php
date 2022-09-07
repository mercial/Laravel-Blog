@extends('main')
@section('title', ' | Связаться со мной')
@section('header')
    <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Контакты</h1>
                    <span class="subheading">Связаться со мной</span>
                </div>
            </div>
        </div>
    </div>
    </header>
@endsection
@section('content')


        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Хотите связаться со мной? Оставьте сообщение в форме ниже, и я вам напишу или перезвоню</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Введите своё имя" data-sb-validations="required" />
                                    <label for="name">Имя</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Ввести имя обязательно.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email адрес</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Ввести Email обязательно.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email неверно введён.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" placeholder="Введите Ващ номер телефона" data-sb-validations="required" />
                                    <label for="phone">Телефон</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Телефонный номер обязательный.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Ваше сообщение</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Ввести сообщение обязательно.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Сообщение успешно отправлено</div>
                                        В скором времени я с Вами свяжусь
                                        <br />
                                        С уважиением, <a href="https://vk.com/mercial">Владислав Озоровский</a>
                                    </div>
                                </div>
                                <!-- То что пользователь увидит-->
                                <!-- при ошибках отправки-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Ошибка при отправке сообщения!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
