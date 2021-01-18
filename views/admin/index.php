<?php require_once VIEWS . DS . 'partials/header.php'?>
    <div class="container mt-5 mb-5">
      <nav class=" d-md-flex justify-content-center ">
        <div
          class="d-grid gap-3 nav nav-tabs"
          id="nav-tab"
          role="tablist"
        >
          <a
            href="#nav-valide"
            class="btn btn-success nav-link active"
            id="nav-valide-tab"
            data-toggle="tab"
            role="tab"
            aria-controls="nav-valide"
            aria-selected="true"
          >
             Valide
          </a>
          <a
            href="#nav-attent"
            class="btn btn-danger nav-link"
            id="nav-attent-tab"
            data-toggle="tab"
            role="tab"
            aria-controls="nav-attent"
            aria-selected="true"
          >
             Attent
          </a>
          <a
            href="#nav-programmer"
            class="btn btn-warning nav-link"
            id="nav-programmer-tab"
            data-toggle="tab"
            role="tab"
            aria-controls="nav-programmer"
            aria-selected="true"
          >
             programmer
          </a>
        </div>
      </nav>
      <div class="tab-content " id="nav-tabContent">
        <div
          class="tab-pane fade show active"
          id="nav-valide"
          role="tabpanel"
          aria-labelledby="nav-valide-tab"
        >
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First1</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td class="gap-2 d-flex justify-content-md-center">
                  <button class="btn btn-success">accepeter</button>
                  <button class="btn btn-danger">rejeter</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div
          class="tab-pane fade "
          id="nav-attent"
          role="tabpanel"
          aria-labelledby="nav-attent-tab"
        >
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First2</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td class="gap-2 d-flex justify-content-md-center">
                  <button class="btn btn-success">accepeter</button>
                  <button class="btn btn-danger">rejeter</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div
          class="tab-pane fade"
          id="nav-programmer"
          role="tabpanel"
          aria-labelledby="nav-programmer-tab"
        >
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First3</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td class="gap-2 d-flex justify-content-md-center">
                  <button class="btn btn-success">accepeter</button>
                  <button class="btn btn-danger">rejeter</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
<?php require_once VIEWS . DS . 'partials/footer.php'?>
