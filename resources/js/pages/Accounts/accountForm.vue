<script setup>
import { ref, onMounted, reactive } from "vue";
import { useRoute } from "vue-router";

const route = useRoute();
const acc_id = ref(route.params.id);
const editMode = ref(route.params.id ? true : false);
const currency_arr = ref([]);

let form = reactive({
    currency: "",
    init_amount: "",
    notes: "",
});

const getCurrencies = () => {
    axios.get("/api/accounts/get-currencies").then((res) => {
        currency_arr.value = res.data;
    });
};

const getAccounts = () => {
    axios.get(`/api/accounts/${acc_id.value}/edit`).then(({ data }) => {
        form.name = data.name;
        form.currency = data.currency;
        form.init_amount = data.init_amount;
        form.notes = data.notes;
        console.log("check", form);
    });
};

const createAccount = () => {
    axios
        .post("/api/accounts/create", form)
        .then((res) => {
            console.log("create success");
            // router.push("/accounts");
        })
        .catch((e) => {
            console.log(e);
        });
};

const editAccount = () => {
    console.log("check", form);
    axios
        .put(`/api/accounts/${acc_id.value}/edit`, form)
        .then((res) => {
            console.log("update success");
        })
        .catch((e) => {
            console.log(e);
        });
};

const handleSubmit = () => {
    if (editMode.value) {
        editAccount();
    } else {
        createAccount();
    }
};
/*

const getExchangeRate = () => {
    /*
    http://apilayer.net/api/live

    ? access_key = 05ccc0be7943e856d1c4485d45884edc
    & currencies = EUR,GBP,CAD,PLN
    & source = USD
    & format = 1

    // axios
    //     .get("/api/currencyListquotes")
    //     .then((response) => {
    //         console.log(response.data);
    //     })
    //     .catch((error) => {});
};
*/
onMounted(() => {
    getCurrencies();
    if (acc_id.value) {
        getAccounts();
    }
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
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">
                            <a href="/accounts">Account</a>
                        </li>
                        <li class="breadcrumb-item active" v-if="editMode">
                            Edit Account
                        </li>
                        <li class="breadcrumb-item active" v-else>
                            Create Account
                        </li>
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
                        <h3 class="text-center" id=" formModalLabel">
                            <span v-if="editMode == true">EDIT ACCOUNT</span>
                            <span v-else>CREATE NEW ACCOUNT</span>
                        </h3>
                    </div>
                    <form @submit.prevent="handleSubmit" class="pb-3">
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
                                        :readonly="editMode"
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
                                <label for="notes">Notes</label>
                                <div class="input-group">
                                    <textarea
                                        v-model="form.notes"
                                        name="notes"
                                        id="notes"
                                        rows="4"
                                        class="form-control"
                                        placeholder="Options"
                                    ></textarea>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
