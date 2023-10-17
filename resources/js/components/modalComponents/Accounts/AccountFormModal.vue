<script setup>
import { ref, onMounted, watch } from "vue";
import VueModal from "vue-modal";

const props = defineProps({
    showModal: Boolean,
    editMode: Boolean,
});

const showModal = ref(false);

const closeModal = () => {
    showModal.value = false;
};
const form = ref({
    name: "",
    currency: "",
    balance: "",
    init_amount: "",
    notes: "",
});
const acc_id = ref(null);

const currency_arr = ref([]);

const getCurrencies = () => {
    axios.get("/api/accounts/get-currencies").then((res) => {
        currency_arr.value = res.data;
    });
};

const getAccounts = () => {
    axios.get(`/api/accounts/${props.id}/edit`).then((res) => {
        form.name = res.data.name;
        form.currency = res.data.currency;
        form.init_amount = res.data.init_amount;
        form.notes = res.data.notes;
        acc_id.value = res.data.id;
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

watch(
    () => props.id,
    (newId, oldId) => {
        if (newId !== oldId) {
            getAccounts();
        }
    }
);
</script>

<template>
    <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2 my-3">
        <!-- <div
            class="modal fade"
            id="formModal"
            tabindex="-1"
            aria-labelledby=" formModalLabel"
            data-backdrop="static"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg"> -->
        <vue-modal :show="showModal" @close="closeModal">
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

                    {{ form }}
                </div>
            </div>
        </vue-modal>
    </div>
    <!-- </div>
    </div> -->
</template>
