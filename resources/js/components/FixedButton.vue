<script setup>
const props = defineProps({
    quantity: Number,
    type: String,
    class: String,
});
const bottom = props.quantity == 1 ? "130px" : "170px";
</script>

<template>
    <div
        v-for="num in props.quantity"
        class="position-fixed"
        style="right: 0; margin-inline-end: 20px"
        :style="bottom"
    >
        <button
            type="button"
            data-toggle="modal"
            data-target="#formModal"
            class="btn rounded-circle border"
            :class="props.class"
            style="z-index: 100; height: 3.5rem; width: 3.5rem"
        >
            <i class="fas" :class="props.type"></i>
        </button>
    </div>
</template>
