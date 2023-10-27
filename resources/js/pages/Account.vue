<script setup>
import { ref, onMounted, onUpdated, reactive } from "vue";
import { Form } from "vee-validate";
import AccountFormModal from "@/components/modalComponents/Accounts/AccountFormModal.vue";
import TransferAccount from "@/components/modalComponents/TransferAccount.vue";
import FixedButton from "@/components/FixedButton.vue";

const accounts = ref({});
const editMode = ref(false);

const type = { 1: "fa-plus" };
const className = { 1: "btn-primary" };
const formID = { 1: "formModal" };

const formAccount = reactive({
    name: "",
    currency: "",
    balance: "",
    init_amount: "",
    notes: "",
});

const getAccounts = () => {
    axios.get("/api/accounts").then((res) => {
        accounts.value = res.data;
    });
};

const openForm = (id) => {
    getEditAccounts(id);
};

const getEditAccounts = async (id) => {
    if (editMode) {
        await axios.get(`/api/accounts/${id}/edit`).then(({ data }) => {
            formAccount.name = data.name;
            formAccount.currency = data.currency;
            formAccount.init_amount = data.init_amount;
            formAccount.notes = data.notes;
        });
    }
};

onMounted(() => {
    getAccounts();
});
</script>
<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Account</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
            <div class="card my-3">
                <div class="d-flex justify-content-between my-2 mx-4">
                    <div class="float-left button">
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <div class="float-right">
                        <span>Total:</span>
                        <span class="text-success">$13,344.34</span>
                    </div>
                </div>
            </div>
            <div
                class="card my-3"
                v-for="(acc, index) in accounts"
                :key="acc.id"
            >
                <div class="d-flex justify-content-between my-2 mx-4">
                    <div class="float-left">
                        <span>{{ acc.name }}</span>
                    </div>
                    <div class="float-right">
                        <span class="text-success"
                            >{{ acc.currency }} {{ acc.balance }}</span
                        >
                    </div>
                </div>
                <div class="d-flex justify-content-between my-2 mx-4">
                    <div class="d-flex align-items-center float-left">
                        <label class="switch">
                            <input
                                type="checkbox"
                                :id="'toggle-visibility-' + index + 1"
                            />
                            <span class="slider round"></span>
                        </label>
                        <label
                            for="'toggle-visibility-' + index + 1"
                            class="ml-2"
                            >Normal</label
                        >
                    </div>
                    <div class="float-right">
                        <button
                            type="button"
                            class="btn"
                            data-toggle="modal"
                            data-target="#tranferModal"
                        >
                            <i class="fas fa-sync-alt"></i>
                        </button>
                        <button
                            class="btn"
                            type="button"
                            data-toggle="collapse"
                            :data-target="'#collapseAccount' + (index + 1)"
                            aria-expanded="false"
                            :aria-controls="'collapseAccount' + (index + 1)"
                        >
                            <i class="fas fa-eye"></i>
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
                                    class="dropdown-item edit"
                                    @click="openForm(acc.id)"
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
                <div class="collapse" :id="'collapseAccount' + (index + 1)">
                    <div class="text-center">
                        <p>Creation date: {{ acc.created_at }}</p>
                        <p>Currency: USD - {{ acc.currency }}</p>
                        <p>
                            Initial amount: {{ acc.currency }}
                            {{ acc.init_amount }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2 my-3">
        <div
            class="modal fade"
            id="formModal"
            tabindex="-1"
            aria-labelledby="formModalLabel"
            data-backdrop="static"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title w-100">
                            <h3 class="text-center" id=" formModalLabel">
                                <span v-if="editMode">EDIT ACCOUNT</span>
                                <span v-else>CREATE NEW ACCOUNT</span>
                            </h3>
                        </div>
                    </div>
                    <div class="modal-body py-1">
                        <Form @submit="handleSubmit">
                            <div class="row">
                                <div class="col-sm-12 my-1">
                                    <label for="name">Name</label>
                                    <div class="input-group">
                                        <input
                                            v-model="form.name"
                                            type="text"
                                            name="name"
                                            id="name"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-sm-12 my-1">
                                    <label for="currency"
                                        >Account currency</label
                                    >
                                    <div class="input-group">
                                        <select
                                            v-model="form.currency"
                                            name="currency"
                                            id="currency"
                                            class="form-control"
                                        >
                                            <option
                                                v-for="curr in currency_arr"
                                                :key="curr.id"
                                                :value="curr.id"
                                            >
                                                {{ curr.type }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-1">
                                    <label for="init_amount">
                                        Init amount
                                    </label>
                                    <div class="input-group">
                                        <input
                                            v-model="form.init_amount"
                                            type="number"
                                            name="init_amount"
                                            id="init_amount"
                                            class="form-control"
                                        />
                                        <span class="ml-2 mt-2">$</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 my-1">
                                    <label for="note">Notes</label>
                                    <div class="input-group">
                                        <textarea
                                            v-model="form.notes"
                                            name="note"
                                            id="note"
                                            rows="4"
                                            class="form-control"
                                            placeholder="Options"
                                        ></textarea>
                                    </div>
                                </div>
                            </div>
                        </Form>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn"
                            data-dismiss="modal"
                            @click="closeForm"
                        >
                            Cancel
                        </button>
                        <button
                            type="button"
                            class="btn btn-primary px-4"
                            @click="abc"
                        >
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <TransferAccount />
    <!-- <AccountFormModal :id="accountId" :editMode="editMode" /> -->
    <!-- <AccountFormModal
        v-if="showModal"
        :title="modalTitle"
        :content="modalContent"
        @close="closeModal"
    /> -->
    <FixedButton :quantity="1" :type="type" :btn="className" />
</template>

<style>
.switch {
    position: relative;
    display: inline-block;
    width: 1.875rem;
    height: 1.125rem;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 13px;
    width: 13px;
    left: 4px;
    bottom: 3px;
    background-color: white;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

input:checked + .slider {
    background-color: #2196f3;
}

input:focus + .slider {
    box-shadow: 0 0 1px #2196f3;
}

input:checked + .slider:before {
    -webkit-transform: translateX(10px);
    -ms-transform: translateX(10px);
    transform: translateX(10px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}
</style>
