<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Debts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Debts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
            <div class="card p-3">
                <div class="text-left ml-2 row">
                    <b> Debts: </b>
                    <p>
                        <span class="mx-2">Frank</span>
                        <i class="fas fa-arrow-right"></i>
                        <span class="ml-2">You</span>
                    </p>
                </div>
                <div class="d-flex justify-content my-1">
                    <div
                        class="d-flex justify-content-center align-items-center mx-2"
                    >
                        <img
                            src="https://webapp.fastbudget.app/static/icons/ic_cash_debt.svg"
                            alt="entertainment"
                            width="48"
                            height="48"
                        />
                    </div>
                    <div class="d-block w-100">
                        <div class="d-flex justify-content-between mx-3">
                            <div>
                                <span>12/10/2023</span>
                            </div>
                            <div class="ml-4"><span>16%</span></div>
                            <div><span>30/10/2023</span></div>
                        </div>
                        <div class="progress mx-4">
                            <div
                                class="progress-bar bg-danger"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <div class="d-flex justify-content-between mx-3">
                            <div>
                                <span>$0.00</span>
                            </div>
                            <div><span>$8.00</span></div>
                            <div><span>$30</span></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="float-left mx-3">
                        <div>
                            Residual amount:
                            <span class="text-danger"> -$200.00</span>
                        </div>
                    </div>
                    <div class="float-right">
                        <button class="btn">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn">
                            <i class="fas fa-pen"></i>
                        </button>
                        <button class="btn">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="text-left ml-2 row">
                    <b> Debts: </b>
                    <p>
                        <span class="mx-2">You</span>
                        <i class="fas fa-arrow-right"></i>
                        <span class="ml-2">Sam</span>
                    </p>
                </div>
                <div class="d-flex justify-content my-1">
                    <div
                        class="d-flex justify-content-center align-items-center mx-2"
                    >
                        <img
                            src="https://webapp.fastbudget.app/static/icons/ic_cash_credit.svg"
                            alt="entertainment"
                            width="48"
                            height="48"
                        />
                    </div>
                    <div class="d-block w-100">
                        <div class="d-flex justify-content-between mx-3">
                            <div>
                                <span>12/10/2023</span>
                            </div>
                            <div class="ml-4"><span>16%</span></div>
                            <div><span>30/10/2023</span></div>
                        </div>
                        <div class="progress mx-4">
                            <div
                                class="progress-bar bg-danger"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <div class="d-flex justify-content-between mx-3">
                            <div>
                                <span>$0.00</span>
                            </div>
                            <div><span>$8.00</span></div>
                            <div><span>$30</span></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="float-left mx-3">
                        <div>
                            Residual amount:
                            <span class="text-success"> $30.00</span>
                        </div>
                    </div>
                    <div class="float-right">
                        <button class="btn">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn">
                            <i class="fas fa-pen"></i>
                        </button>
                        <button class="btn">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="border-top mx-3"></div>
                <div class="d-flex justify-content-between my-2 mx-3">
                    <div class="float-left">
                        Residual amount (Total):
                        <span class="text-danger">-$170.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
