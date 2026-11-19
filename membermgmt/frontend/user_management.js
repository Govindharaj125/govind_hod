console.log("user_management.js loaded");

const tbody = document.querySelector("#userTable tbody");
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");
const roleSelect = document.getElementById("role");
const addUserBtn = document.getElementById("addUserBtn");
const updateUserBtn = document.getElementById("updateUserBtn");
const cancelBtn = document.getElementById("cancelBtn");
const userMsg = document.getElementById("userMsg");

let editingUsername = null;

const apiUrl = "/membermgmt/api/users.php";

async function fetchUsers() {
  const res = await fetch(apiUrl, { credentials: "include" });
  const data = await res.json();
  if (data.success) {
    tbody.innerHTML = "";
    data.data.forEach(user => {
      const tr = document.createElement("tr");
      tr.innerHTML = `
        <td>${user.Uname}</td>
        <td>${user.Role}</td>
        <td>
          <button onclick="startEdit('${user.Uname}', '${user.Role}')">Edit</button>
          <button onclick="deleteUser('${user.Uname}')">Delete</button>
        </td>
      `;
      tbody.appendChild(tr);
    });
  } else {
    userMsg.textContent = "Failed to load users";
    userMsg.style.color = 'red';
  }
}

async function addUser() {
  const username = usernameInput.value.trim();
  const password = passwordInput.value;
  const role = roleSelect.value;
  if (!username || !password || !role) {
    userMsg.textContent = "Please enter all fields";
    userMsg.style.color = 'red';
    return;
  }
  const res = await fetch(apiUrl, {
    method: "POST",
    credentials: "include",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ username, password, role }),
  });
  const data = await res.json();
  if (data.success) {
    fetchUsers();
    resetForm();
    userMsg.textContent = "User added!";
    userMsg.style.color = "green";
  } else {
    userMsg.textContent = data.message;
    userMsg.style.color = 'red';
  }
}

async function updateUser() {
  const password = passwordInput.value; // optional
  const role = roleSelect.value;
  if (!editingUsername || !role) {
    userMsg.textContent = "Please select a user and role";
    userMsg.style.color = 'red';
    return;
  }
  const body = { username: editingUsername, role };
  if (password) {
    body.password = password;
  }
  const res = await fetch(apiUrl, {
    method: "PUT",
    credentials: "include",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(body),
  });
  const data = await res.json();
  if (data.success) {
    fetchUsers();
    resetForm();
    userMsg.textContent = "User updated!";
    userMsg.style.color = "green";
  } else {
    userMsg.textContent = data.message;
    userMsg.style.color = 'red';
  }
}

async function deleteUser(username) {
  if (!confirm(`Delete user ${username}?`)) return;
  const res = await fetch(apiUrl, {
    method: "DELETE",
    credentials: "include",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ username }),
  });
  const data = await res.json();
  if (data.success) {
    fetchUsers();
    userMsg.textContent = "User deleted!";
    userMsg.style.color = "green";
  } else {
    userMsg.textContent = data.message;
    userMsg.style.color = 'red';
  }
}

window.startEdit = function(username, role) {
  editingUsername = username;
  usernameInput.value = username;
  usernameInput.disabled = true;
  passwordInput.value = "";
  roleSelect.value = role;
  addUserBtn.disabled = true;
  updateUserBtn.disabled = false;
  cancelBtn.disabled = false;
};

function resetForm() {
  editingUsername = null;
  usernameInput.value = "";
  usernameInput.disabled = false;
  passwordInput.value = "";
  roleSelect.value = "";
  addUserBtn.disabled = false;
  updateUserBtn.disabled = true;
  cancelBtn.disabled = true;
  userMsg.textContent = "";
}

cancelBtn.addEventListener("click", resetForm);
addUserBtn.addEventListener("click", addUser);
updateUserBtn.addEventListener("click", updateUser);

fetchUsers();
