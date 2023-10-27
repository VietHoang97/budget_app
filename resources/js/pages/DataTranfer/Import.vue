<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Import</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Import</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-2">
            <div class="card p-3">
                <h4 class="text-center text-uppercase mb-3">
                    Import CSV/XLS file
                </h4>
                <div class="my-3">
                    <input type="file" name="file" id="file" />
                </div>
                <div class="row my-3">
                    <div class="col-sm-2 d-flex align-items-center">
                        Date format:
                    </div>
                    <div class="col-sm-5 d-flex align-items-center">
                        <select name="type" id="type" class="form-control">
                            <option value="1">12/10/2023</option>
                            <option value="2">10/12/2023</option>
                            <option value="3">2023/10/12</option>
                        </select>
                        <span class="ml-2">(Today)</span>
                    </div>
                </div>
                <div class="custom-control custom-checkbox my-3">
                    <input
                        type="checkbox"
                        class="custom-control-input"
                        id="header"
                        name="header"
                    />
                    <label
                        class="custom-control-label form-check-label"
                        for="header"
                        >Header row present</label
                    >
                </div>
                <div class="text-right">
                    <button class="btn btn-primary text-uppercase">
                        Import CSV/XLS file
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
