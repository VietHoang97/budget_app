<template>
    <div class="postion-relative">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <div class="card p-3">
                            <div>Summary</div>
                            <div class="d-flex justify-content-between m-1">
                                <div>Balance:</div>
                                <div class="text-success">$13,627.71</div>
                            </div>
                            <div class="d-flex justify-content-between m-1">
                                <div>Credit Card:</div>
                                <div class="text-danger">-$249</div>
                            </div>
                            <div class="d-flex">
                                <div class="col-7"></div>
                                <hr class="col my-1" />
                            </div>
                            <div class="text-right text-success m-1">
                                $13,278.71
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">This month</div>
                            <div class="card-body">
                                <div class="col-sm-5">bieu do</div>
                                <div class="col-sm-2">icon</div>
                                <div class="col-sm-5">calculator</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">Last month</div>
                            <div class="card-body">
                                <div class="col-sm-5">bieu do</div>
                                <div class="col-sm-2">icon</div>
                                <div class="col-sm-5">calculator</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>Account</div>
                                    <div class="option">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>Wallet</div>
                                    <div class="currency">
                                        <div class="text-success">$90</div>
                                        <div>USD - $</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>Bank account</div>
                                    <div class="currency">
                                        <div class="text-success">$135</div>
                                        <div>USD - $</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>Credit Cards</div>
                                    <div class="option">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>Credit Card</div>
                                    <div class="currency">
                                        <div class="text-success text-right">
                                            $90
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-11">
                                        <div class="progress">
                                            <div
                                                class="progress-bar bg-success"
                                                role="progressbar"
                                                style="width: 25%"
                                                aria-valuenow="25"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 p-0 text-right">
                                        16%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>Last 7 days</div>
                                    <div class="option">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">bieu do</div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <b>Cash flow (Transactions)</b>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>bieu do</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>Balance</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>Bieu do</div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="d-flex justify-content-between mb-2">
                                <div><b>Debts / Credits</b></div>
                                <div class="option">
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </div>
                            <div class="d-flex text-left">
                                <span> Debts: </span>
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
                                    <div
                                        class="d-flex justify-content-between mx-3"
                                    >
                                        <div>
                                            <span>12/10/2023</span>
                                        </div>
                                        <div class="ml-4">
                                            <span>16%</span>
                                        </div>
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
                                    <div
                                        class="d-flex justify-content-between mx-3"
                                    >
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
                                        <span class="text-danger">
                                            -$200.00</span
                                        >
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
                            <div class="d-flex text-left">
                                <span> Debts: </span>
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
                                    <div
                                        class="d-flex justify-content-between mx-3"
                                    >
                                        <div>
                                            <span>12/10/2023</span>
                                        </div>
                                        <div class="ml-4">
                                            <span>16%</span>
                                        </div>
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
                                    <div
                                        class="d-flex justify-content-between mx-3"
                                    >
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
                                        <span class="text-success">
                                            $30.00</span
                                        >
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
                        </div>
                        <div class="card p-3">
                            <div class="d-flex justify-content-between">
                                <div><b>Budgets</b></div>
                                <div class="option">
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </div>
                            <div class="mx-3 my-1">
                                <div>Entertainment</div>
                                <div class="d-flex justify-content my-1">
                                    <div
                                        class="d-flex justify-content-center align-items-center"
                                    >
                                        <img
                                            src="https://webapp.fastbudget.app/static/icons/ic_party_hat.svg"
                                            alt="entertainment"
                                            width="48"
                                            height="48"
                                        />
                                    </div>
                                    <div class="d-block w-100">
                                        <div
                                            class="d-flex justify-content-between mx-3"
                                        >
                                            <div>
                                                <span>12/10/2023</span>
                                            </div>
                                            <div class="ml-4">
                                                <span>16%</span>
                                            </div>
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
                                        <div
                                            class="d-flex justify-content-between mx-3"
                                        >
                                            <div>
                                                <span>$0.00</span>
                                            </div>
                                            <div><span>$8.00</span></div>
                                            <div><span>$30</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-transparent">
                            <div class="d-flex justify-content-center my-3">
                                <div
                                    class="border rounded-circle text-center d-flex align-items-center justify-content-center bg-secondary text-white"
                                    style="height: 3.5rem; width: 3.5rem"
                                >
                                    <i class="fas fa-pen"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
