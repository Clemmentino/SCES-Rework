<!-- Control Panel Header -->
<div class="control-panel-header">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div>
            <h4 class="page-title mb-1">Control Panel</h4>
            <p class="page-subtitle mb-0">Monitor and manage all appliances across buildings</p>
        </div>
        <button type="button" class="btn btn-success btn-add-appliance" data-bs-toggle="modal" data-bs-target="#addAppliance">
            <i class="bi bi-plus-circle me-2"></i>Add Appliance
        </button>
    </div>
</div>



<!-- Add Appliance Modal -->
<div class="modal fade" id="addAppliance" tabindex="-1" aria-labelledby="AddAppliance" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modern-modal">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title mb-1">Add Appliance</h5>
                    <p class="modal-subtitle mb-0">Register a new appliance to the system</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="modern-form">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputBuilding" class="form-label">Building</label>
                            <select class="form-select" id="inputBuilding" required>
                                <option value="" selected disabled>Select Building</option>
                                <option value="Academic Building">Academic Building</option>
                                <option value="Science Building">Science Building</option>
                                <option value="NTED Building">NTED Building</option>
                                <option value="IC Building">IC Building</option>
                                <option value="ILEGG Building">ILEGG Building</option>
                                <option value="IAAS Building">IAAS Building</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputFloor" class="form-label">Floor</label>
                            <select class="form-select" id="inputFloor" required>
                                <option value="" selected disabled>Select Floor</option>
                                <option value="Ground Floor">Ground Floor</option>
                                <option value="Second Floor">Second Floor</option>
                                <option value="Third Floor">Third Floor</option>
                                <option value="Fourth Floor">Fourth Floor</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputRoom" class="form-label">Room</label>
                            <select class="form-select" id="inputRoom" required>
                                <option value="" selected disabled>Select Room</option>
                                <option value="Room 101">Room 101</option>
                                <option value="Room 102">Room 102</option>
                                <option value="Room 103">Room 103</option>
                                <option value="Room 104">Room 104</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="applianceModel" class="form-label">Appliance Model</label>
                            <input type="text" class="form-control" id="applianceModel" placeholder="e.g., Samsung AC-2000" required>
                        </div>
                        <div class="col-12">
                            <label for="powerRating" class="form-label">Power Rating (Watts)</label>
                            <input type="number" class="form-control" id="powerRating" placeholder="e.g., 1500" required>
                        </div>
                        <div class="col-12">
                            <label for="inputCategory" class="form-label">Category</label>
                            <select class="form-select" id="inputCategory" required>
                                <option value="" selected disabled>Select Category</option>
                                <option value="Aircon">Air Conditioner</option>
                                <option value="Fan">Fan</option>
                                <option value="Light">Light</option>
                                <option value="TV">Television</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle me-1"></i>Cancel
                </button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                    <i class="bi bi-check-circle me-1"></i>Add Appliance
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Class Schedule Card -->
<div class="card border-0 shadow-sm modern-card mt-4">
    <div class="card-body p-4">
        <div class="section-header mb-4">
            <div class="d-flex align-items-center gap-2">
                <div class="section-icon bg-primary-subtle">
                    <i class="bi bi-calendar-check text-primary"></i>
                </div>
                <div>
                    <h6 class="section-title mb-0">Class Schedule</h6>
                    <p class="section-subtitle mb-0">Add and manage class schedules</p>
                </div>
            </div>
        </div>
        
        <form class="modern-form">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="courseCode" class="form-label">Course Code</label>
                    <input type="text" class="form-control" id="courseCode" placeholder="e.g., CS101">
                </div>
                <div class="col-md-6">
                    <label for="instructorName" class="form-label">Instructor Name</label>
                    <input type="text" class="form-control" id="instructorName" placeholder="e.g., Dr. Smith">
                </div>
                <div class="col-md-6">
                    <label for="buildingName" class="form-label">Building</label>
                    <input type="text" class="form-control" id="buildingName" placeholder="e.g., Academic Building">
                </div>
                <div class="col-md-6">
                    <label for="classroom" class="form-label">Classroom</label>
                    <input type="text" class="form-control" id="classroom" placeholder="e.g., Room 101">
                </div>
                
                <div class="col-12">
                    <label class="form-label mb-2">Schedule Days</label>
                    <div class="day-selector">
                        <div class="form-check day-check">
                            <input class="form-check-input" type="checkbox" value="Sunday" id="daySun">
                            <label class="form-check-label" for="daySun">Sun</label>
                        </div>
                        <div class="form-check day-check">
                            <input class="form-check-input" type="checkbox" value="Monday" id="dayMon">
                            <label class="form-check-label" for="dayMon">Mon</label>
                        </div>
                        <div class="form-check day-check">
                            <input class="form-check-input" type="checkbox" value="Tuesday" id="dayTue">
                            <label class="form-check-label" for="dayTue">Tue</label>
                        </div>
                        <div class="form-check day-check">
                            <input class="form-check-input" type="checkbox" value="Wednesday" id="dayWed">
                            <label class="form-check-label" for="dayWed">Wed</label>
                        </div>
                        <div class="form-check day-check">
                            <input class="form-check-input" type="checkbox" value="Thursday" id="dayThu">
                            <label class="form-check-label" for="dayThu">Thu</label>
                        </div>
                        <div class="form-check day-check">
                            <input class="form-check-input" type="checkbox" value="Friday" id="dayFri">
                            <label class="form-check-label" for="dayFri">Fri</label>
                        </div>
                        <div class="form-check day-check">
                            <input class="form-check-input" type="checkbox" value="Saturday" id="daySat">
                            <label class="form-check-label" for="daySat">Sat</label>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="startTime" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="startTime">
                </div>
                <div class="col-md-6">
                    <label for="endTime" class="form-label">End Time</label>
                    <input type="time" class="form-control" id="endTime">
                </div>
            </div>
            
            <div class="mt-4">
                <button type="button" class="btn btn-success">
                    <i class="bi bi-check-circle me-1"></i>Save Schedule
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Main Control Panel -->
<div class="card border-0 shadow-sm modern-card mt-4">
    <div class="card-body p-4">
        <!-- Search and Actions -->
        <div class="control-actions mb-4">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6">
                    <div class="search-box">
                        <i class="bi bi-search search-icon"></i>
                        <input type="text" id="search" class="form-control search-input" placeholder="Search appliances, rooms, or buildings...">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex gap-2 justify-content-lg-end">
                        <button type="button" class="btn btn-outline-danger">
                            <i class="bi bi-power me-1"></i>Turn Off Selected
                        </button>
                        <button type="button" class="btn btn-outline-success">
                            <i class="bi bi-lightning-charge me-1"></i>Turn On Selected
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Appliance Grid -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
            <!-- Appliance Card 1 -->
            <div class="col">
                <div class="appliance-card">
                    <div class="appliance-header">
                        <div class="d-flex align-items-center gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check1">
                            </div>
                            <div class="appliance-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h6 class="appliance-title mb-0">Academic Building 1-1</h6>
                        </div>
                    </div>
                    <div class="appliance-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="status-badge status-active">Active</div>
                            <div class="form-check form-switch appliance-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="switch1" checked>
                            </div>
                        </div>
                        <div class="appliance-info mb-3">
                            <div class="info-row">
                                <i class="bi bi-thermometer-half info-icon"></i>
                                <span class="info-text">2 Air Conditioners</span>
                            </div>
                            <div class="info-row">
                                <i class="bi bi-lightbulb info-icon"></i>
                                <span class="info-text">8 Lights</span>
                            </div>
                        </div>
                        <button class="btn btn-outline-success btn-sm w-100" type="button" data-bs-toggle="modal" data-bs-target="#viewDetails">
                            <i class="bi bi-gear me-1"></i>Manage
                        </button>
                    </div>
                </div>
            </div>

            <!-- Appliance Card 2 -->
            <div class="col">
                <div class="appliance-card">
                    <div class="appliance-header">
                        <div class="d-flex align-items-center gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check2">
                            </div>
                            <div class="appliance-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h6 class="appliance-title mb-0">Academic Building 1-2</h6>
                        </div>
                    </div>
                    <div class="appliance-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="status-badge status-active">Active</div>
                            <div class="form-check form-switch appliance-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="switch2" checked>
                            </div>
                        </div>
                        <div class="appliance-info mb-3">
                            <div class="info-row">
                                <i class="bi bi-thermometer-half info-icon"></i>
                                <span class="info-text">2 Air Conditioners</span>
                            </div>
                            <div class="info-row">
                                <i class="bi bi-lightbulb info-icon"></i>
                                <span class="info-text">6 Lights</span>
                            </div>
                        </div>
                        <button class="btn btn-outline-success btn-sm w-100" type="button" data-bs-toggle="modal" data-bs-target="#viewDetails">
                            <i class="bi bi-gear me-1"></i>Manage
                        </button>
                    </div>
                </div>
            </div>

            <!-- Appliance Card 3 -->
            <div class="col">
                <div class="appliance-card">
                    <div class="appliance-header">
                        <div class="d-flex align-items-center gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check3">
                            </div>
                            <div class="appliance-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h6 class="appliance-title mb-0">Academic Building 1-3</h6>
                        </div>
                    </div>
                    <div class="appliance-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="status-badge status-inactive">Inactive</div>
                            <div class="form-check form-switch appliance-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="switch3">
                            </div>
                        </div>
                        <div class="appliance-info mb-3">
                            <div class="info-row">
                                <i class="bi bi-thermometer-half info-icon"></i>
                                <span class="info-text">2 Air Conditioners</span>
                            </div>
                            <div class="info-row">
                                <i class="bi bi-lightbulb info-icon"></i>
                                <span class="info-text">10 Lights</span>
                            </div>
                        </div>
                        <button class="btn btn-outline-success btn-sm w-100" type="button" data-bs-toggle="modal" data-bs-target="#viewDetails">
                            <i class="bi bi-gear me-1"></i>Manage
                        </button>
                    </div>
                </div>
            </div>

            <!-- Appliance Card 4 -->
            <div class="col">
                <div class="appliance-card">
                    <div class="appliance-header">
                        <div class="d-flex align-items-center gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check4">
                            </div>
                            <div class="appliance-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h6 class="appliance-title mb-0">Academic Building 1-4</h6>
                        </div>
                    </div>
                    <div class="appliance-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="status-badge status-active">Active</div>
                            <div class="form-check form-switch appliance-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="switch4" checked>
                            </div>
                        </div>
                        <div class="appliance-info mb-3">
                            <div class="info-row">
                                <i class="bi bi-thermometer-half info-icon"></i>
                                <span class="info-text">2 Air Conditioners</span>
                            </div>
                            <div class="info-row">
                                <i class="bi bi-lightbulb info-icon"></i>
                                <span class="info-text">12 Lights</span>
                            </div>
                        </div>
                        <button class="btn btn-outline-success btn-sm w-100" type="button" data-bs-toggle="modal" data-bs-target="#viewDetails">
                            <i class="bi bi-gear me-1"></i>Manage
                        </button>
                    </div>
                </div>
            </div>

            <!-- Appliance Card 5 -->
            <div class="col">
                <div class="appliance-card">
                    <div class="appliance-header">
                        <div class="d-flex align-items-center gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check5">
                            </div>
                            <div class="appliance-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h6 class="appliance-title mb-0">Academic Building 1-5</h6>
                        </div>
                    </div>
                    <div class="appliance-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="status-badge status-active">Active</div>
                            <div class="form-check form-switch appliance-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="switch5" checked>
                            </div>
                        </div>
                        <div class="appliance-info mb-3">
                            <div class="info-row">
                                <i class="bi bi-thermometer-half info-icon"></i>
                                <span class="info-text">2 Air Conditioners</span>
                            </div>
                            <div class="info-row">
                                <i class="bi bi-lightbulb info-icon"></i>
                                <span class="info-text">8 Lights</span>
                            </div>
                        </div>
                        <button class="btn btn-outline-success btn-sm w-100" type="button" data-bs-toggle="modal" data-bs-target="#viewDetails">
                            <i class="bi bi-gear me-1"></i>Manage
                        </button>
                    </div>
                </div>
            </div>

            <!-- Appliance Card 6 -->
            <div class="col">
                <div class="appliance-card">
                    <div class="appliance-header">
                        <div class="d-flex align-items-center gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check6">
                            </div>
                            <div class="appliance-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h6 class="appliance-title mb-0">Academic Building 1-6</h6>
                        </div>
                    </div>
                    <div class="appliance-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="status-badge status-maintenance">Maintenance</div>
                            <div class="form-check form-switch appliance-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="switch6">
                            </div>
                        </div>
                        <div class="appliance-info mb-3">
                            <div class="info-row">
                                <i class="bi bi-thermometer-half info-icon"></i>
                                <span class="info-text">2 Air Conditioners</span>
                            </div>
                            <div class="info-row">
                                <i class="bi bi-lightbulb info-icon"></i>
                                <span class="info-text">9 Lights</span>
                            </div>
                        </div>
                        <button class="btn btn-outline-success btn-sm w-100" type="button" data-bs-toggle="modal" data-bs-target="#viewDetails">
                            <i class="bi bi-gear me-1"></i>Manage
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- View Details Modal -->
<div class="modal fade" id="viewDetails" tabindex="-1" aria-labelledby="viewDetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modern-modal">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title mb-1">Manage Appliances</h5>
                    <p class="modal-subtitle mb-0">Update appliance status and details</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="modern-form">
                    <!-- Room Information -->
                    <div class="info-section mb-4">
                        <h6 class="info-section-title">Room Information</h6>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Building</label>
                                <div class="info-display">Academic Building</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Floor</label>
                                <div class="info-display">Ground Floor</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Room</label>
                                <div class="info-display">Room 1-1</div>
                            </div>
                        </div>
                    </div>

                    <!-- Appliances -->
                    <div class="appliances-list">
                        <h6 class="info-section-title mb-3">Appliances</h6>
                        
                        <!-- Air Conditioner -->
                        <div class="appliance-item">
                            <div class="appliance-item-header">
                                <i class="bi bi-thermometer-half me-2"></i>
                                <span class="appliance-item-title">Air Conditioner</span>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <input type="text" class="form-control form-control-sm" value="AC-001" readonly>
                                </div>
                                <div class="col-6">
                                    <select class="form-select form-select-sm">
                                        <option value="Active" selected>Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Maintenance">Under Maintenance</option>
                                        <option value="Broken">Broken</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Fan -->
                        <div class="appliance-item">
                            <div class="appliance-item-header">
                                <i class="bi bi-fan me-2"></i>
                                <span class="appliance-item-title">Fan</span>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <input type="text" class="form-control form-control-sm" value="FAN-001" readonly>
                                </div>
                                <div class="col-6">
                                    <select class="form-select form-select-sm">
                                        <option value="Active" selected>Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Maintenance">Under Maintenance</option>
                                        <option value="Broken">Broken</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Lights -->
                        <div class="appliance-item">
                            <div class="appliance-item-header">
                                <i class="bi bi-lightbulb me-2"></i>
                                <span class="appliance-item-title">Lights</span>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <input type="text" class="form-control form-control-sm" value="LIGHT-001" readonly>
                                </div>
                                <div class="col-6">
                                    <select class="form-select form-select-sm">
                                        <option value="Active" selected>Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Maintenance">Under Maintenance</option>
                                        <option value="Broken">Broken</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle me-1"></i>Close
                </button>
                <button type="button" class="btn btn-success">
                    <i class="bi bi-check-circle me-1"></i>Save Changes
                </button>
            </div>
        </div>
    </div>
</div>
