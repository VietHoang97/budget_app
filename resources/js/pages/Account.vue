<script setup>
import { ref, onMounted } from "vue";
import AccountFormModal from "@/components/modalComponents/Accounts/AccountFormModal.vue";
import TransferAccount from "@/components/modalComponents/Accounts/TransferAccount.vue";
import FixedButton from "@/components/FixedButton.vue";

const accounts = ref({});
const type = "fa-plus";
const className = "btn-primary";
const accountId = ref();
const editMode = ref(false);

const getAccounts = () => {
    axios.get("/api/accounts").then((res) => {
        accounts.value = res.data;
    });
};

// const openForm = (id) => {
//     accountId.value = id;
// };

const showModal = ref(false);
const modalTitle = ref("Tiêu đề Modal");
const modalContent = ref("Nội dung của modal");

const openForm = () => {
    const modalRef = AccountFormModal.setup(); // Gọi setup() của component Modal
    modalRef.show();
};

const closeModal = () => {
    showModal.value = false;
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
                                    :id="acc.id"
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
    <TransferAccount />
    <!-- <AccountFormModal :id="accountId" :editMode="editMode" /> -->
    <AccountFormModal />
    <FixedButton :quantity="1" :type="type" :class="className" />
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
