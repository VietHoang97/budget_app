<script setup>
import { ref, onMounted, computed } from "vue";
import moment from "moment";

const currentMonth = ref(moment());
const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

const daysInMonth = computed(() => {
    const days = currentMonth.value.daysInMonth();
    return Array.from({ length: days }, (_, i) => i + 1);
});

const previousMonthDays = computed(() => {
    const firstDayOfMonth = currentMonth.value.startOf("month").format("d");
    const daysInPrevMonth = currentMonth.value
        .subtract(1, "month")
        .daysInMonth();
    const leadingBlanks = Array.from(
        { length: parseInt(firstDayOfMonth) },
        (_, i) => daysInPrevMonth - i
    );
    return leadingBlanks.reverse();
});

const nextMonthDays = computed(() => {
    const lastDayOfMonth = currentMonth.value.endOf("month").format("d");
    const leadingBlanks = Array.from(
        { length: 6 - parseInt(lastDayOfMonth) },
        (_, i) => i + 1
    );
    return leadingBlanks;
});

const previousMonth = () => {
    currentMonth.value = moment(currentMonth.value).subtract(1, "month");
};

const nextMonth = () => {
    currentMonth.value = moment(currentMonth.value).add(1, "month");
};

const selectDate = (day) => {
    alert(
        `Selected date: ${currentMonth.value.format(
            "MMMM"
        )} ${day}, ${currentMonth.value.format("YYYY")}`
    );
};
</script>
<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Calendar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="d-flex justify-content-between my-2">
                    <button class="btn" @click="previousMonth">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <h3>{{ currentMonth.format("MMMM YYYY") }}</h3>
                    <button class="btn" @click="nextMonth">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div class="card p-3">
                <div class="days">
                    <div v-for="day in daysOfWeek" :key="day" class="day">
                        {{ day }}
                    </div>
                    <div
                        v-for="prevMonthDay in previousMonthDays"
                        :key="prevMonthDay"
                        class="day blurred unclickable"
                    >
                        {{ prevMonthDay }}
                    </div>
                    <div
                        v-for="day in daysInMonth"
                        :key="day"
                        class="day"
                        @click="selectDate(day)"
                    >
                        {{ day }}
                    </div>
                    <div
                        v-for="nextMonthDay in nextMonthDays"
                        :key="nextMonthDay"
                        class="day blurred unclickable"
                    >
                        {{ nextMonthDay }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.days {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 5px;
}
.day {
    padding: 10px;
    border: 1px solid #ddd;
    cursor: pointer;
}
.blurred {
    opacity: 0.5;
}

.unclickable {
    pointer-events: none;
}
</style>
