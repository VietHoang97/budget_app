<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Credit Card</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Credit Card</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
            <div class="card my-4">
                <div class="text-right my-2 mx-4">
                    <span>Amount due:</span>
                    <span class="text-danger">-$244.34</span>
                </div>
            </div>
            <div class="card my-3">
                <div class="text-left my-2 mx-4">
                    <span>Credit card</span>
                </div>
                <div class="d-flex justify-content-between mx-4">
                    <div>
                        <span>12/10/2023</span>
                    </div>
                    <div><span>16%</span></div>
                    <div><span>30/10/2023</span></div>
                </div>
                <div class="progress mx-4">
                    <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 25%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    ></div>
                </div>
                <div class="d-flex justify-content-between my-2 mx-4">
                    <div class="float-left">
                        <div>
                            Limit:
                            <span> $1,000.00</span>
                        </div>
                        <div>
                            Residual amount:
                            <span> $845.00</span>
                        </div>
                        <div>
                            Amount due:
                            <span> $249.00</span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="text-right mt-2">
                            <span class="text-danger">-$155.00</span>
                        </div>
                        <button class="btn">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn">
                            <i class="far fa-money-bill-alt"></i>
                        </button>
                        <button class="btn">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                        <div class="btn-group">
                            <button
                                type="button"
                                class="btn"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Edit Account</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Delete Account</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
