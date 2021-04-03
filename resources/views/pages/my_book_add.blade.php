@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
            <!-- blok_one------------------------------------------------------ -->








            <!-- blok_two------------------------------------------------------ -->
            <div class="col-md-12 col-sm-12 my-5">
                <form action="{{ route('my_book.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="cart_new p-3 py-5 blok_two ">
                        <div class="row">

                            <div class="col-md-12 col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="currentColor"
                                        class="bi bi-cloud-arrow-down mx-2 text-primary" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z" />
                                        <path
                                            d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                    </svg>
                                    <h2 class="text-primary">Завантажити нову книгу</h2>

                                </div>






                            </div>



                            <div class="col-md-12 col-sm-12">

                                <div class="row my-3">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Назва:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" class="form-control rounded-pill border border-primary"
                                            id="exampleInputEmail1" name="name_post" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row my-3 ">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Книга:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input class="form-control rounded-pill border border-primary" type="file"
                                            name="file" id="formFile"
                                            accept="">

                                    </div>
                                </div>

                                <div class="row my-3 ">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Обложка:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input class="form-control rounded-pill border border-primary" name="f_file"
                                            type="file" id="formFile"
                                            accept=".jpg, .jpeg, .png, .gif, .bmp, .doc, .docx, .xls, .xlsx, .txt, .tar, .zip, .7z, .7zip">

                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Предмет:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">

                                        <select class="form-select form-control rounded-pill border border-primary"
                                            name="category_post" aria-label="Default select example">
                                            <option selected>Виберіть ваш предмет</option>
                                            <option value="Історія">Історія</option>
                                            <option value="Хімія">Хімія</option>
                                            <option value="Математика">Математика</option>
                                            <option value="Географія">Географія </option>
                                            <option value="Фізика">Фізика</option>
                                            <option value="Біологія">Біологія</option>
                                            <option value="Мистецтво">Мистецтво</option>
                                        </select>



                                    </div>
                                </div>


                                <div class="row my-3">
                                    <div class="col-md-4 col-sm-12"><span class="text-primary">Автор:</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" name="autor"
                                            class="form-control rounded-pill border border-primary" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>











                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary rounded-pill">Опублікувати</button>
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
