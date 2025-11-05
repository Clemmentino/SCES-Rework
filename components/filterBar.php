<!-- Filter Bar - Bootstrap 5 -->
<div class="filter-bar container-fluid px-3 py-3 mt-5 bg-white rounded-4 shadow-sm">
  <form class="row g-2 align-items-end">
    
    <!-- Filter Type -->
    <div class="col-12 col-sm-6 col-lg-3">
      <label class="form-label mb-1 fw-semibold">Filter Type</label>
      <select class="form-select form-select-sm" id="filterType">
        <option selected disabled>Select type</option>
        <option>Individual Room</option>
        <option>Building Floor</option>
      </select>
    </div>

    <!-- Select Device -->
    <div class="col-12 col-sm-6 col-lg-3">
      <label class="form-label mb-1 fw-semibold">Select Device</label>
      <select class="form-select form-select-sm">
        <optgroup label="Building Floors">
          <option>AB Building - Floor 1</option>
          <option>AB Building - Floor 2</option>
          <option>AB Building - Floor 3</option>
          <option>AB Building - Floor 4</option>
        </optgroup>
        <optgroup label="Individual Rooms">
          <option>AB 1-1</option>
          <option>AB 1-2</option>
          <option>AB 1-3</option>
          <option>AB 1-4</option>
        </optgroup>
      </select>
    </div>

    <!-- Time Period -->
    <div class="col-12 col-sm-6 col-lg-2">
      <label class="form-label mb-1 fw-semibold">Time Period</label>
      <select class="form-select form-select-sm">
        <option>Today</option>
        <option>Yesterday</option>
        <option>This Week</option>
        <option>This Month</option>
        <option>This Year</option>
      </select>
    </div>

    <!-- Apply Filter Button -->
    <div class="col-12 col-lg-2 d-grid">
      <button type="submit" class="btn btn-success d-flex align-items-center justify-content-center gap-2">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 6H21M3 12H15M3 18H9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        Apply Filter
      </button>
    </div>
  </form>
</div>
