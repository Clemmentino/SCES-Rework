        <div class="mt-3">
            <div class="d-flex align-items-center position-relative">
                <div class="">
                    <h4 class="mb-0 fw-bold">Report Panel</h4>
                </div>
                <!-- Button trigger modal -->
                <div class="ms-auto">
                    <button type="button" class="btn btn-success d-inline" data-bs-toggle="modal" data-bs-target="#addReport">
                        <span>Report</span>
                    </button>
                </div>
            </div>
            <!-- MAIN -->
            <div class="card p-3 shadow-sm rounded-2 mt-4">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <form action="#" class="col-md-6 col-12 mb-0 p-0">
                        <div class="input-group">
                            <input type="text" id="search" class="form-control" placeholder="Search report">
                            <button class="btn btn-success" type="button">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card p-2 rounded-3 mb-0 shadow-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="col-2 ps-3">Maintence ID</th>
                            <th scope="col">Header</th>
                            <th scope="col">Reported by</th>
                            <th scope="col">Appliance</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th scope="row" class="ps-3">1</th>
                            <td>Broken light</td>
                            <td>Mark Jhon</td>
                            <td>Lights</td>
                            <td>10/13/25</td>
                            <td><label for="" class="unresolveStatus">Unresolve</label></td>
                            <td class="pe-5"><button class="btn btn-outline-success float-end" type="button"
                                    data-bs-toggle="modal" data-bs-target="#viewReport">View</button></td>
                        </tr>
                        <tr>
                            <th scope="row" class="ps-3">2</th>
                            <td>Faulty aircon</td>
                            <td>Jacob Graham</td>
                            <td>Aircon</td>
                            <td>10/01/25</td>
                            <td><label for="" class="pendingStatus">Pending</label></td>
                            <td class="pe-5"><button class="btn btn-outline-success float-end" type="button"
                                    data-bs-toggle="modal" data-bs-target="#viewReport">View</button></td>
                        </tr>
                        <tr>
                            <th scope="row" class="ps-3">3</th>
                            <td>Fan wont turn on</td>
                            <td>John Loide Cruz</td>
                            <td>Fan</td>
                            <td>09/05/25</td>
                            <td><label for="" class="resolveStatus">Resolve</label></td>
                            <td class="pe-5"><button class="btn btn-outline-success float-end" type="button"
                                    data-bs-toggle="modal" data-bs-target="#viewReport">View</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- ADD REPORT -->
        <div class="modal fade" id="addReport" tabindex="-1" aria-labelledby="viewDetailsLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="viewDetailsLabel">Report</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pe-2">
                        <form class="row g-3">
                            <div>
                                <label for="Name">Header <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div>
                                <label for="Appliance">Appliance <span class="text-danger">*</span></label>
                                <select class="form-select" aria-label="Default select example" required>
                                    <option value="1">Aircon</option>
                                    <option value="2">Fan</option>
                                    <option value="3">Lights</option>
                                    <option value="4">TV</option>
                                </select>
                            </div>
                            <div>
                                <label for="Name">Describe Report<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            </div>
                            <div>
                                <label for="Name">Report date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div>
                                <label for="Name">Building <span class="text-danger">*</span></label>
                                <select class="form-select" aria-label="Building selection">
                                    <option selected disabled>Select Building</option>
                                    <option value="Ground Floor">Academic Building</option>
                                    <option value="Second Floor">Science Building</option>
                                    <option value="Third Floor">NTED Building</option>
                                    <option value="Fourth Floor">IC Building</option>
                                    <option value="Fourth Floor">ILEGG Building</option>
                                    <option value="Fourth Floor">IAAS Building</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="Name">Floor <span class="text-danger">*</span></label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">Ground Floor</option>
                                    <option value="2">Second Floor</option>
                                    <option value="3">Third Floor</option>
                                    <option value="4">Fourth Floor</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="Name">Room <span class="text-danger">*</span></label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">Room 1</option>
                                    <option value="2">Room 2</option>
                                    <option value="3">Room 3</option>
                                    <option value="4">Room 4</option>
                                    <option value="5">Room 5</option>
                                    <option value="6">Room 6</option>
                                    <option value="7">Room 7</option>
                                </select>
                            </div>


                            <div>
                                <label for="Username">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <!-- <div>
                                <label for="Name">Status <span class="text-danger">*</span></label>
                                <select class="form-select" aria-label="Default select example">

                                    <option value="1">Unresolve</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Resolve</option>
                                </select>
                            </div> -->

                            <div class="border-top pb-3 pt-3 d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success " data-bs-dismiss="modal">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- VIEW -->
        <div class="modal fade" id="viewReport" tabindex="-1" aria-labelledby="viewDetailsLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="viewDetailsLabel">Edit User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pe-2">
                        <form class="row g-3">
                            <div>
                                <label for="Name">Header</label>
                                <label for="" class="form-control">Broken lights</label>
                            </div>
                            <div>
                                <label for="Appliance">Appliance</label>
                                <label for="" class="form-control">Lights</label>
                            </div>
                            <div>
                                <label for="Name">Describe Report</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly></textarea>
                            </div>
                            <div>
                                <label for="Name">Report date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" readonly>
                            </div>
                            
                            <div>
                                <label for="Name">Status</label>
                                <select class="form-select" aria-label="Default select example">

                                    <option value="1">Unresolve</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Resolve</option>
                                </select>
                            </div>

                            <div class="border-top pb-3 pt-3 d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>