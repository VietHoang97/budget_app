<script setup>
import { ref, onMounted, onUpdated, reactive } from "vue";
import { Form } from "vee-validate";
</script>
<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Budgets</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">
                            <a href="/budgets">Budgets</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Budgets</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
            <form>
                <div class="card">
                    <div class="card-header">
                        <div class="py-2">
                            <h3 class="text-center text-uppercase">
                                create new budget
                            </h3>
                        </div>
                        <ul
                            class="nav nav-tabs card-header-tabs"
                            id="nav-tab"
                            role="tablist"
                        >
                            <li class="nav-item col p-0">
                                <a
                                    class="nav-link active text-dark"
                                    id="single-tab"
                                    data-toggle="tab"
                                    href="#nav-single"
                                >
                                    Single Category
                                </a>
                            </li>
                            <li class="nav-item col p-0">
                                <a
                                    class="nav-link text-dark"
                                    id="multi-tab"
                                    data-toggle="tab"
                                    href="#nav-multi"
                                >
                                    Multi Category
                                </a>
                            </li>
                            <li class="nav-item col p-0">
                                <a
                                    class="nav-link text-dark"
                                    id="nav-all-tab"
                                    data-toggle="tab"
                                    href="#nav-all"
                                >
                                    All Category
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body px-1">
                        <div class="tab-content">
                            <div
                                class="tab-pane fade show active"
                                id="nav-single"
                                role="tabpanel"
                                aria-labelledby="single-tab"
                            >
                                <div
                                    class="py-1"
                                    data-toggle="collapse"
                                    aria-expanded="false"
                                >
                                    <div class="row">
                                        <div class="d-flex col-sm-6 my-2">
                                            <div
                                                class="col-1 d-flex align-items-center"
                                            >
                                                <i
                                                    class="fas fa-piggy-bank"
                                                ></i>
                                            </div>
                                            <div class="col-11">
                                                <label for="amount">
                                                    Budget amount
                                                </label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        name="amount"
                                                        id="amount"
                                                        class="form-control"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex mt-4 align-items-center"
                                        >
                                            <span class="">$</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex col-sm-6 mr-2 my-2">
                                            <div
                                                class="col-1 d-flex align-items-center"
                                            >
                                                <i
                                                    class="fas fa-project-diagram"
                                                ></i>
                                            </div>
                                            <div class="col-11">
                                                <label for="category">
                                                    Category
                                                </label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        name="category"
                                                        id="category"
                                                        class="form-control"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="d-flex align-items-center col-sm-6 my-2"
                                        >
                                            <div
                                                class="col-sm-1 d-flex align-items-cente"
                                            >
                                                <i
                                                    class="fas fa-university"
                                                ></i>
                                            </div>
                                            <div class="col-sm-11">
                                                <label for="acount">
                                                    Account</label
                                                >
                                                <div class="input-group">
                                                    <select
                                                        name="acount"
                                                        id="acount"
                                                        class="form-control"
                                                    >
                                                        <option value="">
                                                            All Accounts
                                                        </option>
                                                        <option value="1">
                                                            Credit Card
                                                        </option>
                                                        <option value="2">
                                                            Wallets
                                                        </option>
                                                        <option value="3">
                                                            Bank Account
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="d-flex align-items-center col-sm-6 my-2"
                                        >
                                            <div
                                                class="col-sm-1 d-flex align-items-cente"
                                            >
                                                <i class="fas fa-stopwatch"></i>
                                            </div>
                                            <div class="col-sm-11">
                                                <label for="duration">
                                                    Duration
                                                </label>
                                                <div class="input-group">
                                                    <select
                                                        name="duration"
                                                        id="duration"
                                                        class="form-control"
                                                    >
                                                        <option value="1">
                                                            1 Week
                                                        </option>
                                                        <option value="2">
                                                            1 Month
                                                        </option>
                                                        <option value="3">
                                                            Other
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="tab-pane fade show"
                                id="nav-multi"
                                role="tabpanel"
                                aria-labelledby="multi-tab"
                            >
                                <div
                                    class="py-1"
                                    data-toggle="collapse"
                                    aria-expanded="false"
                                >
                                    <div class="row">
                                        <div class="d-flex col-sm-6 my-2">
                                            <div
                                                class="col-1 d-flex align-items-center"
                                            >
                                                <i class="fas fa-tag"></i>
                                            </div>
                                            <div class="col-11">
                                                <label for="amount">
                                                    Name
                                                </label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        name="amount"
                                                        id="amount"
                                                        class="form-control"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex col-sm-6 my-2">
                                            <div
                                                class="col-1 d-flex align-items-center"
                                            >
                                                <i
                                                    class="fas fa-piggy-bank"
                                                ></i>
                                            </div>
                                            <div class="col-11">
                                                <label for="amount">
                                                    Budget amount
                                                </label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        name="amount"
                                                        id="amount"
                                                        class="form-control"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex mt-4 align-items-center"
                                        >
                                            <span class="">$</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="d-flex align-items-center col-sm-6 mr-2 my-2"
                                        >
                                            <div class="col-1">
                                                <i class="far fa-circle"></i>
                                            </div>
                                            <label for="category">
                                                Picture
                                            </label>
                                            <div class="input-group ml-4">
                                                <img
                                                    src="https://webapp.fastbudget.app/static/icons/ic_blank_grey.svg"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex col-sm-6 mr-2 my-2">
                                            <div
                                                class="col-1 d-flex align-items-center"
                                            >
                                                <i
                                                    class="fas fa-project-diagram"
                                                ></i>
                                            </div>
                                            <div class="col-11">
                                                <label for="category">
                                                    Category
                                                </label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        name="category"
                                                        id="category"
                                                        class="form-control"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="d-flex align-items-center col-sm-6 my-2"
                                        >
                                            <div
                                                class="col-sm-1 d-flex align-items-cente"
                                            >
                                                <i
                                                    class="fas fa-university"
                                                ></i>
                                            </div>
                                            <div class="col-sm-11">
                                                <label for="acount">
                                                    Account</label
                                                >
                                                <div class="input-group">
                                                    <select
                                                        name="acount"
                                                        id="acount"
                                                        class="form-control"
                                                    >
                                                        <option value="">
                                                            All Accounts
                                                        </option>
                                                        <option value="1">
                                                            Credit Card
                                                        </option>
                                                        <option value="2">
                                                            Wallets
                                                        </option>
                                                        <option value="3">
                                                            Bank Account
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="d-flex align-items-center col-sm-6 my-2"
                                        >
                                            <div
                                                class="col-sm-1 d-flex align-items-cente"
                                            >
                                                <i class="fas fa-stopwatch"></i>
                                            </div>
                                            <div class="col-sm-11">
                                                <label for="duration">
                                                    Duration
                                                </label>
                                                <div class="input-group">
                                                    <select
                                                        name="duration"
                                                        id="duration"
                                                        class="form-control"
                                                    >
                                                        <option value="1">
                                                            1 Week
                                                        </option>
                                                        <option value="2">
                                                            1 Month
                                                        </option>
                                                        <option value="3">
                                                            Other
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="tab-pane fade show"
                                id="nav-all"
                                role="tabpanel"
                                aria-labelledby="nav-all-tab"
                            >
                                <div
                                    class="py-1"
                                    data-toggle="collapse"
                                    aria-expanded="false"
                                >
                                    <div class="row">
                                        <div class="d-flex col-sm-6 my-2">
                                            <div
                                                class="col-1 d-flex align-items-center"
                                            >
                                                <i
                                                    class="fas fa-piggy-bank"
                                                ></i>
                                            </div>
                                            <div class="col-11">
                                                <label for="amount">
                                                    Budget amount
                                                </label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        name="amount"
                                                        id="amount"
                                                        class="form-control"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex mt-4 align-items-center"
                                        >
                                            <span class="">$</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex col-sm-6 mr-2 my-2">
                                            <div
                                                class="col-1 d-flex align-items-center"
                                            >
                                                <i
                                                    class="fas fa-project-diagram"
                                                ></i>
                                            </div>
                                            <div class="col-11">
                                                <label for="category">
                                                    Category
                                                </label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        name="category"
                                                        id="category"
                                                        class="form-control"
                                                        value="All category"
                                                        readonly
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="d-flex align-items-center col-sm-6 my-2"
                                        >
                                            <div
                                                class="col-sm-1 d-flex align-items-cente"
                                            >
                                                <i
                                                    class="fas fa-university"
                                                ></i>
                                            </div>
                                            <div class="col-sm-11">
                                                <label for="acount">
                                                    Account</label
                                                >
                                                <div class="input-group">
                                                    <select
                                                        name="acount"
                                                        id="acount"
                                                        class="form-control"
                                                    >
                                                        <option value="">
                                                            All Accounts
                                                        </option>
                                                        <option value="1">
                                                            Credit Card
                                                        </option>
                                                        <option value="2">
                                                            Wallets
                                                        </option>
                                                        <option value="3">
                                                            Bank Account
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="d-flex align-items-center col-sm-6 my-2"
                                        >
                                            <div
                                                class="col-sm-1 d-flex align-items-cente"
                                            >
                                                <i class="fas fa-stopwatch"></i>
                                            </div>
                                            <div class="col-sm-11">
                                                <label for="duration">
                                                    Duration
                                                </label>
                                                <div class="input-group">
                                                    <select
                                                        name="duration"
                                                        id="duration"
                                                        class="form-control"
                                                    >
                                                        <option value="1">
                                                            1 Week
                                                        </option>
                                                        <option value="2">
                                                            1 Month
                                                        </option>
                                                        <option value="3">
                                                            Other
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-2 text-right">
                        <button
                            type="submit"
                            class="btn btn-primary"
                            @click="abc"
                        >
                            Save
                        </button>
                    </div>
                </div>
            </form>
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
</template>
<style>
@media screen and (max-width: 540px) {
    .container-fluid {
        padding: 0;
    }
    .card-body {
        padding: 0.5rem;
    }
}
</style>
