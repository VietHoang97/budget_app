<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Transactions</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Transactions</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-none d-lg-block col-lg-3">
                    <div class="card">
                        <div class="text-center">SEARCH</div>
                        <div>
                            <div class="m-2">
                                <div>
                                    <label for="category">Category</label>
                                </div>
                                <textarea
                                    class="form-control"
                                    name="category"
                                    id="category"
                                    rows="2"
                                ></textarea>
                            </div>
                            <div class="m-2">
                                <div>
                                    <label for="time">From / To</label>
                                </div>
                                <input
                                    class="form-control"
                                    name="time"
                                    id="time"
                                />
                            </div>
                            <div class="m-2">
                                <div>
                                    <label for="note">Notes</label>
                                </div>
                                <input
                                    class="form-control"
                                    name="note"
                                    id="note"
                                />
                            </div>
                            <div class="m-2">
                                <div>
                                    <span>Checked / Not checked</span>
                                </div>
                                <div class="my-1">
                                    <input type="checkbox" id="check" />
                                    <label for="check">Checked</label>
                                </div>
                                <div class="my-1">
                                    <input type="checkbox" id="nocheck" />
                                    <label for="nocheck">Not Checked</label>
                                </div>
                            </div>
                            <div class="m-2">
                                <div>
                                    <span>Types</span>
                                </div>
                                <div class="my-1">
                                    <input type="checkbox" id="expenses" />
                                    <label for="expenses">Expenses</label>
                                </div>
                                <div class="my-1">
                                    <input type="checkbox" id="income" />
                                    <label for="income">Income</label>
                                </div>
                                <div class="my-1">
                                    <input type="checkbox" id="tranfer" />
                                    <label for="tranfer"
                                        >Transfer between accounts</label
                                    >
                                </div>
                            </div>
                            <div class="float-right">
                                <button class="btn text-info">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-9">
                    <div class="card">
                        <div class="d-flex justify-content-between mx-4 my-1">
                            <div class="text-left">
                                <button class="btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                            </div>
                            <div>
                                <span>October 2023</span>
                            </div>
                            <div class="text-right">
                                <button class="btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div class="text-left">
                                    Transactions:
                                    <span>15</span>
                                </div>
                                <div class="text-right">
                                    Total:
                                    <span class="text-success">$1,060.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div
                                class="d-flex justify-content-between my-2 item_selector_light px-3 py-1"
                            >
                                <div>image</div>
                                <div class="d-block w-100">
                                    <div class="row mx-2">
                                        <div class="col text-left p-0">
                                            Energy bill
                                        </div>
                                        <div class="col text-right p-0">
                                            -$30.00
                                        </div>
                                    </div>
                                    <div class="row mx-2">
                                        <div class="col text-left p-0">
                                            Wallet
                                        </div>
                                        <div class="col text-right p-0">
                                            12/10/2023
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="px-2">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </div>
                                    <div
                                        class="template_tr_color_ex ml-2"
                                    ></div>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-between my-2 item_selector_light px-3 py-1"
                            >
                                <div>image</div>
                                <div class="d-block w-100">
                                    <div class="row mx-2">
                                        <div class="col text-left p-0">
                                            Energy bill
                                        </div>
                                        <div class="col text-right p-0">
                                            -$30.00
                                        </div>
                                    </div>
                                    <div class="row mx-2">
                                        <div class="col text-left p-0">
                                            Wallet
                                        </div>
                                        <div class="col text-right p-0">
                                            12/10/2023
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="px-2">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </div>
                                    <div
                                        class="template_tr_color_in ml-2"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="float-left">
                            <button class="btn">
                                <i class="fas fa-th-list"></i>
                            </button>
                            <button class="btn">
                                <i class="fas fa-list"></i>
                            </button>
                            <button class="btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="float-right">
                            <button class="btn">
                                <i class="fas fa-upload"></i>
                            </button>
                            <button class="btn">
                                <i class="fas fa-download"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
label {
    margin-bottom: 0 !important;
}

.item_selector_light:hover {
    background-color: #f9f9f9;
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.08);
    color: #000;
    text-decoration: none;
}

.template_tr_color_in {
    width: 5px;
    height: 45px;
    background-color: rgb(76, 175, 80);
}
.template_tr_color_ex {
    width: 5px;
    height: 45px;
    background-color: rgb(244, 67, 54);
}
</style>
