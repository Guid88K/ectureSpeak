@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
            <!-- blok_one------------------------------------------------------ -->








            <!-- blok_two------------------------------------------------------ -->
            <div class="col-md-12 col-sm-12 my-5">
                <form action="{{ route('osob.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    <div class="cart_new p-3 blok_two ">
                        <div class="row">

                            <div class="col-md-6 col-sm-12 ">
                                <div class="ps-md-5 ps-md-1">
                                    <h2 class="text-primary">Особистий кабінет</h2>
                                    <span class="text-secondary">Загальна інформація</span>
                                </div>

                                <div class="upload-file__wrapper d-flex justify-content-center mt-5  pt-3"
                                    style="background">
                                    <input type="file" name="file" id="upload-file__input_1" class="upload-file__input"
                                        accept=".jpg, .jpeg, .png">
                                    <label class="upload-file__label justify-content-center" for="upload-file__input_1">

                                        <span class="upload-file__text">Клацніть тут</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">

                                <div class="row my-2">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Ім'я:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" class="form-control rounded-pill border border-primary"
                                            id="exampleInputEmail1" name="name" value="{{ $user->name }}"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row my-2 mb-5">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Фамілія:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" class="form-control rounded-pill border border-primary"
                                            id="exampleInputEmail1" name="surname" value="{{ $user->surname }}"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Предмет:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">

                                        <select class="form-select form-control rounded-pill border border-primary"
                                            name="category" aria-label="Default select example">
                                            <option>Виберіть ваш предмет</option>
                                            <option {{ $user->category == 'Історія' ? 'selected' : '' }} value="Історія">
                                                Історія</option>
                                            <option {{ $user->category == 'Хімія' ? 'selected' : '' }} value="Хімія">
                                                Хімія</option>
                                            <option {{ $user->category == 'Математика' ? 'selected' : '' }}
                                                value="Математика">Математика</option>
                                            <option {{ $user->category == 'Географія' ? 'selected' : '' }}
                                                value="Географія">Географія </option>
                                            <option {{ $user->category == 'Фізика' ? 'selected' : '' }} value="Фізика">
                                                Фізика</option>
                                            <option {{ $user->category == 'Біологія' ? 'selected' : '' }}
                                                value="Біологія">Біологія</option>
                                            <option {{ $user->category == 'Мистецтво' ? 'selected' : '' }}
                                                value="Мистецтво">Мистецтво</option>
                                        </select>



                                    </div>
                                </div>


                                <div class="row my-2">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Заклад:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" name="work_place" value="{{ $user->work_place }}"
                                            class="form-control rounded-pill border border-primary" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">
                                            Місто:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" class="form-control rounded-pill border border-primary"
                                            name="town" value="{{ $user->town }}" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row my-2 mb-5">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Країна:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" name="country" value="{{ $user->country }}"
                                            class="form-control rounded-pill border border-primary" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row my-2 ">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Електронна
                                            адреса:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" name="email" value="{{ $user->email }}"
                                            class="form-control rounded-pill border border-primary" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row my-2 mb-5">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Пароль:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" name="password" class="form-control rounded-pill border border-primary @error('password') is-invalid
                                                    @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>






                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary rounded-pill">Підтвердити</button>
                                </div>
                            </div>



                        </div>


                    </div>





                </form>

            </div>


            <!-- blok_three------------------------------------------------------------- -->


        </div>
    </div>
@endsection
