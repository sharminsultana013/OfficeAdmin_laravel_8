@extends('Admin.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">New Messages</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <button class="btn btn-primary" type="submit"><a href=""
                                                title="Archive">
                                                <i class="fas fa-arrow-circle-down"
                                                    style="color: white;"></i>
                                            </a></button>
                                        <button class="btn btn-danger" type="submit"><a href=""
                                                title="delete">
                                                <i class="far fa-trash-alt" style="color: white;"></i>
                                            </a></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>
                                        <button class="btn btn-primary" type="submit"><a href=""
                                                title="Archive">
                                                <i class="fas fa-arrow-circle-down"
                                                    style="color: white;"></i>
                                            </a></button>
                                        <button class="btn btn-danger" type="submit"><a href=""
                                                title="Delete">
                                                <i class="far fa-trash-alt" style="color: white;"></i>
                                            </a></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>
                                        <button class="btn btn-primary" type="submit"><a href=""
                                                title="Archive">
                                                <i class="fas fa-arrow-circle-down"
                                                    style="color: white;"></i>
                                            </a></button>
                                        <button class="btn btn-danger" type="submit"><a href=""
                                                title="Delete">
                                                <i class="far fa-trash-alt" style="color: white;"></i>
                                            </a></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>
                                        <button class="btn btn-primary" type="submit"><a href=""
                                                title="Archive">
                                                <i class="fas fa-arrow-circle-down"
                                                    style="color: white;"></i>
                                            </a></button>
                                        <button class="btn btn-danger" type="submit"><a href=""
                                                title="Delete">
                                                <i class="far fa-trash-alt" style="color: white;"></i>
                                            </a></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Archived Message</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit"><a href=""
                                                    title="Unarchive">
                                                    <i class="fas fa-arrow-circle-up"
                                                        style="color: white;"></i>
                                                </a></button>
                                            <button class="btn btn-danger" type="submit"><a href=""
                                                    title="Delete">
                                                    <i class="far fa-trash-alt" style="color: white;"></i>
                                                </a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit"><a href=""
                                                    title="Unarchive">
                                                    <i class="fas fa-arrow-circle-up"
                                                        style="color: white;"></i>
                                                </a></button>
                                            <button class="btn btn-danger" type="submit"><a href=""
                                                    title="Delete">
                                                    <i class="far fa-trash-alt" style="color: white;"></i>
                                                </a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit"><a href=""
                                                    title="Unarchive">
                                                    <i class="fas fa-arrow-circle-up"
                                                        style="color: white;"></i>
                                                </a></button>
                                            <button class="btn btn-danger" type="submit"><a href=""
                                                    title="Delete">
                                                    <i class="far fa-trash-alt" style="color: white;"></i>
                                                </a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit"><a href=""
                                                    title="Unarchive">
                                                    <i class="fas fa-arrow-circle-up"
                                                        style="color: white;"></i>
                                                </a></button>
                                            <button class="btn btn-danger" type="submit"><a href=""
                                                    title="Delete">
                                                    <i class="far fa-trash-alt" style="color: white;"></i>
                                                </a></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
    
@endsection