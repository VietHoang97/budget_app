<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="card bg-white">
                        <div class="contact m-3">
                            <div>
                                <b> Feedback & Support </b>
                            </div>
                            <span>
                                If you have any question, contact our customer
                                service at support.web@fastbudget.it
                            </span>
                        </div>
                        <hr />
                        <div class="languge m-3">
                            <div class="row">
                                <div class="col-lg-3">Languge</div>
                                <div class="col-lg-6">
                                    <select
                                        name="languge"
                                        id="languge"
                                        class="form-select"
                                    >
                                        <option value="1">English</option>
                                        <option value="2">Tiếng Việt</option>
                                        <option value="3">日本語</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <button
                                        class="btn float-end text-uppercase text-info"
                                    >
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="currency m-3">
                            <div class="row">
                                <div class="col-lg-3">Currency</div>
                                <div class="col-lg-6">
                                    <select
                                        name="currency"
                                        id="currency"
                                        class="form-select"
                                    >
                                        <option value="1">USD</option>
                                        <option value="2">VND</option>
                                        <option value="3">Yen</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <button
                                        class="btn float-end text-uppercase text-info"
                                    >
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="general-setting m-3">
                            <b> General setting </b>
                            <div class="row month-setting my-2">
                                <div class="col-lg-3">First day of month:</div>
                                <div class="col-lg-6 offset-lg-1">
                                    <select
                                        name=""
                                        id="choose-month"
                                        class="form-select"
                                    >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row week-setting my-2">
                                <div class="col-lg-3">First day of week:</div>
                                <div class="col-lg-6 offset-lg-1">
                                    <select
                                        name=""
                                        id="choose-day"
                                        class="form-select"
                                    >
                                        <option value="1">Monday</option>
                                        <option value="2">Saturday</option>
                                        <option value="3">Sunday</option>
                                    </select>
                                </div>
                            </div>

                            <div class="toggle-button">
                                <div>
                                    <i
                                        class="fa fa-toggle-on fs-3 text-primary align-middle"
                                        aria-hidden="true"
                                    ></i>
                                    <span class="fs-6"
                                        >Transactions - Set the time of the
                                        transactions</span
                                    >
                                </div>
                                <div>
                                    <i
                                        class="fa fa-toggle-on fs-3 text-primary align-middle"
                                        aria-hidden="true"
                                    ></i>
                                    <span class="fs-6">
                                        Display a small icon to remember you to
                                        check the transactions with your bank
                                        statement (Checked / Not checked)
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">Default</div>
                                    <div class="row col-lg-8">
                                        <div class="col-lg-6">
                                            <input
                                                type="radio"
                                                name="checked"
                                                id="checked"
                                            />
                                            <label for="checked"
                                                >Remember</label
                                            >
                                        </div>
                                        <div class="col-lg-6">
                                            <input
                                                type="radio"
                                                name="notRemember"
                                                id="notChecked"
                                            />
                                            <label for="checked"
                                                >Not remember</label
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button
                                    class="btn float-end text-uppercase text-info"
                                >
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
