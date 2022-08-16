<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>

    {{-- Start of Adding data --}}
    <div class="container py-md-4 py-2">
        <div class="col-md-6 mx-md-auto">
            <form action="{{ url('add/store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 mb-3 d-flex align-items-end bg-gray p-4 rounded-3">
                        <h2>Add Student Data</h2>
                    </div>
                    <div class="col-12 mb-3 d-flex align-items-end bg-gray p-4 rounded-3">
                        <label for="formGroupExampleInput" class="form-label me-md-3 fw-bold">Name</label>
                        <input type="text" name="name" value="abc"
                            class="form-control border-0 border-bottom bg-gray shadow-sm" id="formGroupExampleInput"
                            placeholder="Enter Name">
                    </div>

                    <div class="col-12 mb-3 d-flex align-items-end bg-gray p-4 rounded-3">
                        <label for="formGroupExampleEmail" class="form-label me-md-3 fw-bold">Email</label>
                        <input type="email" name="email" value="abc@gmail.com"
                            class="form-control border-0 border-bottom bg-gray shadow-sm" id="formGroupExampleEmail"
                            placeholder="Enter Email">
                    </div>
                    <div class="col-12 mb-3 d-flex align-items-end bg-gray p-4 rounded-3">
                        <label for="formGroupPassword" class="form-label me-md-3 fw-bold">Password</label>
                        <input type="password" name="password" value="123"
                            class="form-control border-0 border-bottom bg-gray shadow-sm" id="formGroupPassword"
                            placeholder="Enter Password">
                    </div>
                    <div class="col-12 mb-3 d-flex align-items-end bg-gray p-4 rounded-3">
                        <label for="formGroupAddress" class="form-label me-md-3 fw-bold">Address</label>
                        <input type="text" name="address" value="abcde"
                            class="form-control border-0 border-bottom bg-gray shadow-sm" id="formGroupAddress"
                            placeholder="Enter Address">
                    </div>

                    <div class="col-md-4 mx-auto">
                        <div class="text-center">
                            <a href="{{ url('add/store') }}"> <button type="submit"
                                    class="btn btn-dark rounded-3 btn-lg fw-bold w-100 mb-3">Submit</button></a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    {{-- End of Adding data --}}


</body>

</html>