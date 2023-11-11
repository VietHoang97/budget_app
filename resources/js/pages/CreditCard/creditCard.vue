<script setup>
import { ref, onMounted, onUpdated, reactive } from "vue";
import { Form } from "vee-validate";
import FixedButton from "@/components/FixedButton.vue";
import DeleteModal from "@/components/modalComponents/DeleteModal.vue";
// import TransferAccount from "@/components/modalComponents/TransferAccount.vue";

const type = { 1: "fa-plus" };
const className = { 1: "btn-primary" };
const accLink = ref("/credit/create");

const credit = ref({});
const isDelClick = ref(false);
const credit_id = ref();
const slug = ref("credit-card");

const openUpdate = () => {
    let id = 1;
    window.open(`credit/update/${id}`, "_self");
};

const getCreditCard = () => {
    axios.get("/api/credits").then((res) => {
        credit.value = res.data;
    });
};

const openDeleteForm = (id) => {
    isDelClick.value = true;
    credit_id.value = id;
};

onMounted(() => {
    getCreditCard();
});
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
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
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
                                    class="dropdown-item"
                                    @click="openUpdate()"
                                >
                                    Edit Credit Card
                                </button>
                                <button
                                    class="dropdown-item"
                                    @click="openDeleteForm()"
                                >
                                    Delete Credit Card
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

    <FixedButton
        :quantity="1"
        :type="type"
        :btn="className"
        :form_id="accLink"
    />
    <template v-if="isDelClick == true">
        <DeleteModal :pass_id="credit_id" :type="slug" />
    </template>
    <!-- <TransferAccount /> -->
</template>
