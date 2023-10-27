<script setup>
import $ from "jquery";
const toggleCircle = function (e) {
    if ($(e.children).attr("class").includes("on")) {
        $(e.children).removeClass("fa-toggle-on");
        $(e.children).addClass("fa-toggle-off");
    } else {
        $(e.children).removeClass("fa-toggle-off");
        $(e.children).addClass("fa-toggle-on");
    }
};
</script>

<template>
    <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2 my-3">
        <!-- Modal -->
        <div
            class="modal fade"
            id="tranferModal"
            tabindex="-1"
            aria-labelledby=" tranferModalLabel"
            data-backdrop="static"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title w-100">
                            <h5 class="text-center" id=" tranferModalLabel">
                                Transfer between accounts
                            </h5>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-5">
                                    <label for="transfer_amount"
                                        >Transfer</label
                                    >
                                    <div class="input-group">
                                        <input
                                            type="number"
                                            name="transfer_amount"
                                            id="transfer_amount"
                                            class="form-control"
                                        />
                                        <span class="m-1">$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 my-3">
                                    <label for="transfer_account">
                                        From <span>Wallet</span> to
                                    </label>
                                    <div class="input-group">
                                        <select
                                            type="text"
                                            name="transfer"
                                            id="transfer_account"
                                            class="form-control"
                                        >
                                            <option value="1">
                                                Bank Account
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-6">
                                    <label for="date">Date</label>
                                    <div class="input-group">
                                        <input
                                            type="date"
                                            name="date"
                                            id="date"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="time">Time</label>
                                    <div class="input-group">
                                        <input
                                            type="time"
                                            name="time"
                                            id="time"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-12">
                                    <label for="notes">Notes</label>
                                    <div class="input-group">
                                        <textarea
                                            name="notes"
                                            id="notes"
                                            rows="3"
                                            class="form-control"
                                            placeholder="Option"
                                        ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-12">
                                    <span
                                        class="btn text-primary"
                                        @click="toggleCircle($event)"
                                    >
                                        <i class="fas fa-toggle-on"></i>
                                    </span>
                                    <span>Checked</span>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-12">
                                    <span
                                        class="btn text-primary"
                                        @click="toggleCircle($event)"
                                    >
                                        <i class="fas fa-toggle-on"></i>
                                    </span>
                                    <span>Scheduled transfer</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-primary px-3">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
