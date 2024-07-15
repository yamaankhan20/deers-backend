@extends('backend.partials.master')
@section('content')
    <div class="content">
<section class="secDashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-2">
                @include('backend.partials.sidebar')
            </div>
            <div class="col-12 col-md-10">
                <div class="add_member bg_shade">
                    <div class="top_add">
                        <a href="javascript:;" class="btn_back">
                            <img src="{{asset('dashboard_assets/images/icon_left.png')}}" alt="">
                        </a>
                        <div class="ext">
                            <h2 class="sec_head ft_oswlad">Add Departments</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                        <a href="javascript:;" class="btn_custom">Add  New Department</a>
                    </div>
                    <div class="add_form">
                        <form action="" class="form" autocomplete="off">
                            <div class="row">
                                <div class="col-12">
                                    <div class="field">
                                        <label for="dept_name">Department Name</label>
                                        <input type="text" class="form-control" id="dept_name" name="dept_name" placeholder="Department">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field drop_down">
                                        <label for="department">Select City</label>
                                        <select class="form-control" name="department" id="department">
                                            <option value="" disabled selected>Select</option>
                                            <option value="">New York</option>
                                            <option value="">New Jersey</option>
                                            <option value="">California</option>
                                            <option value="">Lorem Ipsum</option>
                                            <option value="">Lorem Ipsum</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field address">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Complete address">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="+012 345 6789" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field d-flex">
                                        <p>Status</p>
                                        <label class="switch">
                                            <input class="toggleButton" type="checkbox" checked>
                                            <span class="slider round"></span>
                                            <span class="text">Active</span>
                                        </label>
                                        <input type="submit" name="submit" class="btn_submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
@endsection
