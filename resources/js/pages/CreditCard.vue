<script setup>
import { ref, onMounted, onUpdated, reactive } from "vue";
import { Form } from "vee-validate";
import FixedButton from "@/components/FixedButton.vue";
import TransferAccount from "@/components/modalComponents/TransferAccount.vue";

const type = { 1: "fa-plus" };
const className = { 1: "btn-primary" };
const formID = { 1: "formCreateModal" };

const maxDay = 28;
</script>
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
                        <button
                            type="button"
                            class="btn"
                            data-toggle="modal"
                            data-target="#formExpenseModal"
                        >
                            <i class="fas fa-plus"></i>
                        </button>
                        <button
                            class="btn"
                            data-toggle="modal"
                            data-target="#formPaymentModal"
                        >
                            <i class="far fa-money-bill-alt"></i>
                        </button>
                        <button
                            class="btn"
                            data-toggle="modal"
                            data-target="#tranferModal"
                        >
                            <i class="fas fa-sync-alt"></i>
                        </button>
                        <div class="btn-group">
                            <button
                                type="button"
                                class="btn"
                                data-toggle="dropdown"
                                data-display="static"
                                aria-expanded="false"
                            >
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-menu-sm-right"
                            >
                                <button
                                    type="button"
                                    ref="editBtn"
                                    class="dropdown-item"
                                    data-toggle="modal"
                                    data-target="#formModal"
                                >
                                    Edit Account
                                </button>
                                <button class="dropdown-item" href="#">
                                    Delete Account
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal fade"
        id="formExpenseModal"
        tabindex="-1"
        aria-labelledby="formExpenseModalLabel"
        data-backdrop="static"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title w-100">
                        <h5 class="text-center" id="formExpenseModalLabel">
                            NEW EXPENSE
                        </h5>
                    </div>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="transfer_from">From</label>
                                <div class="input-group">
                                    <select
                                        name="transfer_from"
                                        id="transfer_from"
                                        class="form-control"
                                    >
                                        <option value="1">Bank Account</option>
                                        <option value="2">Wallet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="mt-4">to "Credit Card"</span>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-center align-items-center mt-3"
                        >
                            <span>Amount due</span>
                            <i class="fas fa-arrow-right mx-2"></i>
                            <span>01/10/2023</span>
                            <span>-</span>
                            <span>31/10/2023:</span>
                            <span>$49.00</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 my-3">
                                <label for="transfer_value"> Value </label>
                                <div class="input-group">
                                    <input
                                        type="number"
                                        name="transfer_value"
                                        id="transfer_value"
                                        class="form-control"
                                    />
                                    <span class="ml-2 mt-2">$</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 my-3">
                                <label for="interest_rate">
                                    Interest rate
                                </label>
                                <div class="input-group">
                                    <input
                                        type="number"
                                        name="interest_rate"
                                        id="interest_rate"
                                        class="form-control"
                                    />
                                    <span class="ml-2 mt-2">%</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-center align-items-center mt-2"
                        >
                            <span>Total Payment:</span>
                            <span class="ml-2">$00.00</span>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <label for="date">Date</label>
                                <div class="input-group">
                                    <input
                                        type="date"
                                        name="date"
                                        id="date"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="time">Time</label>
                                <div class="input-group">
                                    <input
                                        type="time"
                                        name="time"
                                        id="time"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-12">
                                <label for="notes">Notes</label>
                                <div class="input-group">
                                    <textarea
                                        name="notes"
                                        id="notes"
                                        rows="3"
                                        class="form-control"
                                        placeholder="Option"
                                    ></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-primary px-4">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="formPaymentModal"
        tabindex="-1"
        aria-labelledby="formPaymentModalLabel"
        data-backdrop="static"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title w-100">
                        <h5 class="text-center" id="formPaymentModalLabel">
                            PAYMENT
                        </h5>
                    </div>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="transfer_from">From</label>
                                <div class="input-group">
                                    <select
                                        name="transfer_from"
                                        id="transfer_from"
                                        class="form-control"
                                    >
                                        <option value="1">Bank Account</option>
                                        <option value="2">Wallet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="mt-4">to "Credit Card"</span>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-center align-items-center mt-3"
                        >
                            <span>Amount due</span>
                            <i class="fas fa-arrow-right mx-2"></i>
                            <span>01/10/2023</span>
                            <span> - </span>
                            <span>31/10/2023:</span>
                            <span>$49.00</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 my-3">
                                <label for="transfer_value"> Value </label>
                                <div class="input-group">
                                    <input
                                        type="number"
                                        name="transfer_value"
                                        id="transfer_value"
                                        class="form-control"
                                    />
                                    <span class="ml-2 mt-2">$</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 my-3">
                                <label for="interest_rate">
                                    Interest rate
                                </label>
                                <div class="input-group">
                                    <input
                                        type="number"
                                        name="interest_rate"
                                        id="interest_rate"
                                        class="form-control"
                                    />
                                    <span class="ml-2 mt-2">%</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-center align-items-center mt-2"
                        >
                            <span>Total Payment:</span>
                            <span class="ml-2">$00.00</span>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <label for="date">Date</label>
                                <div class="input-group">
                                    <input
                                        type="date"
                                        name="date"
                                        id="date"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="time">Time</label>
                                <div class="input-group">
                                    <input
                                        type="time"
                                        name="time"
                                        id="time"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-12">
                                <label for="notes">Notes</label>
                                <div class="input-group">
                                    <textarea
                                        name="notes"
                                        id="notes"
                                        rows="3"
                                        class="form-control"
                                        placeholder="Option"
                                    ></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-primary px-4">
                        Save
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
                    <div class="d-flex justify-content-center w-100">
                        <h3 class="modal-title" id="formCreateModalLabel">
                            CREATE NEW INCOME CREDIT CARD
                        </h3>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-12">
                            <label for="name">Name</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-5">
                            <label for="account"
                                >Associate the credit card to this
                                account</label
                            >
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
                        <div class="col-sm-6">
                            <label for="limit">Limit</label>
                            <div class="d-flex">
                                <input
                                    type="number"
                                    name="limit"
                                    id="limit"
                                    class="form-control"
                                />
                                <span class="mt-2 ml-1">$</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="interest_rate">Interest rate</label>
                            <div class="d-flex">
                                <input
                                    type="number"
                                    name="interest_rate"
                                    id="interest_rate"
                                    class="form-control"
                                />
                                <span class="mt-2 ml-1">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-12">
                            <label for="count"
                                >Card limit and scheduled transactions</label
                            >
                            <select
                                name="count"
                                id="count"
                                class="form-control"
                            >
                                <option value="1">
                                    Do not count the scheduled transactions
                                </option>
                                <option value="2">
                                    Count the scheduled transactions in the
                                    period
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-6">
                            <label for="start_day">Starting day</label>
                            <select
                                name="start_day"
                                id="start_day"
                                class="form-control"
                            >
                                <option v-for="day in maxDay" value="day">
                                    {{ day }}
                                </option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="payment_day">Payment day</label>
                            <select
                                name="payment_day"
                                id="payment_day"
                                class="form-control"
                            >
                                <option v-for="day in maxDay" value="day">
                                    {{ day }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-12">
                            <button class="btn">
                                <i class="fas fa-toggle-on"></i>
                            </button>
                            <span>Enable automatic payments</span>
                        </div>
                        <div class="col-sm-12 text-center">
                            <p>
                                Period:
                                <span>10/01/2023</span> -
                                <span>10/31/2023</span>
                            </p>
                            <p>
                                An automatic payment will be performed the
                                <span>11/01/2023</span>
                            </p>
                        </div>
                    </div>
                    <div class="input-group align-items-center my-2">
                        <div class="col-sm-12">
                            <label for="notes">Notes</label>
                            <textarea
                                id="notes"
                                class="form-control"
                                name="notes"
                                rows="3"
                                placeholder="Optional"
                            ></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn text-primary px-4"
                        data-dismiss="modal"
                    >
                        Cancel
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary text-uppercase px-4"
                    >
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    <FixedButton :quantity="1" :type="type" :btn="className" :formid="formID" />
    <TransferAccount />
</template>
