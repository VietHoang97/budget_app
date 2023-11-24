<script setup>
import { onMounted, ref } from "vue";

const categories = ref([]);

const getCategories = () => {
    axios.get("/api/categories").then((response) => {
        categories.value = response.data;
    });
};

onMounted(() => {
    getCategories();
});
</script>
<template>
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase">
                        Select a transaction template
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="col-sm-1">
                        <img
                            src="https://webapp.fastbudget.app/static/icons/ic_cup.svg"
                            alt="cup"
                        />
                    </div>
                    <div class="col-sm-11">bar</div>
                </div>
            </div>
        </div>
    </div>
</template>
