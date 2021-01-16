<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <title>Document</title>
    <script>
      tab.show();
      var triggerEl = document.querySelector('#myTab a[href="#attent"]');
      bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
    </script>
  </head>
  <body>
    <div class="container mt-5 mb-5">
      <nav>
        <div
          class="d-grid gap-5 d-md-flex justify-content-md-center mb-5 nav nav-tabs"
          id="nav-tab"
          role="tablist"
        >
          <a
            href="#nav-valide"
            class="btn btn-success nav-link"
            id="nav-valide-tab"
            data-bs-toggle="tab"
            role="tab"
            aria-controls="nav-valide"
            aria-selected="true"
          >
            Reservation Valide
          </a>
          <a
            href="#nav-attent"
            class="btn btn-success nav-link"
            id="nav-attent-tab"
            data-bs-toggle="tab"
            role="tab"
            aria-controls="nav-attent"
            aria-selected="true"
          >
            Reservation Attent
          </a>
          <a
            href="#nav-programmer"
            class="btn btn-success nav-link"
            id="nav-programmer-tab"
            data-bs-toggle="tab"
            role="tab"
            aria-controls="nav-programmer"
            aria-selected="true"
          >
            Reservation programmer
          </a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
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
          class="tab-pane fade show"
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
          class="tab-pane fade show"
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
  </body>
</html>
