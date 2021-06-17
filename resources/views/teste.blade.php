<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Pagina de teste</title>
</head>

<body>

    <div class="d-flex">
        <div class="dropdown me-1">
            <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                Offset
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-secondary">Reference</button>
            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
    </div>


    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltipUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                </div>
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationTooltip03" required>
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Item</label>
            <select class="form-select" id="validationTooltip04" required>
                @if($insumos->count())
                @foreach($insumos as $insumos)
                <option value="{{$insumos->nome}}">{{$insumos->nome}}</option>+
                @endforeach

                @else
                <option selected disabled value="">Sem registro</option>
                @endif

            </select>
            <div class="invalid-tooltip">
                Please select a valid state.
            </div>
        </div>
        <div class="col-md-3 position-relative">
            <label for="validationTooltip05" class="form-label">Zip</label>
            <input type="text" class="form-control" id="validationTooltip05" required>
            <div class="invalid-tooltip">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
