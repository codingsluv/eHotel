<div>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Hotel</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">List Hotel</h5>
                                    </div>
                                    <div class="col-6">
                                        <a wire:navigate href="/hotel/create" class="btn btn-sm btn-primary float-end">Create Hotel</a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Stars</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Check In Time</th>
                                        <th scope="col">Check Out Time</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hotels as $h)
                                        <tr>
                                            <td>{{ $h->name }}</td>
                                            <td>{{ $h->address }}</td>
                                            <td>{{ $h->stars }}</td>
                                            <td>{{ $h->phone }}</td>
                                            <td>{{ $h->email }}</td>
                                            <td>{{ $h->check_in_time }}</td>
                                            <td>{{ $h->check_out_time }}</td>
                                            <td>
                                                <a wire:navigate href="#" class="btn btn-sm btn-info">Edit</a>
                                                <a wire:navigate href="#" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>
