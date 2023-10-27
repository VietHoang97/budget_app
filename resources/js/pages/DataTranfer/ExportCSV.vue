<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Export CSV</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Export CSV</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
            <div class="card p-3">
                <h4 class="text-center text-uppercase mb-3">
                    Create file - PDF
                </h4>
                <div class="row my-3">
                    <div class="col-sm-3">Type:</div>
                    <div class="col-sm-7">
                        <select name="type" id="type" class="form-control">
                            <option value="1">Report</option>
                            <option value="2">Transactions</option>
                            <option value="3">Transactions (Future)</option>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-sm-3">Period:</div>
                    <div class="col-sm-7">
                        <select name="type" id="type" class="form-control">
                            <option value="1">September 2023</option>
                            <option value="2">August 2023</option>
                            <option value="3">July 2023</option>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-sm-3 d-flex align-items-center">
                        Include reports on:
                    </div>
                    <div class="col-sm-7 d-block my-1">
                        <div class="custom-control custom-checkbox">
                            <input
                                type="checkbox"
                                class="custom-control-input"
                                id="income"
                                name="income"
                            />
                            <label
                                class="custom-control-label form-check-label"
                                for="income"
                                >Income</label
                            >
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input
                                type="checkbox"
                                class="custom-control-input"
                                id="expenses"
                                name="expenses"
                            />
                            <label
                                class="custom-control-label form-check-label"
                                for="expenses"
                                >Expenses</label
                            >
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input
                                type="checkbox"
                                class="custom-control-input"
                                id="accounts"
                                name="accounts"
                            />
                            <label
                                class="custom-control-label form-check-label"
                                for="accounts"
                                >Accounts</label
                            >
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input
                                type="checkbox"
                                class="custom-control-input"
                                id="budgets"
                                name="budgets"
                            />
                            <label
                                class="custom-control-label form-check-label"
                                for="budgets"
                                >Budgets</label
                            >
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input
                                type="checkbox"
                                class="custom-control-input"
                                id="debts"
                                name="debts"
                            />
                            <label
                                class="custom-control-label form-check-label"
                                for="debts"
                                >Debts</label
                            >
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button class="btn btn-primary text-uppercase">
                        Export pdf file
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
