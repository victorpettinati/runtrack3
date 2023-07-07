<!DOCTYPE html>
<html>
<head>
  <title>Liste des utilisateurs</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    function updateUserTable() {
      $.ajax({
        url: "users.php",
        type: "GET",
        dataType: "json",
        success: function(data) {
          var table = $("#userTable");
          table.empty();

          var thead = $("<thead></thead>");
          var tr = $("<tr></tr>");
          tr.append("<th>ID</th>");
          tr.append("<th>Nom</th>");
          tr.append("<th>Prénom</th>");
          tr.append("<th>Email</th>");
          thead.append(tr);
          table.append(thead);

          var tbody = $("<tbody></tbody>");
          $.each(data, function(index, user) {
            var tr = $("<tr></tr>");
            tr.append("<td>" + user.id + "</td>");
            tr.append("<td>" + user.nom + "</td>");
            tr.append("<td>" + user.prenom + "</td>");
            tr.append("<td>" + user.email + "</td>");
            tbody.append(tr);
          });
          table.append(tbody);
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    }
  </script>
</head>
<body>
  <h1>Liste des utilisateurs</h1>
  <button onclick="updateUserTable()">Update</button>
  <table id="userTable"></table>
</body>
</html>
