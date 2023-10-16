<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Forecast Charts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Forecast Charts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
            <div class="card my-4 p-3">
                <div class="row mb-3">
                    <div class="col-sm-3">Type:</div>
                    <div class="col-sm-3 ml-1">Regression</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 d-flex align-items-center">
                        Period:
                    </div>
                    <div class="col-sm-8 p-0">
                        <div class="form-check">
                            <input type="radio" name="month" id="month" />
                            <label for="month">Mounths</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="month" id="month" />
                            <label for="month">Days</label>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-sm-3 d-flex align-items-center">
                        Number of periods:
                    </div>
                    <div class="col-sm-3 form-check">
                        <select name="time" id="time" class="form-control mt-1">
                            <option value="3">3</option>
                            <option value="6">6</option>
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-sm-3 d-flex align-items-center">
                        Account
                    </div>
                    <div class="col-sm-6">
                        <select
                            name="account"
                            id="account"
                            class="form-control"
                        >
                            <option value="">All account</option>
                            <option value="1" class="row">
                                <div class="text-left col-6">Credit Card</div>
                                <div class="text-right">-$155.00</div>
                            </option>
                            <option
                                value="1"
                                class="d-flex justify-content-between"
                            >
                                <div class="text-left">Wallet</div>
                                <div class="text-right">$95.00</div>
                            </option>
                            <option
                                value="1"
                                class="d-flex justify-content-between"
                            >
                                <div class="text-left">Bank Account</div>
                                <div class="text-right">$19,355.00</div>
                            </option>
                        </select>
                    </div>
                </div>
                <div class="text-right">
                    <button class="btn btn-primary">SHOW REPORT</button>
                </div>
            </div>
        </div>
    </div>
</template>
