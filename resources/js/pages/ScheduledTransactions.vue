<script setup>
import { ref, onMounted, onUpdated, reactive } from "vue";
import { Form } from "vee-validate";
import FixedButton from "@/components/FixedButton.vue";

const type = {
    1: "fa-minus",
    2: "fa-plus",
};
const buttonClass = {
    1: "btn-success",
    2: "btn-danger",
};
</script>
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
                                id="income-tab"
                                data-toggle="tab"
                                href="#nav-income"
                            >
                                Incomes
                            </a>
                            <!-- <a href="#" class="nav-link text-center active">Incomes</a> -->
                        </li>
                        <li class="nav-item col p-0">
                            <a
                                class="nav-link"
                                id="expense-tab"
                                data-toggle="tab"
                                href="#nav-expense"
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
                            id="nav-income"
                            role="tabpanel"
                            aria-labelledby="income-tab"
                        >
                            <div class="item_selector_light">
                                <a
                                    class="d-flex justify-content-between py-1"
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
                                                    type="button"
                                                    ref="editBtn"
                                                    data-toggle="modal"
                                                    data-target="#formRepeatModal"
                                                >
                                                    Repeat now
                                                </button>
                                                <button
                                                    class="btn dropdown-item"
                                                    type="button"
                                                    ref="editBtn"
                                                    data-toggle="modal"
                                                    data-target="#formSkipModal"
                                                >
                                                    Skip repetition
                                                </button>
                                                <button
                                                    class="btn dropdown-item"
                                                    type="button"
                                                    ref="editBtn"
                                                    data-toggle="modal"
                                                    data-target="#formDeleteScheduleModal"
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
                            id="nav-expense"
                            role="tabpanel"
                            aria-labelledby="expense-tab"
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
                            class="tab-pane fade show"
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
    <div
        class="modal fade"
        id="formRepeatModal"
        tabindex="-1"
        aria-labelledby="formRepeatModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formRepeatModalLabel">
                        REPEAT NOW
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anticipate the next repetition?</p>
                    <p>
                        <del>31/10/2023</del> &ensp;
                        <i class="fas fa-arrow-right"></i> &ensp;
                        <span>26/10/2023</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-primary px-4"
                        data-dismiss="modal"
                    >
                        Back
                    </button>
                    <button type="button" class="btn btn-primary px-4">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="formSkipModal"
        tabindex="-1"
        aria-labelledby="formSkipModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formSkipModalLabel">
                        SKIP REPETITION
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Skip the next repetition?</p>
                    <p>
                        <del>31/10/2023</del> &ensp;
                        <i class="fas fa-arrow-right"></i> &ensp;
                        <span>26/10/2023</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-primary px-4"
                        data-dismiss="modal"
                    >
                        Back
                    </button>
                    <button type="button" class="btn btn-primary px-4">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="formDeleteScheduleModal"
        tabindex="-1"
        aria-labelledby="formDeleteScheduleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formDeleteScheduleModalLabel">
                        DELETE TRANSACTION
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Are you sure you want to delete the scheduled
                        transaction?
                    </p>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-primary px-4"
                        data-dismiss="modal"
                    >
                        Back
                    </button>
                    <button type="button" class="btn btn-danger px-4">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal fade"
        id="formCreateModal"
        tabindex="-1"
        aria-labelledby="formCreateModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="offset-4 col-sm-4 text-center">
                        <h3 class="modal-title" id="formCreateModalLabel">
                            NEW INCOME
                        </h3>
                    </div>
                    <div class="col-sm-4 text-right">
                        <button type="button" class="btn">
                            <i class="fas fa-exchange-alt"></i>
                        </button>
                        <button type="button" class="btn">
                            <i class="far fa-2x fa-star"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-1">
                            <img
                                class="align-self-center"
                                src="https://webapp.fastbudget.app/static/icons/ic_blank_grey.svg"
                                alt="blank icon"
                            />
                        </div>
                        <div class="col-sm-5">
                            <label for="category">Category</label>
                            <input
                                type="text"
                                name="category"
                                id="category"
                                class="form-control"
                                placeholder="Select category"
                            />
                        </div>
                        <div class="col-sm-4">
                            <label for="value">Value</label>
                            <input
                                type="text"
                                name="value"
                                id="value"
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-1 mt-2 text-center">
                            <i class="fas fa-2x fa-university"></i>
                        </div>
                        <div class="col-sm-5">
                            <label for="account">Account</label>
                            <select
                                name="account"
                                id="account"
                                class="form-control"
                            >
                                <option value="1">Wallet</option>
                                <option value="2">Bank Account</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-1 mt-2 text-center">
                            <i class="fas fa-2x fa-calendar-day"></i>
                        </div>
                        <div class="col-sm-5">
                            <label for="date">Date</label>
                            <input
                                type="date"
                                name="date"
                                id="date"
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-1 mt-2 text-center">
                            <i class="fas fa-2x fa-history"></i>
                        </div>
                        <div class="col-sm-4">
                            <label for="repeat"> Repeats every</label>
                            <input
                                type="number"
                                name="repeat"
                                id="repeat"
                                class="form-control"
                            />
                        </div>
                        <div class="col-sm-5">
                            <label for=""></label>
                            <select
                                name="account"
                                id="account"
                                class="form-control"
                            >
                                <option value="1">Days</option>
                                <option value="2">Weeks</option>
                                <option value="3">Month</option>
                                <option value="4">Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-1 mt-2 text-center">
                            <i class="fas fa-2x fa-redo"></i>
                        </div>
                        <div class="col-sm-4">
                            <label for="times">Number of times</label>
                            <input
                                type="number"
                                name="times"
                                id="times"
                                class="form-control"
                            />
                        </div>
                        <div class="col-sm-5 d-flex align-items-center">
                            <span class="form-text text-muted">
                                Zero times means limitless
                            </span>
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-1 mt-2 text-center">
                            <i class="far fa-2x fa-user"></i>
                        </div>
                        <div class="col-sm-11">
                            <label for="repeat">From (Optional)</label>
                            <select name="from" id="from" class="form-control">
                                <option value="1">Days</option>
                                <option value="2">Weeks</option>
                                <option value="3">Month</option>
                                <option value="4">Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-1 mt-2 text-center">
                            <i class="fas fa-2x fa-pencil-alt"></i>
                        </div>
                        <div class="col-sm-11">
                            <label for="notes">Notes (Optional)</label>
                            <textarea
                                id="notes"
                                class="form-control"
                                name="notes"
                                rows="3"
                            ></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn text-success px-4"
                        data-dismiss="modal"
                    >
                        Cancel
                    </button>
                    <button
                        type="button"
                        class="btn btn-success text-uppercase px-4"
                    >
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <FixedButton :quantity="2" :type="type" :btn="buttonClass" />
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
