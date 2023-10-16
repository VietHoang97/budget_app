<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category Charts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category Charts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
            <div class="card my-2">
                <div class="row mx-3 my-2">
                    <div class="col-5">Show all categories of:</div>
                    <div class="col-7">
                        <div class="mx-5 d-flex justify-content-between">
                            <div>
                                <input
                                    type="radio"
                                    name="expense"
                                    id="expense"
                                />
                                <label for="expense">Expenses</label>
                            </div>
                            <div>
                                <input type="radio" name="income" id="income" />
                                <label for="income">Incomes</label>
                            </div>
                            <div>
                                <input type="radio" name="both" id="both" />
                                <label for="both">Both</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-3 my-2">
                    <div class="col-4">
                        <div>From:</div>
                        <input
                            class="form-control ml-1"
                            type="date"
                            name="start_date"
                            id="start_date"
                        />
                    </div>
                    <div class="col-4">
                        <div>To:</div>
                        <input
                            class="form-control ml-1"
                            type="date"
                            name="end_date"
                            id="end_date"
                        />
                    </div>
                    <div class="col-4">
                        <select
                            class="form-control"
                            name="select_charts_date_fast_sel"
                            id="select_charts_date_fast_sel"
                        >
                            <option value="1">Last 7 days</option>
                            <option value="2">This month</option>
                            <option value="3">Last 30 days</option>
                            <option value="4">Last month</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
