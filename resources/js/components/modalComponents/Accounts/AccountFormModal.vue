<script setup>
import { ref, onMounted, reactive, onUpdated, toRef } from "vue";

const props = defineProps(["form_id", "editMode"]);
const currency_arr = ref([]);
const editMode = ref(props.editMode == true ? true : false);

let form = reactive({
    name: "",
    currency: "",
    balance: "",
    init_amount: "",
    notes: "",
});

const getCurrencies = () => {
    axios.get("/api/accounts/get-currencies").then((res) => {
        currency_arr.value = res.data;
    });
};

console.log("prop", props.editMode);
console.log("init", editMode.value);
const closeForm = () => {
    editMode.value = !editMode.value;
    console.log("close", editMode.value);
};

const getEditAccounts = () => {
    axios.get(`/api/accounts/${props.form_id}/edit`).then(({ data }) => {
        form.name = data.name;
        form.currency = data.currency;
        form.init_amount = data.init_amount;
        form.notes = data.notes;
    });
};

const createAccount = () => {
    axios.post("/api/accounts/create", form).then((res) => {});
};

const editAccount = () => {
    axios.get(`/api/accounts/${props.id}/edit`, form).then((res) => {});
};

const handleSubmit = () => {
    console.log("click", acc_id);
    if (props.editMode) {
        editAccount();
    } else {
        createAccount();
    }
};

const getExchangeRate = () => {
    /*
    http://apilayer.net/api/live

    ? access_key = 05ccc0be7943e856d1c4485d45884edc
    & currencies = EUR,GBP,CAD,PLN
    & source = USD
    & format = 1
    */
    // axios
    //     .get("/api/currencyListquotes")
    //     .then((response) => {
    //         console.log(response.data);
    //     })
    //     .catch((error) => {});
};

onMounted(() => {
    getCurrencies();
    // getExchangeRate();
});

onUpdated(() => {
    console.log("update", editMode.value);
    if ((editMode.value = true && props.form_id)) {
        getEditAccounts();
    }
});
</script>

<template>
    <div
        class="modal fade"
        id="formModal"
        tabindex="-1"
        aria-labelledby=" formModalLabel"
        data-backdrop="static"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title w-100">
                        <h3 class="text-center" id=" formModalLabel">
                            <span v-if="editMode == true">EDIT ACCOUNT</span>
                            <span v-else>CREATE NEW ACCOUNT</span>
                        </h3>
                    </div>
                </div>
                <div class="modal-body py-1">
                    <form @submit.prevent="handleSubmit">
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
                                <label for="currency">Account currency</label>
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
                                <label for="init_amount"> Init amount </label>
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
                    </form>
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
</template>
