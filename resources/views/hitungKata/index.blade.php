@extends('layouts.base')
@section('script')
    <script src="js/hitung.js"></script>
@endsection
    

@section('content')
<div class="col-7">
    @include('hitungKata.components.header')
</div>
    
    
    <!--FORM HITUNG KATA-->
    <section class="mb-5 pt-5" id="form-hitung">
        <div class="container col-md-7 pt-0 pt-5">
            <h1 class="text-white">Hitung Kata</h1>
            <p class="text-white fs-5">Menghitung banyaknya jumlah kata dalam sebuah kalimat atau paragraph.</p>

            <div class="row col-md-12 bg-black-secondary shadow border-r-sip mx-1 py-3 py-xl-4 px-3 px-xl-5">

                <div class="nopadding">
                    <label for="isi" class="form-label text-white fs-5">Masukan disini kalimat/paragraph yang ingin dihitung </label>
                    <textarea class="form-control bg-dark text-white" placeholder="input here!" id="isi" rows="5" name="isiKonten" required></textarea>
                </div>

                <button class="btn bg-yellow-special my-3 text-white fs-4 fw-bold" id="submit">Hitung</button>
                <a type="button" class="btn btn-outline-danger" href="../hitungKata">Reset</a>
                <div class="text-white bg-dark rounded-3 mt-3 p-3 d-none" id="hasil">
                    <p id="duplicate-isi"></p>

                    <table class="fs-3">
                        <tr>
                            <td class="pe-5">Jumlah Huruf</td>
                            <td>=</td>
                            <td class="fw-bold" id="jumlah-huruf"></td>
                        </tr>
                        <tr>
                            <td class="pe-5">Jumlah Kata</td>
                            <td>=</td>
                            <td class="fw-bold" id="jumlah-kata"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--END OF HITUNG KATA-->


    <div class="col-lg-7 mx-auto">
        @include('components.footer')
    </div>
@endsection