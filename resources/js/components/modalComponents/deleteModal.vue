<script setup>
import { ref, onMounted } from "vue";
const props = defineProps(["pass_id"]);
const name = ref("");

const getAccounts = () => {
    axios.get(`/api/accounts/${props.pass_id}/edit`).then(({ data }) => {
        name.value = data.name;
    });
};
const deleteAccount = () => {
    axios
        .delete(`/api/accounts/${props.pass_id}`)
        .then((res) => {
            console.log("deleted success!");
        })
        .catch((e) => {
            console.log("error", e);
        });
};
onMounted(() => {
    getAccounts();
});
</script>

<template>
    <div
        class="modal fade"
        id="deleteModal"
        tabindex="-1"
        aria-labelledby="deleteModalLabel"
        data-backdrop="static"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title w-100">
                        <h3 class="text-left pl-2" id="deleteModalLabel">
                            DELETE
                            <span class="text-uppercase">" {{ name }} "</span>
                        </h3>
                    </div>
                </div>
                <div class="modal-body pt-2 pb-4">
                    <span class="pl-3">
                        All income and expenses associated with this account
                        will be erased.
                    </span>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-primary text-uppercase px-4"
                        data-dismiss="modal"
                    >
                        Back
                    </button>
                    <button
                        type="button"
                        class="btn btn-danger px-4"
                        data-dismiss="modal"
                        @click="deleteAccount"
                    >
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
