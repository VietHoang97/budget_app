<script setup>
import { ref } from "vue";

const props = defineProps(["quantity", "type", "btn", "form_id"]);
const emit = defineEmits(["openCreateForm"]);

const createMode = ref(true);
const openModal = () => {
    emit("openCreateForm", createMode);
};
const secondBtn = 2;
</script>

<template>
    <div
        v-for="num in props.quantity"
        :key="num"
        class="position-fixed"
        style="right: 0; margin-inline-end: 20px"
        :style="num == secondBtn ? 'bottom: 160px' : 'bottom: 90px;'"
    >
        <button
            type="button"
            data-toggle="modal"
            :data-target="'#' + props.form_id[num]"
            class="btn rounded-circle border"
            :class="props.btn[num]"
            style="z-index: 100; height: 3.5rem; width: 3.5rem"
            @click="openModal"
        >
            <i class="fas" :class="props.type[num]"></i>
        </button>
    </div>
</template>
