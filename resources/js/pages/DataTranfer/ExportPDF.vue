<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Export PDF</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Export PDF</li>
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
                    <div class="col-sm-3">
                        <select name="type" id="type" class="form-control">
                            <option value="1">;</option>
                            <option value="2">,</option>
                        </select>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-sm-3">
                        <div>From:</div>
                        <input
                            class="form-control ml-1"
                            type="date"
                            name="start_date"
                            id="start_date"
                        />
                    </div>
                    <div class="col-sm-3">
                        <div>To:</div>
                        <input
                            class="form-control ml-1"
                            type="date"
                            name="end_date"
                            id="end_date"
                        />
                    </div>
                    <div class="col-sm-3 mt-4">
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
                <div class="row my-2">
                    <div class="col-sm-3">Account:</div>
                    <div class="col-sm-6">
                        <select
                            class="form-control"
                            name="select_charts_date_fast_sel"
                            id="select_charts_date_fast_sel"
                        >
                            <option value="" selected>All accounts</option>
                            <option value="1">Last 7 days</option>
                            <option value="2">This month</option>
                            <option value="3">Last 30 days</option>
                            <option value="4">Last month</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-sm-3 d-flex align-items-center">
                        Include transactions:
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
                                id="tranfer"
                                name="tranfer"
                            />
                            <label
                                class="custom-control-label form-check-label"
                                for="tranfer"
                                >Transfers and payments</label
                            >
                        </div>
                    </div>
                </div>
                <div class="my-2">
                    <button
                        class="btn d-flex align-items-center w-50 mt-3 btn_eye"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseAccount1"
                        aria-expanded="false"
                        aria-controls="collapseAccount1"
                    >
                        <i class="fas fa-2x fa-eye"></i>
                        <span class="ml-2"> OTHER </span>
                    </button>
                    <div class="collapse" id="collapseAccount1">
                        <div
                            class="collapse show"
                            id="div_tools_file_advanced"
                            style=""
                        >
                            <span class="mt-3">Columns:</span>
                            <div class="row mt-1">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_id"
                                            checked=""
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_id"
                                            >Id</label
                                        >
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_value"
                                            checked=""
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_value"
                                            >Value</label
                                        >
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_currency"
                                            checked=""
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_currency"
                                            >Currency</label
                                        >
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_category"
                                            checked=""
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_category"
                                            >Category</label
                                        >
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_main_category"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_main_category"
                                            >Main category</label
                                        >
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_account"
                                            checked=""
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_account"
                                            >Account</label
                                        >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_date"
                                            checked=""
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_date"
                                            >Date</label
                                        >
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_time"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_time"
                                            >Time</label
                                        >
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_from_to"
                                            checked=""
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_from_to"
                                            >From/To</label
                                        >
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_notes"
                                            checked=""
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_notes"
                                            >Notes</label
                                        >
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="checkbox_tools_file_adv_value_main"
                                            checked=""
                                        />
                                        <label
                                            class="form-check-label"
                                            for="checkbox_tools_file_adv_value_main"
                                            >Value (USD)</label
                                        >
                                    </div>
                                </div>
                            </div>
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
