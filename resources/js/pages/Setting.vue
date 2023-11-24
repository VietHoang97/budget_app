<script setup>
import { onMounted, reactive, ref } from "vue";

const currenArr = ref([]);
const settings = ref([]);

const form = reactive({
    lang: 1,
    currency: 1,
    start_week: 1,
    set_time: 1,
    show_icon: 1,
});

const getCurrencies = () => {
    axios.get("/api/accounts/get-currencies").then((response) => {
        currenArr.value = response.data;
    });
};

const getSetting = () => {
    axios.get("/api/settings").then((response) => {
        settings.value = response.data;
    });
};

onMounted(() => {
    getCurrencies();
});
</script>

<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="card bg-white">
                        <div class="contact m-3">
                            <div>
                                <b> Feedback & Support </b>
                            </div>
                            <span>
                                If you have any question, contact our customer
                                service at support.web@fastbudget.it
                            </span>
                        </div>
                        <hr />
                        <div class="languge mx-2">
                            <div class="row">
                                <div class="col-lg-3">Languge</div>
                                <div class="col-lg-6">
                                    <select
                                        v-model="form.lang"
                                        name="languge"
                                        id="languge"
                                        class="form-select"
                                    >
                                        <option value="1">English</option>
                                        <option value="2">Tiếng Việt</option>
                                        <option value="3">日本語</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 text-right">
                                    <button
                                        class="btn text-uppercase text-info"
                                    >
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="currency mx-2">
                            <div class="row">
                                <div class="col-lg-3">Currency</div>
                                <div class="col-lg-6">
                                    <select
                                        v-model="form.currency"
                                        name="currency"
                                        id="currency"
                                        class="form-control"
                                    >
                                        <option
                                            v-for="curr in currenArr"
                                            :key="curr.id"
                                            :value="curr.id"
                                        >
                                            {{ curr.type }}
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-3 text-right">
                                    <button
                                        class="btn text-uppercase text-info"
                                    >
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="general-setting mx-2">
                            <b> General setting </b>
                            <div class="row week-setting my-3">
                                <div class="col-lg-3">First day of week:</div>
                                <div class="col-lg-3 offset-lg-1">
                                    <select
                                        v-model="form.start_week"
                                        name=""
                                        id="choose-day"
                                        class="form-control"
                                    >
                                        <option value="1">Monday</option>
                                        <option value="2">Sunday</option>
                                    </select>
                                </div>
                            </div>

                            <div class="toggle-button">
                                <div class="my-3">
                                    <label for="set_time">
                                        <i
                                            class="fa fa-toggle-on fs-3 text-primary align-middle"
                                            aria-hidden="true"
                                        ></i>
                                    </label>
                                    <input
                                        type="hidden"
                                        name="set_time"
                                        v-model="form.set_time"
                                    />
                                    <span class="ml-2 fs-6"
                                        >Transactions - Set the time of the
                                        transactions</span
                                    >
                                </div>
                                <div class="my-3">
                                    <label for="show_icon">
                                        <i
                                            class="fa fa-toggle-on fs-3 text-primary align-middle"
                                            aria-hidden="true"
                                        ></i>
                                    </label>
                                    <input
                                        type="hidden"
                                        name="show_icon"
                                        v-model="form.show_icon"
                                    />
                                    <span class="ml-2 fs-6">
                                        Display a small icon to remember you to
                                        check the transactions with your bank
                                        statement (Checked / Not checked)
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 ml-4 mt-2">
                                        Default:
                                    </div>
                                    <div class="row col-lg-8">
                                        <div class="col-lg-6">
                                            <select
                                                name="show_icon"
                                                id="show_icon"
                                                class="form-control"
                                            >
                                                <option value="1">
                                                    Checked
                                                </option>
                                                <option value="2">
                                                    Not Checked
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2 text-right">
                                <button class="btn btn-primary text-uppercase">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
