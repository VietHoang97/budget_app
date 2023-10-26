<script setup>
const props = defineProps(["quantity", "type", "btn"]);
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
            data-target="#formCreateModal"
            class="btn rounded-circle border"
            :class="props.btn[num]"
            style="z-index: 100; height: 3.5rem; width: 3.5rem"
        >
            <i class="fas" :class="props.type[num]"></i>
        </button>
    </div>
</template>
