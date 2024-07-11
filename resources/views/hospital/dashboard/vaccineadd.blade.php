
@extends('hospital/dashboard/master')

@section("vaccineadd-main-content")
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
                 
                    <form class="form-control" action="{{route('vaccineadd.post')}}" method="post">
                            @csrf
                            <div class="inputVaccinaeName">
                                <label for="">Vaccine Name</label>
                                <input class="form-control"  name="vaccine_name"  type="text" placeholder="Vaccine Name">
                            </div>    
                            <div class="inputQuatity mt-3">
                            <label for="">Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}" required>
                                @error('quantity')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <button class=" mt-3 btn btn-primary">Sumbit</button>

                        </form>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
 @endsection