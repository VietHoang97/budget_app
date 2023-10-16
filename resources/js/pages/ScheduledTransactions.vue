<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Scheduled Transactions</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">
                            Scheduled Transactions
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
            <div class="card">
                <div class="card-header">
                    <ul
                        class="nav nav-tabs card-header-tabs"
                        id="nav-tab"
                        role="tablist"
                    >
                        <li class="nav-item col p-0">
                            <a
                                class="nav-link active"
                                id="nav-home-tab"
                                data-toggle="tab"
                                href="#nav-home"
                            >
                                Incomes
                            </a>
                            <!-- <a href="#" class="nav-link text-center active">Incomes</a> -->
                        </li>
                        <li class="nav-item col p-0">
                            <a
                                class="nav-link"
                                id="nav-profile-tab"
                                data-toggle="tab"
                                href="#nav-profile"
                            >
                                Expense
                            </a>
                            <!-- <a href="#" class="nav-link text-center">Expense</a> -->
                        </li>
                        <li class="nav-item col p-0">
                            <a
                                class="nav-link"
                                id="nav-contact-tab"
                                data-toggle="tab"
                                href="#nav-contact"
                            >
                                Other
                            </a>
                            <!-- <a href="#" class="nav-link text-center">Other</a> -->
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div
                            class="tab-pane fade show active"
                            id="nav-home"
                            role="tabpanel"
                            aria-labelledby="nav-home-tab"
                        >
                            <div>
                                <a
                                    class="d-flex justify-content-between py-1 item_selector_light"
                                    href="#st1"
                                    data-toggle="collapse"
                                    aria-expanded="false"
                                    aria-controls="st1"
                                >
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
                                        <div class="row mx-2">
                                            <div class="col text-left p-0">
                                                Home
                                            </div>
                                            <div class="col text-right p-0">
                                                -$30.00
                                            </div>
                                        </div>
                                        <div class="row mx-2">
                                            <div class="col text-left p-0">
                                                Bank account
                                            </div>
                                            <div class="col text-right p-0">
                                                12/10/2023
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-group">
                                            <button
                                                class="btn"
                                                data-toggle="dropdown"
                                                data-display="static"
                                                aria-expanded="false"
                                            >
                                                <i
                                                    class="fas fa-ellipsis-v"
                                                ></i>
                                            </button>
                                            <div
                                                class="dropdown-menu dropdown-menu-sm-right dropdown-menu-right"
                                            >
                                                <button
                                                    class="btn dropdown-item"
                                                >
                                                    Repeat now
                                                </button>
                                                <button
                                                    class="btn dropdown-item"
                                                >
                                                    Skip repetition
                                                </button>
                                                <button
                                                    class="btn dropdown-item"
                                                >
                                                    Duplicate transaction
                                                </button>
                                                <button
                                                    class="btn dropdown-item"
                                                >
                                                    Edit transaction
                                                </button>
                                                <button
                                                    class="btn dropdown-item"
                                                >
                                                    Delete transaction
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="template_tr_color ml-2"
                                        ></div>
                                    </div>
                                </a>
                                <div
                                    class="template_tr_scheduled_details text-center collapse multi-collapse"
                                    id="st1"
                                >
                                    <p class="m-0">
                                        Repeats every:
                                        <span> 1 </span> Month
                                    </p>
                                    <p>
                                        Repetition remaining:
                                        <span> 12 </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="tab-pane fade show"
                            id="nav-profile"
                            role="tabpanel"
                            aria-labelledby="nav-profile-tab"
                        >
                            <a
                                class="d-flex justify-content-between py-1 item_selector_light"
                                href="#st2"
                                data-toggle="collapse"
                                aria-expanded="false"
                                aria-controls="st2"
                            >
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
                                    <div class="row mx-2">
                                        <div class="col text-left p-0">
                                            Other (Expenses)
                                        </div>
                                        <div class="col text-right p-0">
                                            -$30.00
                                        </div>
                                    </div>
                                    <div class="row mx-2">
                                        <div class="col text-left p-0">
                                            Wallet
                                        </div>
                                        <div class="col text-right p-0">
                                            12/10/2023
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="btn-group">
                                        <button
                                            class="btn"
                                            data-toggle="dropdown"
                                            data-display="static"
                                            aria-expanded="false"
                                        >
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div
                                            class="dropdown-menu dropdown-menu-sm-right dropdown-menu-right"
                                        >
                                            <button class="btn dropdown-item">
                                                Repeat now
                                            </button>
                                            <button class="btn dropdown-item">
                                                Skip repetition
                                            </button>
                                            <button class="btn dropdown-item">
                                                Duplicate transaction
                                            </button>
                                            <button class="btn dropdown-item">
                                                Edit transaction
                                            </button>
                                            <button class="btn dropdown-item">
                                                Delete transaction
                                            </button>
                                        </div>
                                    </div>
                                    <div class="template_tr_color ml-2"></div>
                                </div>
                            </a>
                            <div
                                class="template_tr_scheduled_details text-center collapse multi-collapse"
                                id="st2"
                            >
                                <p class="m-0">
                                    Repeats every:
                                    <span> 1 </span> Month
                                </p>
                                <p>
                                    Repetition remaining:
                                    <span> 12 </span>
                                </p>
                            </div>
                        </div>

                        <div
                            class="tab-pane fade show active"
                            id="nav-contact"
                            role="tabpanel"
                            aria-labelledby="nav-contact-tab"
                        >
                            <div>
                                <a
                                    class="d-flex justify-content-between py-1 item_selector_light"
                                    href="#st3"
                                    data-toggle="collapse"
                                    aria-expanded="false"
                                    aria-controls="st3"
                                >
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
                                        <div class="row mx-2">
                                            <div class="col text-left p-0">
                                                Energy bill
                                            </div>
                                            <div class="col text-right p-0">
                                                -$30.00
                                            </div>
                                        </div>
                                        <div class="row mx-2">
                                            <div class="col text-left p-0">
                                                Wallet
                                            </div>
                                            <div class="col text-right p-0">
                                                12/10/2023
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-group">
                                            <button
                                                class="btn"
                                                data-toggle="dropdown"
                                                data-display="static"
                                                aria-expanded="false"
                                            >
                                                <i
                                                    class="fas fa-ellipsis-v"
                                                ></i>
                                            </button>
                                            <div
                                                class="dropdown-menu dropdown-menu-sm-right dropdown-menu-right"
                                            >
                                                <button
                                                    class="btn dropdown-item"
                                                >
                                                    Repeat now
                                                </button>
                                                <button
                                                    class="btn dropdown-item"
                                                >
                                                    Skip repetition
                                                </button>
                                                <button
                                                    class="btn dropdown-item"
                                                >
                                                    Duplicate transaction
                                                </button>
                                                <button
                                                    class="btn dropdown-item"
                                                >
                                                    Edit transaction
                                                </button>
                                                <button
                                                    class="btn dropdown-item"
                                                >
                                                    Delete transaction
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="template_tr_color ml-2"
                                        ></div>
                                    </div>
                                </a>
                                <div
                                    class="template_tr_scheduled_details text-center collapse multi-collapse"
                                    id="st3"
                                >
                                    <p class="m-0">
                                        Repeats every:
                                        <span> 1 </span> Month
                                    </p>
                                    <p>
                                        Repetition remaining:
                                        <span> 12 </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card d-flex justify-content-center mx-md-5">
                <div class="d-flex justify-content-between px-4 py-1">
                    <span>This month</span>
                    <span class="text-red">-$250.00</span>
                </div>
                <div class="d-flex justify-content-between px-4 py-1">
                    <span>Next month</span>
                    <span class="text-red">-$30.00</span>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.nav-option .nav-link {
    color: rgba(0, 0, 0, 0.5);
}

.item_selector_light {
    cursor: pointer;
    color: #000;
}
.item_selector_light:hover {
    background-color: #f9f9f9;
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.08);
    color: #000;
    text-decoration: none;
}
.dropdown-toggle::after {
    border: none !important;
    margin-left: none !important;
}
.template_tr_color {
    width: 5px;
    height: 45px;
    background-color: rgb(239, 154, 154);
}

@media screen and (max-width: 540px) {
    .container-fluid {
        padding: 0;
    }
    .card-body {
        padding: 0.5rem;
    }
}
</style>
