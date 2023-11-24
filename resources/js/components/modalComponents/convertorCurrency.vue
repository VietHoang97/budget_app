<script setup>
import { reactive, ref, onMounted } from "vue";

const currencyArr = ref([]);
const currencyResult = ref("");
const currencyListquotes = ref("");
const loading = false;
const currencyFrom = ref("");
const currencyTo = ref("");
const valueFrom = ref("");
const valueTo = ref("");

// Lấy danh sách đơn vị tiền tệ
const listCurrency = () => {
    axios
        .get("/api/currencyListquotes.value")
        .then((response) => {
            currencyListquotes.value = response.data;
        })
        .catch((error) => {});
};

const numberWithCommas = (x) => {
    return x.toFixed(3).replace("/\d(?=(\d{3})+\.)/g, '$&,'");
};

// Đổi ngược lại 2 đơn vị tiền tệ
const changePosition = () => {
    let from = document.getElementById("currency_from");
    let currency_from = from.options[from.selectedIndex].text;

    let to = document.getElementById("currency_to");
    let currency_to = to.options[to.selectedIndex].text;

    from.value = currency_to;
    to.value = currency_from;
};

// Truyền lên API chuyển đổi với tham số là số tiền, đơn vị tiền tệ
const getCurrencyChange = () => {
    loading = true;
    let amount = document.getElementById("amount").value;
    if (!amount || amount == 0) {
        amount = 1;
    }
    let from = document.getElementById("currency_from");
    let currency_from = from.options[from.selectedIndex].text;
    let to = document.getElementById("currency_to");
    let currency_to = to.options[to.selectedIndex].text;

    getCurrencyConverter(amount, currency_from, currency_to);
};

// Lấy kết quả chuyển đổi
const getCurrencyConverter = (amount, currency_from, currency_to) => {
    loading = true;
    axios
        .get("/api/currencyConverter/" + currency_from + "/" + currency_to)
        .then((response) => {
            let data = response.data;

            if (data) {
                data = amount * data;
                currencyResult.value =
                    numberWithCommas(data) + " " + currency_to;
            } else {
                currencyResult.value = data;
            }
            loading.value = false;
        })
        .catch((error) => {});
};

onMounted(() => {
    listCurrency();
});
</script>
<template>
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">CURRENCY CONVERTER</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-7">
                            <label for="value_from">Value</label>
                            <div class="input-group">
                                <input
                                    v-model="valueFrom"
                                    type="number"
                                    name="value_from"
                                    id="value_from"
                                />
                                <span>$</span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <label for="currency_from">Currency</label>
                            <div class="input-group">
                                <select
                                    v-model="currencyFrom"
                                    name="currency_from"
                                    id="currency_from"
                                    class="form-control"
                                >
                                    <option
                                        v-for="curr in currencyArr"
                                        :key="curr.id"
                                        :value="curr.id"
                                    >
                                        {{ curr.type }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-3 text-center">
                            <i
                                class="fas fa-exchange-alt"
                                style="transform: rotate(-90deg)"
                            ></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <label for="value_to">Value</label>
                            <div class="input-group">
                                <input
                                    v-model="valueTo"
                                    type="number"
                                    name="value_to"
                                    id="value_to"
                                />
                                <span>$</span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <label for="currency_to">Currency</label>
                            <div class="input-group">
                                <select
                                    v-model="currencyTo"
                                    name="currency_to"
                                    id="currency_to"
                                    class="form-control"
                                >
                                    <option
                                        v-for="curr in currencyArr"
                                        :key="curr.id"
                                        :value="curr.id"
                                    >
                                        {{ curr.type }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-light text-info text-uppercase"
                        data-dismiss="modal"
                    >
                        Cancel
                    </button>
                    <button type="button" class="btn btn-primary">OK</button>
                </div>
            </div>
        </div>
    </div>
</template>
