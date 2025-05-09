@extends('backend.layout')

@section('content')

<!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">

            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6 "><h3 class="mb-0">Dashboard</h3></div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>

        <!--end::App Content Header-->
        <div class="app-content">
          <div class="container-fluid">
            <div class="row">


<!--begin::Form Validation-->
                <div class="card card-info card-outline mb-12">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Form Validation</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form class="needs-validation" novalidate>
                    <!--begin::Body-->
                    <div class="card-body">
                      <!--begin::Row-->
                      <div class="row g-3">
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">First name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                            value="Mark"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Last name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom02"
                            value="Otto"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustomUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustomUsername"
                              aria-describedby="inputGroupPrepend"
                              required
                            />
                            <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom03" class="form-label">City</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom03"
                            required
                          />
                          <div class="invalid-feedback">Please provide a valid city.</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom04" class="form-label">State</label>
                          <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                          </select>
                          <div class="invalid-feedback">Please select a valid state.</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom05" class="form-label">Zip</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom05"
                            required
                          />
                          <div class="invalid-feedback">Please provide a valid zip.</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-12">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="invalidCheck"
                              required
                            />
                            <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                          </div>
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button class="btn btn-info" type="submit">Submit form</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                  <!--begin::JavaScript-->
                  <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (() => {
                      'use strict';

                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      const forms = document.querySelectorAll('.needs-validation');

                      // Loop over them and prevent submission
                      Array.from(forms).forEach((form) => {
                        form.addEventListener(
                          'submit',
                          (event) => {
                            if (!form.checkValidity()) {
                              event.preventDefault();
                              event.stopPropagation();
                            }

                            form.classList.add('was-validated');
                          },
                          false,
                        );
                      });
                    })();
                  </script>
                  <!--end::JavaScript-->
                </div>
                <!--end::Form Validation-->

   

</div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
          </div>
      </main>
      <!--end::App Main-->



@endsection