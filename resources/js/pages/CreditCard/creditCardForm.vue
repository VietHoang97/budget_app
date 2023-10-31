<script setup>
const maxDay = 28;
const handleSubmit = () => {
    if (editMode.value) {
        editAccount();
    } else {
        createAccount();
    }
};
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
            <div class="card">
                <div class="card-body py-1">
                    <div class="py-2">
                        <h4 class="text-center" id=" formModalLabel">
                            <span>CREATE NEW CREDIT CARD</span>
                        </h4>
                    </div>
                    <form @submit.prevent="handleSubmit" class="pb-3">
                        <div class="row">
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
                                <div class="col-sm-6">
                                    <label for="account">
                                        Associate the credit card to this
                                        account
                                    </label>
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
                                    <label for="interest_rate"
                                        >Interest rate</label
                                    >
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
                                        >Card limit and scheduled
                                        transactions</label
                                    >
                                    <select
                                        name="count"
                                        id="count"
                                        class="form-control"
                                    >
                                        <option value="1">
                                            Do not count the scheduled
                                            transactions
                                        </option>
                                        <option value="2">
                                            Count the scheduled transactions in
                                            the period
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
                                        <option
                                            v-for="day in maxDay"
                                            value="day"
                                        >
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
                                        <option
                                            v-for="day in maxDay"
                                            value="day"
                                        >
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
                                        An automatic payment will be performed
                                        the
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
                        <div class="py-2 text-right">
                            <button type="submit" class="btn btn-primary px-4">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
