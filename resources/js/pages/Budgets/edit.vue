<script setup>
import { ref, reactive, onMounted } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const accounts = ref({});
const form = reactive({
    amount: "",
    category_id: "",
    account_id: "",
});

const getBudgets = () => {
    axios.get(`/api/budgets/${route.params.id}/edit`).then(({ data }) => {
        form.amount = data.amount;
        form.category_id = data.category_id;
        form.account_id = data.account_id;
    });
};

const getAccounts = () => {
    axios.get("/api/accounts").then((res) => {
        accounts.value = res.data;
    });
};
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
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
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
            <div class="card">
                <div class="card-body py-1">
                    <div class="py-2">
                        <h4 class="text-center" id=" formModalLabel">
                            <span>EDIT BUDGETS</span>
                        </h4>
                        <div class="text-center">
                            Duration:
                            <span>Weekly budget</span>
                        </div>
                    </div>
                    <form @submit.prevent="handleSubmit" class="pb-3">
                        <div class="row">
                            <div class="col-sm-6 mr-2 my-2">
                                <label for="amount">Budget amount</label>
                                <div class="input-group">
                                    <input
                                        type="text"
                                        name="amount"
                                        id="amount"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                            <div class="d-flex mt-4 align-items-center">
                                <span class="">$</span>
                            </div>
                            <div class="col-sm-6 mr-2 my-2">
                                <label for="category">Category</label>
                                <div class="input-group">
                                    <input
                                        type="text"
                                        name="category"
                                        id="category"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-6 my-2">
                                <label for="acount">Account</label>
                                <div class="input-group">
                                    <select
                                        name="acount"
                                        id="acount"
                                        class="form-control"
                                    >
                                        <option value="">All Accounts</option>
                                        <option value="1">Credit Card</option>
                                        <option value="2">Wallets</option>
                                        <option value="3">Bank Account</option>
                                    </select>
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
