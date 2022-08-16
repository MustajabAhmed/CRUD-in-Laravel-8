<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
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
    <div class="container px-md-5">
        <div class="row flex-md-row flex-column-reverse justify-content-between">
            <div class="col-md-3 mb-md-0 text-md-start text-center">
                <a href="{{ url('/add') }}" class="btn btn-primary rounded-pill"><i
                        class="fa-solid fa-plus me-2 bg-dark text-white rounded"></i><span class="fw-bold">
                        {{ __('Add User') }}</span></a>
            </div>

            <div class="col-md-3 input-group w-25 border rounded-pill px-3 mb-2">
                <div class="input-group-text border-0 bg-white"><i class="fa-solid fa-magnifying-glass"></i></div>
                <form action="{{ url('search') }} " method="get">
                    <input type="search" name="search" class="form-control border-0 px-0 bg-white"
                        id="autoSizingInputGroup" placeholder="Search">
                </form>
            </div>
        </div>

        {{-- table --}}
        <div class="table-responsive">
            <table class="table table-striped mt-md-5 mt-3">
                <thead class="bg-dark text-white">
                    <tr>
                        <th class="text-center">{{ __('Id') }}</th>
                        <th class="text-start">{{ __('Name') }}</th>
                        <th class="text-start">{{ __('Email') }}</th>
                        <th class="text-start">{{ __('Password') }}</th>
                        <th class="text-start">{{ __('Address') }}</th>
                        <th class="text-start">{{ __('Edit') }}</th>
                        <th class="text-start">{{ __('Delete') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $student)
                    <tr class="border-bottom-black">
                        <td class="text-center">{{ $student->id }}</td>
                        <td class="text-start">{{ $student->name }}</td>
                        <td class="text-start">{{ $student->email }}</td>
                        <td class="text-start">{{ $student->password }}</td>
                        <td class="text-start">{{ $student->address }}</td>
                        <td class="text-start">
                            <a href="{{ url('edit/'.$student->id) }}"> <button type="button"
                                    class="border-0 bg-light rounded"><i class="btn btn-secondary">Edit</i></button></a>
                        </td>
                        <td class="text-start">
                            <a href="{{ url('delete/'.$student->id) }}"> <button type="button"
                                    class="border-0 bg-light rounded"><i class="btn btn-danger">Delete</i></button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>

</html>