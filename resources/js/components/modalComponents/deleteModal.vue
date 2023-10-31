<script setup>
const props = defineProps(["pass_id"]);

const deleteAccount = () => {
    axios.delete(`/api/accounts/${props.pass_id}`).then((res) => {});
};
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title w-100">
                        <h3 class="text-center" id="deleteModalLabel">
                            <span>DELETE ACCOUNT</span>
                        </h3>
                    </div>
                </div>
                <div class="modal-body py-1">....</div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-primary text-uppercase"
                        data-dismiss="modal"
                    >
                        Back
                    </button>
                    <button
                        type="button"
                        class="btn btn-danger px-4"
                        @click="deleteAccount"
                    >
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
