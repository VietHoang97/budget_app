<template>
    <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2 my-3">
        <!-- Button trigger modal -->
        <button
            type="button"
            class="btn btn-primary"
            data-toggle="modal"
            data-target="#exampleModal"
        >
            Open modal
        </button>

        <!-- Modal -->
        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            data-backdrop="static"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title w-100">
                            <h5 class="text-center" id="exampleModalLabel">
                                PAYMENT
                            </h5>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="transfer_from">From</label>
                                    <div class="input-group">
                                        <select
                                            type="text"
                                            name="transfer_from"
                                            id="transfer_from"
                                            class="form-control"
                                        >
                                            <option value="1">
                                                Bank Account
                                            </option>
                                            <option value="2">Wallet</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="mt-4">to "Credit Card"</span>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-center align-items-center mt-3"
                            >
                                <span>Amount due</span>
                                <i class="fas fa-arrow-right mx-2"></i>
                                <span>01/10/2023</span>
                                <span>-</span>
                                <span>31/10/2023:</span>
                                <span>$49.00</span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 my-3">
                                    <label for="transfer_value"> Value </label>
                                    <div class="input-group">
                                        <input
                                            type="number"
                                            name="transfer_value"
                                            id="transfer_value"
                                            class="form-control"
                                        />
                                        <span class="ml-2 mt-2">$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 my-3">
                                    <label for="interest_rate">
                                        Interest rate
                                    </label>
                                    <div class="input-group">
                                        <input
                                            type="number"
                                            name="interest_rate"
                                            id="interest_rate"
                                            class="form-control"
                                        />
                                        <span class="ml-2 mt-2">%</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-center align-items-center mt-2"
                            >
                                <span>Total Payment:</span>
                                <span class="ml-2">$00.00</span>
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
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-primary px-4">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
