<script setup>
import { ref } from "vue";

const props = defineProps(["quantity", "type", "btn", "form_id"]);

const openForm = () => {
    window.open(props.form_id, "_self");
};
const secondBtn = 2;
</script>

<template>
    <div
        v-for="num in props.quantity"
        :key="num"
        class="position-fixed"
        style="right: 0; margin-inline-end: 20px"
        :style="num == secondBtn ? 'bottom: 140px' : 'bottom: 70px;'"
    >
        <button
            type="button"
            class="btn rounded-circle border"
            :class="props.btn[num]"
            style="z-index: 100; height: 3.5rem; width: 3.5rem"
            @click="openForm"
        >
            <i class="fas" :class="props.type[num]"></i>
        </button>
    </div>
</template>
