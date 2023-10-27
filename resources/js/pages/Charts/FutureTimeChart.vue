<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Future Time Charts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">
                            Future Time Charts
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
            <div class="card my-4 p-3">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">
                            <label for="from">From</label>
                        </p>
                        <input type="text" id="from" class="form-control" />
                    </div>
                    <div class="col-sm-3">
                        <p class="mb-0">
                            <label for="to">To</label>
                        </p>
                        <input
                            type="text"
                            name="to"
                            id="to"
                            class="form-control"
                        />
                    </div>
                    <div class="col-sm-3 mt-4">
                        <select name="time" id="time" class="form-control mt-1">
                            <option value="1">Last 30 days</option>
                            <option value="2">Last month</option>
                            <option value="3">Last year</option>
                            <option value="4">This month</option>
                            <option value="5">This year</option>
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
